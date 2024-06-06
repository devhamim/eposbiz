<?php

namespace App\Http\Controllers;

use App\Models\Billingdetails;
use App\Models\customers;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;

class landingpageController extends Controller
{


    //sharee
    function landing_page(){
        return view('landingpage.index');
    }
    // landing_order_store
    function landing_order_store(Request $request){
            $request->validate([
                'name' => 'required',
                'mobile' => 'required|min:11|max:11',
                'address' => 'required',
            ]);

            $lastOrder = Order::orderBy('id', 'desc')->first();
                if ($lastOrder) {
                    $lastOrderId = $lastOrder->order_id;
                    $lastOrderNumber = intval(substr($lastOrderId, 4));
                } else {
                    $lastOrderNumber = 0;
                }
                $newOrderNumber = $lastOrderNumber + 1;

                $order_id = 'NIT-' . str_pad($newOrderNumber, 8, '0', STR_PAD_LEFT);

                if($request->shipping_cost == 60){
                    $district = 'Dhaka';
                }
                if($request->shipping_cost == 120){
                    $district = 'Outside Dhaka';
                }
                Billingdetails::insert([
                    'order_id' => $order_id,
                    'name' => $request->name,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                    'district' => $district,
                    'note' => $request->note,
                    'created_at' => Carbon::now(),
                ]);
                if($request->radio_btn == 1){
                    $price = 950;
                    $product_name = 'প্রিমিয়াম - টু পিচ সেট জামা + ওড়না';
                }
                $subtotal = $price*$request->quantity;
                Order::insert([
                    'order_id' => $order_id,
                    'sub_total' => $subtotal,
                    'delivery_charge' => $request->shipping_cost,
                    'total' => $subtotal + $request->shipping_cost,
                    'color' => $request->color,
                    'landing' => 1,
                    'created_at' => Carbon::now(),
                ]);
                OrderProduct::create([
                    'order_id' => $order_id,
                    'product_id' => $product_name,
                    'quantity' => $request->quantity,
                    'price' => $price,
                    'created_at' => Carbon::now(),
                ]);
                return back()->with("success","Order has been placed successfully");
    }

    //cloth
    function sharee(){
        return view('landingpage.secondpage');
    }

    // landing_order_store
    function sharee_order_store(Request $request){
            $request->validate([
                'name' => 'required',
                'mobile' => 'required|min:11|max:11',
                'address' => 'required',
            ]);

            $lastOrder = Order::orderBy('id', 'desc')->first();
                if ($lastOrder) {
                    $lastOrderId = $lastOrder->order_id;
                    $lastOrderNumber = intval(substr($lastOrderId, 4));
                } else {
                    $lastOrderNumber = 0;
                }
                $newOrderNumber = $lastOrderNumber + 1;

                $order_id = 'NIT-' . str_pad($newOrderNumber, 8, '0', STR_PAD_LEFT);

                if($request->shipping_cost == 70){
                    $district = 'Dhaka';
                }
                if($request->shipping_cost == 120){
                    $district = 'Outside Dhaka';
                }
                Billingdetails::insert([
                    'order_id' => $order_id,
                    'name' => $request->name,
                    'mobile' => $request->mobile,
                    'address' => $request->address,
                    'district' => $district,
                    'note' => $request->note,
                    'created_at' => Carbon::now(),
                ]);
                if($request->radio_btn == 1){
                    $price = 950;
                    $product_name = 'Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি';
                    $quantity = 1;
                }
                if($request->radio_btn == 2){
                    $price = 1800;
                    $product_name = 'Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি';
                    $quantity = 2;
                }
                if($request->radio_btn == 3){
                    $price = 2600;
                    $product_name = 'Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি';
                    $quantity = 3;
                }
                if($request->radio_btn == 4){
                    $price = 3600;
                    $product_name = 'Modina Dying >টু পিস জামা+ওড়না ১ সেট>৬০ বডি';
                    $quantity = 4;
                }

                Order::insert([
                    'order_id' => $order_id,
                    'sub_total' => $price,
                    'delivery_charge' => $request->shipping_cost,
                    'total' => $price + $request->shipping_cost,
                    'color' => $request->color,
                    'landing' => 1,
                    'created_at' => Carbon::now(),
                ]);
                OrderProduct::create([
                    'order_id' => $order_id,
                    'product_id' => $product_name,
                    'quantity' => $quantity,
                    'price' => $price,
                    'created_at' => Carbon::now(),
                ]);
                return back()->with("success","Order has been placed successfully");
    }
}
