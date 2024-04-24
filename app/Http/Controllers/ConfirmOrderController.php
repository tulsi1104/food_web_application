<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class ConfirmOrderController extends Controller
{
    //
    function ConfirmOrder(Request $request){
        $order_id=$request->order_id;
        $button=$request->button;

        $order=Order::find($order_id);
        if($order){
            if($button=="CONFIRM ORDER"){
            $updated_status=$order->update([
                'status'=>"CONFIRM ORDER"
            ]);
            if($updated_status){
                return redirect()->route('Orders.Orders');
            }
            }
            else if($button=="OUT FOR DELIVERY"){
                $updated_status=$order->update([
                    'status'=>"OUT FOR DELIVERY"
                ]);
                if($updated_status){
                    return redirect()->route('Orders.Orders');
                }
            }
            else if($button=="DELIVERED"){
                $updated_status=$order->update([
                    'status'=>"DELIVERED"
                ]);
                if($updated_status){
                    
                    return redirect()->route('Orders.Orders');
                }
            }
        }
    }

    function ViewOrder(Request $request){
        $order_id=$request->order_id;
        
    }
}
