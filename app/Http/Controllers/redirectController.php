<?php

namespace App\Http\Controllers;

use App\User;
use App\Lib\PayMaya\PayMaya_SDK;
use PayMaya\API\Checkout;
use PayMaya\Model\Checkout\Item;
use PayMaya\Model\Checkout\ItemAmount;
use PayMaya\Model\Checkout\ItemAmountDetails;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class redirectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        PayMaya_SDK::getInstance()->initCheckout("pk-iaioBC2pbY6d3BVRSebsJxghSHeJDW4n6navI7tYdrN", 
                                                "sk-uh4ZFfx9i0rZpKN6CxJ826nVgJ4saGGVAH9Hk7WrY6Q", 
                                                "SANDBOX");

        // Item
        $itemAmountDetails = new ItemAmountDetails();
        $itemAmountDetails->shippingFee = "14.00";
        $itemAmountDetails->tax = "5.00";
        $itemAmountDetails->subtotal = "50.00";
        $itemAmount = new ItemAmount();
        $itemAmount->currency = "PHP";
        $itemAmount->value = "69.00";
        $itemAmount->details = $itemAmountDetails;
        $item = new Item();
        $item->name = "Nanay Mo";
        $item->code = "pm_belt";
        $item->description = "Medium-sized nanay made from authentic tatay";
        $item->quantity = "1";
        $item->amount = $itemAmount;
        $item->totalAmount = $itemAmount;

        // Checkout
        $itemCheckout = new Checkout();
        $user = new User();
        $itemCheckout->buyer = $user->buyerInfo();
        $itemCheckout->items = array($item);
        $itemCheckout->totalAmount = $itemAmount;
        $itemCheckout->requestReferenceNumber = "123456789";
        $itemCheckout->redirectUrl = array(
            "success" => "http://127.0.0.1:8000/lsapp/public/index.blade.php",
            "failure" => "https://shop.com/failure",
            "cancel" => "https://shop.com/cancel"
            );
        $itemCheckout->execute();
        $itemCheckout->retrieve();

        echo "Checkout ID: " . $itemCheckout->id . "\n";
        echo "Checkout URL: " . $itemCheckout->url . "\n";
        return Redirect::to($itemCheckout->url);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
