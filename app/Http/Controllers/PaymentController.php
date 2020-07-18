<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Cart;
use App\Order;

class PaymentController extends Controller
{
    public function pay(Request $request,$id)
    {
        if($request->has('cash'))
        {
            $user = Auth::user();
            $user_id = Auth::id();
            Cart::session($user_id)->clear();
            return redirect('/home')->with('cash','Pay at Counter');
        }

    }

    public function paid($id)
    {
        $order = Order::where('order_id',$id)->first();
        $order->payment = 1;
        $order->save();
        return back();
    }
}
