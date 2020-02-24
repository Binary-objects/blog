<?php

namespace App\Http\Controllers;

use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetials;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    //

    public function store(OrderDetials $orderDetials , PaymentGatewayContract $paymentGateway){

        $order = $orderDetials->all();

        //dd($order);
    	//$paymentGateway = new PaymentGateway('US');

    	dd($paymentGateway->charge(2500));
    }
}
