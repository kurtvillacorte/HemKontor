<?php

namespace App\Libraries\PayMaya\sample\Checkout;

require __DIR__ . "/../autoload.php";

use App\Libraries\PayMaya\lib\PayMaya\Model\Checkout\Buyer;
use App\Libraries\PayMaya\lib\PayMaya\Model\Checkout\Address;
use App\Libraries\PayMaya\lib\PayMaya\Model\Checkout\Contact;

class User
{
	public $firstName;
	public $middleName;
	public $lastName;
	public $contact;
	public $shippingAddress;
	public $billingAddress;

	public function __construct()
	{
		$this->firstName = "John";
		$this->middleName = "Michaels";
		$this->lastName = "Doe";

		// Contact
		$this->contact = new Contact();
		$this->contact->phone = "+63(2)1234567890";
		$this->contact->email = "paymayabuyer1@gmail.com";

		// Address
		$address = new Address();
		$address->line1 = "9F Robinsons Cybergate 3";
		$address->line2 = "Pioneer Street";
		$address->city = "Mandaluyong City";
		$address->state = "Metro Manila";
		$address->zipCode = "12345";
		$address->countryCode = "PH";
		$this->shippingAddress = $address;
		$this->billingAddress = $address;
	}
	
	public function buyerInfo()
	{
		$buyer = new Buyer();
		$buyer->firstName = $this->firstName;
		$buyer->middleName = $this->middleName;
		$buyer->lastName = $this->lastName;
		$buyer->contact = $this->contact;
		$buyer->shippingAddress = $this->shippingAddress;
		$buyer->billingAddress = $this->billingAddress;
		return $buyer;
	}
}
