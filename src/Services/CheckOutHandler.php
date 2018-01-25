<?php

namespace App\Services;

use App\Services\SubscribeDataGenerator\FlusherService;
use Symfony\Component\HttpFoundation\Request;



class CheckOutHandler
{    
    
private $flusher;

public function __construct(FlusherService $flusher)
{
    $this->flusher = $flusher;
}
    
    private function generateStripe(Request $request)
    {
      \Stripe\Stripe::setApiKey("sk_test_8QQmpwx1lhq1CggvKz28zqDz");
        $token = $request->request->get('stripeToken');
        $session = $request->getSession();
        $don = $session->get('don');
        $tarif = $don->getAmount();
        $tarif *= 100;
        return array('tarif' =>$tarif, 'token' => $token, 'don' => $don);
    }
    
    private function generateCharge($tarif, $token, $don)
    {
        \Stripe\Charge::create(array(
                "amount" => $tarif, // Amount in cents
                "currency" => "eur",
                "source" => $token,
                "description" => "Don de ".$don->getFirstname()." ".$don->getLastname()
            ));
            $this->flusher->flushEntity($don);
    }
    
    public function generateData(Request $request)
    {
        $data = $this->generateStripe($request);
        $tarif = $data['tarif']; $don = $data['don']; $token = $data['token'];
        $this->generateCharge($tarif, $token, $don);
    }
}
