<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ConfirmOrderController extends Controller
{
    //
    function ConfirmOrder(Request $request){
        $order_id=$request->order_id;
        $order=Order::find($order_id);
        if($order){
            $updated_status=$order->update([
                'status'=>"CONFIRM ORDER"
            ]);

            if($updated_status){
                return redirect()->route('Orders.Orders');
            }
        }
    }
}
