<?php

namespace App\Http\Controllers;

use App\Models\Deliverypartner;
use App\Models\Order;
use Illuminate\Http\Request;

class DeliveryPartnerController extends Controller
{
    //
    function AddPartner(Request $request){
        $name=$request->dpname;
        $number=$request->dpnumber;
        $image = $request->file('dpimage');

        if ($image) {
            $imageName = $image->getClientOriginalName();    
            $imagePath = $image->storeAs('delivery-partners', $imageName, 'public');  
        } else {
            $imagePath = null;
        }

        $create=Deliverypartner::create([
            'namee'=>$name,
            'phone_number'=>$number,
            'profile_photo' => $imagePath, // Store the image path instead of the URL
        ]);
        if($create){
            return redirect()->route('listpartners.partners');
        }else
        {
            return "Failed";
        }
    }

    function partners(){
        $partners=Deliverypartner::all();
        return view('admin.deliverypartners',['Partners'=>$partners]);
    }

    function AssignPartner(Request $request){
        $partner_id=$request->partner_id;
        $order_id=$request->order_id;

        $order=Order::find($order_id);
        $updated=$order->update([
            'deliverypartner_id'=>$partner_id,
            'status'=>'DELIVERY PARTNER ASSIGNED'
        ]);
        // dd($order);
        if($updated){
            $dpartner=Deliverypartner::find($partner_id);
            $updatedd=$dpartner->update([
                'availability'=>'busy'
            ]);
            if($updatedd){
                return redirect()->route('Orders.Orders');
            }
        }
    }

    function MakeOffline(Request $request){
        $partner_id=$request->partner_id;

        $partner=Deliverypartner::find($partner_id);
        if($partner->availability=='offline'){
            $make_offline=$partner->update([
                'availability'=>'available'
            ]);
            if($make_offline){
                return redirect()->route('listpartners.partners');
            }
        }
        else{
            $make_offline=$partner->update([
                'availability'=>'offline'
            ]);
            if($make_offline){
                return redirect()->route('listpartners.partners');
            }
        }
    }
}
