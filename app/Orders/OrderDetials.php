<?php
/**
 * Created by PhpStorm.
 * User: vikas.patel
 * Date: 2/24/2020
 * Time: 12:21 PM
 */

namespace App\Orders;


use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;

class OrderDetials
{
    /**
     * @var \App\Billing\BankPaymentGateway
     */
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(500);

        return [
            'name' => 'testing',
            'address' => 'satnacruz west'
        ];
    }


}
