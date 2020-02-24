<?php
/**
 * Created by PhpStorm.
 * User: vikas.patel
 * Date: 2/24/2020
 * Time: 11:55 AM
 */

namespace App\Billing;


use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentGatewayContract
{

    private $currency;
    private $discount;

    public function __construct($currency)
    {

        $this->currency = $currency;
        $this->discount = 0;
    }

    public function setDiscount($discount_amount)
    {
        $this->discount = $discount_amount;
    }


    public function charge($amount)
    {
        //charge the bank

        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount
        ];

        }
}
