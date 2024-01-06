<?php

namespace app\Controller;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use Dotenv\Dotenv;

class PayPalHandler
{
    private $apiContext;

    public function __construct()
    {
        // Load environment variables from .env file
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        // Initialize PayPal API context
        $clientId = $_ENV['PAYPAL_CLIENT_ID'];
        $clientSecret = $_ENV['PAYPAL_CLIENT_SECRET'];

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential($clientId, $clientSecret)
        );

        $this->apiContext->setConfig([
            'mode' => 'sandbox',
            'log.LogEnabled' => true,
            'log.FileName' => 'PayPal.log',
            'log.LogLevel' => 'DEBUG',
        ]);
    }

    public function createPayment($amount, $description)
    {
        // Create a payment using PayPal SDK
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item = new Item();
        $item->setName($description)
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($amount);

        $itemList = new ItemList();
        $itemList->setItems([$item]);

        $details = new Details();
        $details->setShipping(0)
            ->setTax(0)
            ->setSubtotal($amount);

        $amountObj = new Amount();
        $amountObj->setCurrency('USD')
            ->setTotal($amount)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amountObj)
            ->setItemList($itemList)
            ->setDescription($description);

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl('https://localhost/StadiumStream/home')
            ->setCancelUrl('https://localhost/StadiumStream/home');

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions([$transaction]);

        $response = $payment->create($this->apiContext);

        // Get approval URL
        $approvalUrl = $response->links[1]->href;

        return $approvalUrl;
    }
}
