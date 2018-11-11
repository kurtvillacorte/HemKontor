<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Libraries\PayMaya\lib\PayMaya\PayMayaSDK;
use App\Libraries\PayMaya\lib\PayMaya\API\Webhook;
use App\Libraries\PayMaya\lib\PayMaya\API\Checkout;
use App\Libraries\PayMaya\lib\PayMaya\API\Customization;
use App\Libraries\PayMaya\lib\PayMaya\Model\Checkout\Item;
use App\Libraries\PayMaya\lib\PayMaya\Model\Checkout\ItemAmount;
use App\Libraries\PayMaya\lib\PayMaya\Model\Checkout\ItemAmountDetails;
use App\Libraries\PayMaya\sample\Checkout\User;

class PayMayaTestController extends Controller
{
    //
    public function setupPayMaya()
    {
        PayMayaSDK::getInstance()->initCheckout(
            env('PAYMAYA_PUBLIC_KEY'),
            env('PAYMAYA_SECRET_KEY'),
            (\App::environment('production') ? 'PRODUCTION' : 'SANDBOX')
        );

        $this->setShopCustomization();
        $this->setWebhooks();

        return redirect('/');
    }

    public function redirectToPayMaya()
    {
        $sample_item_name = 'Product 1';
        $sample_total_price = 1000.00;

        $sample_user_phone = '1234567';
        $sample_user_email = 'test@gmail.com';

        $sample_reference_number = '1234567890';

        PayMayaSDK::getInstance()->initCheckout(
            env('PAYMAYA_PUBLIC_KEY'),
            env('PAYMAYA_SECRET_KEY'),
            (\App::environment('production') ? 'PRODUCTION' : 'SANDBOX')
        );

        // Item
        $itemAmountDetails = new ItemAmountDetails();
        $itemAmountDetails->tax = "0.00";
        $itemAmountDetails->subtotal = number_format($sample_total_price, 2, '.', '');
        $itemAmount = new ItemAmount();
        $itemAmount->currency = "PHP";
        $itemAmount->value = $itemAmountDetails->subtotal;
        $itemAmount->details = $itemAmountDetails;
        $item = new Item();
        $item->name = $sample_item_name;
        $item->amount = $itemAmount;
        $item->totalAmount = $itemAmount;

        // Checkout
        $itemCheckout = new Checkout();

        $user = new User();
        $user->contact->phone = $sample_user_phone;
        $user->contact->email = $sample_user_email;

        $itemCheckout->buyer = $user->buyerInfo();
        $itemCheckout->items = array($item);
        $itemCheckout->totalAmount = $itemAmount;
        $itemCheckout->requestReferenceNumber = $sample_reference_number;
        $itemCheckout->redirectUrl = array(
            "success" => url('returl-url/success'),
            "failure" => url('returl-url/failure'),
            "cancel" => url('returl-url/cancel'),
        );
        $itemCheckout->execute();
        $itemCheckout->retrieve();

        return redirect()->to($itemCheckout->url);
    }

    private function setShopCustomization()
    {
        $shopCustomization = new Customization();
        $shopCustomization->get();

        $shopCustomization->logoUrl = asset('logo.jpg');
        $shopCustomization->iconUrl = asset('favicon.ico');
        $shopCustomization->appleTouchIconUrl = asset('favicon.ico');
        $shopCustomization->customTitle = 'PayMaya Payment Gateway';
        $shopCustomization->colorScheme = '#f3dc2a';

        $shopCustomization->set();
    }

    private function setWebhooks()
    {
        $webhooks = Webhook::retrieve();
        foreach ($webhooks as $webhook) {
            $webhook->delete();
        }

        $successWebhook = new Webhook();
        $successWebhook->name = Webhook::CHECKOUT_SUCCESS;
        $successWebhook->callbackUrl = url('callback/success');
        $successWebhook->register();

        $failureWebhook = new Webhook();
        $failureWebhook->name = Webhook::CHECKOUT_FAILURE;
        $failureWebhook->callbackUrl = url('callback/error');
        $failureWebhook->register();
    }
}
