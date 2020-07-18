<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Combo;
use App\Item;
use App\TodaySpecial;
use App\ComboItem;
use App\Cuisine;
use App\Order;
use App\User;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $cuisines=Cuisine::all();
        $items=Item::all();
        return view('admin.index')->with('items',$items)->with('cuisines',$cuisines);
    }

    public function store(Request $request)
    {
        if($request->has('add_item'))
        {

                $this->validate($request,[
                    'item_name' => 'required',
                    'item_price' => 'required',
                    'item_description' => 'required',
                    'availability' => 'required', 
                    'cuisine' => 'required',
                    'item_image'=> 'required',
                ]);
                $cuisine=Cuisine::where('cuisine_name',$request->input('cuisine'))->first();
                $item = new Item;
                $item->item_name = $request->input('item_name');
                $item->item_price = $request->input('item_price');
                $item->item_description = $request->input('item_description');
                $item->availability = $request->input('availability');
                $item->cuisine_id_fk = $cuisine->cuisine_id;
                $item->item_rating = 5;
                
                if($request->hasFile('item_image'))
                {
                    //File Name with Extension
                    $filenamewithext = $request->file('item_image')->getClientOriginalName();
                    //Get File name
                    $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
                    //get just extension
                    $extension = $request->file('item_image')->getClientOriginalExtension();
                    //filename to store
                    $fileNameToStore=$filename.'_'.time().'.'.$extension;
                    //upload image
                    $path = $request->file('item_image')->storeAs('public/images',$fileNameToStore);
                }
                else
                {
                    $fileNameToStore = 'noimage.jpg';
                }

                $item->item_image=$fileNameToStore;
                $item->save();
        } 

        if($request->has('add_combo'))
        {

                $this->validate($request,[
                    'combo_name' => 'required',
                    'combo_price' => 'required',
                ]);

            
                $combo = new Combo;
                $combo->combo_name = $request->input('combo_name');
                $combo->combo_price = $request->input('combo_price');
                $combo->save();
                $list=$request->input('items');
                foreach($list as $list_item)
                {
                    $item=Item::where('item_name',$list_item)->first();
                    $entry=new ComboItem;
                    $entry->combo_id_fk = $combo->combo_id;
                    $entry->item_id_fk = $item->item_id;
                    $entry->save();
                }

        } 

        if($request->has('TodaysSpecial'))
        {
            TodaySpecial::query()->truncate();

            $list=$request->input('items');
            foreach($list as $list_item)
            {
                $item=Item::where('item_name',$list_item)->first();
                $entry=new TodaySpecial;
                $entry->item_id_fk = $item->item_id;
                $entry->save();
            }

            
        }

        if($request->has('add_cuisine'))
        {
           
            $this->validate($request,[
                'cuisine_name' => 'required', 
            ]);

            $cuisine = new Cuisine;
            $cuisine->cuisine_name = $request->input('cuisine_name');
            $cuisine->save();    
            
        }
        return back()->with('message','Added Successfully');
    }
    // public function paymode($id)
    // {

    // }

    public function showpaymode()
    {
        $orders = DB::table('orders')
                ->join('users', 'user_id_fk', '=', 'id')
                ->select('orders.*','name')
                ->where('mode', 0)
                ->where('payment',0)
                ->get();
        return view('admin.pay_mode')->with('orders',$orders);
    }

    public function view()
    {
        $orders = DB::table('orders')
                ->join('users', 'user_id_fk', '=', 'id')
                ->select('orders.*','name')
                ->where('payment',1)
                ->where('status',0)
                ->orderBy('orders.updated_at', 'asc')
                ->get();
        return view('admin.view_orders')->with('orders',$orders);    
    }

    public function done($id)
    {
        $order = Order::where('order_id',$id)->first();
        $order->status = 1;
        $order->save();
        return back();
    }
}
