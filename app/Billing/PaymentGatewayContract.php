<?php
/**
 * Created by PhpStorm.
 * User: vikas.patel
 * Date: 2/24/2020
 * Time: 12:52 PM
 */

namespace App\Billing;

interface PaymentGatewayContract
{
    public function setDiscount($discount_amount);

    public function charge($amount);
}
