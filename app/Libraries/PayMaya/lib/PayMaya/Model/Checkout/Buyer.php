<?php

namespace App\Libraries\PayMaya\lib\PayMaya\Model\Checkout;

use App\Libraries\PayMaya\lib\PayMaya\Model\Checkout\Contact;
use App\Libraries\PayMaya\lib\PayMaya\Model\Checkout\Address;

class Buyer
{
	public $firstName;
	public $middleName;
	public $lastName;
	public $contact;
	public $shippingAddress;
	public $billingAddress;
}
