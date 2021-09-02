<?php

namespace App\Billing;

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use App\Interfaces\Payment\PaymentGatewayInterface;
use PayPalCheckoutSdk\Core\ProductionEnvironment;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

class Paypal implements PaymentGatewayInterface
{

    protected $payPal;

    public function __construct()
    {

        if (env('APP_ENV') === 'production') {
            $payPalEnvironment = new ProductionEnvironment(env('PAYPAL_CLIENT'), env('PAYPAL_SECRET'));
        } else {
            $payPalEnvironment = new SandboxEnvironment(env('PAYPAL_TEST_CLIENT'), env('PAYPAL_TEST_SECRET'));
        }

        $this->payPal = new PayPalHttpClient($payPalEnvironment);
    }

    public function charge($customer, $paymentData)
    {

        $orderRequest = new OrdersCreateRequest();
        $orderRequest->prefer('return=representation');
        $orderRequest->body = [
            'intent'              => 'CAPTURE',
            'application_context' => [
                'return_url' => '',
                'cancel_url' => ''
            ],
            'purchase_units'      => [
                [
                    'description' => $paymentData['description'],
                    'amount'      => [
                        'currency_code' => $paymentData['currency'],
                        'value'         => $paymentData['amount']
                    ]
                ]
            ]
        ];

        $orderResponse = $this->payPal->execute($orderRequest);

        dd($orderResponse);
        return $orderResponse->result->id;

    }
}
