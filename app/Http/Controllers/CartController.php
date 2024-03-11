<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Cart; 
use App\Models\CartItem; 
use App\Models\Order; 
use App\Models\OrderEn;
use Illuminate\Support\Facades\Hash;
use App\Helpers\AppHelper;

class CartController extends Controller
{
    public function viewCart(Request $request)
    {
        if ($request->isMethod('post')) {
            $cartData = $request->input('cartData');
            $cartTotal = $request->input('carttotalPrice');
            $cartTotalweigth = $request->input('carttotalweigth');
            $cartCustomerId = $request->input('customerId');
            $cartId = 0;
    
            if (is_string($cartData)) {
                $cartData = json_decode($cartData, true);
    
                if ($cartData === null) {
                    // Handle JSON decoding error
                    return response()->json(['error' => 'Invalid JSON format'], 400);
                }
            }
    
            $groupedCart = [];
           
            $overallTotal = 0;
    
            foreach ($cartData as $item) {
                $productId = $item['productId'];
    
                if (!isset($groupedCart[$productId])) {
                    $groupedCart[$productId] = $item;
                    $groupedCart[$productId]['quantity'] = 1;
                   
                } else {
                    $groupedCart[$productId]['quantity']++;
                }
    
                $groupedCart[$productId]['productTotal'] = $groupedCart[$productId]['quantity'] * $groupedCart[$productId]['productPrice'];
    
                $overallTotal += $groupedCart[$productId]['productTotal'];
            }
    
            $data = array_values($groupedCart);
          
            return view('cart.cart', ['data' => $data, 'carttotal' => $cartTotal, 'totalWeight' => $cartTotalweigth, 'overallTotal' => $overallTotal, 'cartCustomerId' => $cartCustomerId, 'cartId'=> $cartId]);
        } else {
            return view('cart.cart');
        }
    }
    
public function removeItem(Request $request)
{
    $productId = $request->input('productId');

   

    return response()->json(['success' => true]);
}

private function getCourierCharge($is_colombo, $product_weight) {

    $default_charge = 300;
    $weight_in_kg = ($product_weight) / 1000;

    if ($weight_in_kg > 1) {
        $remaining = $weight_in_kg - 1;
        $round_remaining = ceil($remaining);
        
        if ($round_remaining > 0) {
            $default_charge += ($round_remaining * 50);
        }
    }

    if (!$is_colombo) {
        $default_charge += 50;
    }

    return $default_charge;
}

public function checkout(Request $request){
    
     $allData = $request-> totaldata;
     $Totalweigth = $request-> totalWeight;
     $TotalPrice = $request-> totalprice;
     $cartId = $request-> cartId;
     //dd( $allData,  $TotalPrice, $Totalweigth,$cartId);
    return view('Order.Order', ['data' => $allData,  'TotalPrice' => $TotalPrice, 'Totalweigth' => $Totalweigth, 'CartId' =>$cartId]);
}


public function RejisterCustomer(Request $request){
    $user = User::create([
        'name' => $request->input('Cname'),
        'email' => $request->input('Cemail'),
        'password' => Hash::make($request->input('Cpassword')),
    ]);

    $response = ['registrationId' => $user->id];

    return response()->json($response);
}

public function proceed(Request $request){
    $totalPrice = $request->input('totalprice');
    $totalWeight = $request->input('totalWeight');
    $cartData = json_decode($request->input('totaldata'), true);

    $cartItem = Cart::create([
        'seller_id' => '0',
        'cart_total' => $totalPrice,
        'create_time' => time(),
    ]);

    foreach ($cartData as $item) {
        CartItem::create([
            'cart_id' => $cartItem->id, 
            'product_id' => $item['productId'],
            'quantity' => $item['quantity'],
            'total' => $item['productTotal'],
            'create_time' => time(),
        ]);
    }

    $CartID = $cartItem->id;

    return response()->json($CartID);
}



public function PlaceOrder(Request $request)
{
    $cartID = $request->CartId;
    $fullamount = $request->FullAmount;
    $fullamount = $request->FullAmount;
    $Cityout =  $request->cityInput;
    $Cityse =  $request->City;

   
    if (empty($Cityout))
    {
       
        $cityy = $Cityse;
    }
    else
    {
        $cityy = $Cityout;
    }
    
    $result = '';
    
    for ($i = 0; $i < 10; $i++) {
        $result .= random_int(0, 9);
    }

    $cartData = CartItem::where('cart_id','=',$cartID)->get();
   //dd($cartdata);
    foreach ($cartData as $item) {
        Order::create([
            'reseller_id' => '0', 
            'order' => $result,
            'product_id' => $item->product_id,
            'name' => $request->FristName.' '.$request->LastName,
            'address' => $request->Address,
            'city' => $cityy,
            'district' => $request->District,
            'contact_1' => $request->Contact_1,
            'contact_2' => $request->Contact_2,
            'quantity' => $item->quantity,
            'total_amount' => $item->total,
            'payment_method' => $request['paymethord'],
            'payment_status' => '0',
            'order_status' => '0',
            'create_time' => time(),
        ]);
    }

    // Use the same order reference for OrderEn
    OrderEn::create([
        'reseller_id' => '0', 
        'order' => $result,
        'total_amount' => $request->FullAmount,
        'payment_method' => $request->paymethord,
        'payment_status' => '0',
        'order_status' => '0',
        'create_time' => time(),
    ]);

    $deleteCart =  Cart::where('id','=',$cartID)->delete();
    $deleteCartItem = CartItem::where('cart_id','=',$cartID)->delete();

    return redirect('/')->with('success', 'Order placed successfully!');
}

public function Authlogin(Request $request){
    $email = $request->input('email');
    $password = $request->input('password');

    $user = User::where('email','=',$email)->first();
    if($user == null){
        $response = "User not found";
    }else{
        if (Hash::check($password,$user->password)) {
            $response = $user->id;
           
        }else{
            $response = "Wrong password!";
        }
    }

    return response()->json($response);

}

}
