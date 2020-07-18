<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Cuisine;
use App\Combo;
use App\TodaySpecial;
use App\ComboItem;
use App\Order;
use App\ItemOrder;
use App\ComboOrder;
use DB;
use Cart;
use Auth;
class OrderController extends Controller
{
    //
    public function show()
    {
        $cuisines=Cuisine::all();
        $combos=array();
        $items=array();
        $combo_items=array();
        $today = DB::table('today_specials')
                ->join('items', 'item_id_fk', '=', 'item_id')
                ->select('items.*')
                ->get();

        return view('ordering.order')->with('cuisines',$cuisines)->with('items',$items)
                                        ->with('combos',$combos)->with('today',$today);
                                        
    }
    
    public function order(Request $request)
    {
        $cuisines=Cuisine::all();
        $cuisine = $request->get('cuisine');
        $combos=array();
        $items=array();
        $combo_items=array();
        $today = DB::table('today_specials')
                ->join('items', 'item_id_fk', '=', 'item_id')
                ->select('items.*')
                ->get();

        if(empty($cuisine)){
            $cuisine = array();
        }

        if(in_array('combos', $cuisine)) #have combo
        {
            $combos=Combo::all();
            

            if(count($cuisine)>1) #combo + some
            {
                $key = array_search('combos', $cuisine);
                unset($cuisine[$key]);

                $items = DB::table('items')
                ->join('cuisines', 'cuisine_id_fk', '=', 'cuisine_id')
                ->select('items.*','cuisine_name')
                ->whereIn('cuisine_name', $cuisine)
                ->get();
            }  
        }

        else
        {
            $items = DB::table('items')
                ->join('cuisines', 'cuisine_id_fk', '=', 'cuisine_id')
                ->select('items.*','cuisine_name')
                ->whereIn('cuisine_name', $cuisine)
                ->get(); 
        }

        return view('ordering.show')->with('items',$items)
                                    ->with('cuisines',$cuisines)
                                    ->with('combos',$combos)
                                    ->with('today',$today);
                                    

    }


    public function add_item(Request $request,$id)
    {
        if($request->has('combo'))
        {
            $combo = Combo::where('combo_id',$id)->first();
            $user = Auth::user();
            $user_id = Auth::id();

            $cid = 5000 + $combo->combo_id;

            Cart::session($user_id)->add(array(
                
                'id' => $cid, // unique row ID
                'name' => $combo->combo_name,
                'price' =>$combo->combo_price,
                'quantity' => $request->input('quantity'),
                'attributes' => array(),
                'associatedModel' => Combo::class
            ));
        }
        else
        {
            $item = Item::where('item_id',$id)->first();
            $user = Auth::user();
            $user_id = Auth::id();
            Cart::session($user_id)->add(array(
                'id' => $item->item_id, // unique row ID
                'name' => $item->item_name,
                'price' =>$item->item_price,
                'quantity' => $request->input('quantity'),
                'attributes' => array(),
                'associatedModel' => Item::class
            ));
        }

        

        return back()->with('message','Added Successfully');
    }

    public function cart()
    {
        $user = Auth::user();
        $user_id = Auth::id();
        $contents=Cart::session($user_id)->getContent();
        return view('ordering.cart')->with('contents',$contents);
    }

    public function continue()
    {   
        $user = Auth::user();
        $user_id = Auth::id();
        if(Cart::session($user_id)->isEmpty())
        {
            return back()->with('message','Your Cart Is Empty ! Add something to cart');
        }
        $contents=Cart::session($user_id)->getContent();
        $totalprice = 0;
        foreach($contents as $content)
        {
            $quantity = $content['quantity'];
            $price = $content['price'];
            $totalprice = $totalprice + $price*$quantity;
        }
        $order = new Order;
        $order->user_id_fk = $user_id;
        $order->total_price = $totalprice; 
        $order->payment = 0; 
        $order->status = 0;
        $order->mode = 0;
        $order->save();

        $order = Order::where('user_id_fk', $user_id)->latest()->first();
        $order_id = $order->order_id;
        
        foreach($contents as $content)
        {
           
            if($content['id'] > 5000)
            {   
                $comboorder = new ComboOrder;
                $comboorder->order_id_fk = $order_id;
                $comboorder->combo_id_fk = $content['id']-5000;
                $comboorder->quantity = $content['quantity'];
                $comboorder->price =  $content['quantity']*$content['price'];
                $comboorder->save();
            }
            else
            {
                $itemorder = new ItemOrder;
                $itemorder->order_id_fk = $order_id;
                $itemorder->item_id_fk = $content['id'];
                $itemorder->quantity = $content['quantity'];
                $itemorder->price =  $content['quantity']*$content['price'];
                $itemorder->save();   
            }
        }
        return view('ordering.summary')->with('contents',$contents)->with('totalprice',$totalprice)->with('order_id',$order_id);
    }


    public function remove($id)
    {   
        $user = Auth::user();
        $user_id = Auth::id();
        Cart::session($user_id)->remove($id);
        return back()->with('message','Removed Successfully');

    }

    public function quantity(Request $request, $id)
    {
        $user = Auth::user();
        $user_id = Auth::id();
       
        
        if($request->has('plus'))
        {
            
            Cart::session($user_id)->update($id, array(
                'quantity' =>1
            ));
        }
        if($request->has('minus'))
        {
           
            Cart::session($user_id)->update($id, array(
            'quantity' => -1
            ));
        }
        return back();    

    }
    public function history()
    {
        $user = Auth::user();
        $user_id = Auth::id();

        $orders = DB::table('orders')
                    ->where('user_id_fk',$user_id)
                    ->orderBy('orders.created_at', 'desc')
                    ->get();
        return view('ordering.history')->with('orders',$orders);
    }
}
