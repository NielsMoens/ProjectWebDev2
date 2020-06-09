<?php

namespace App\Http\Controllers;

use Mollie\Laravel\Facades\Mollie;
use App\Donate_content;
use App\Donation_info;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donate ()
    {
        $donationInfo = Donation_info::all();
        $donateContent = Donate_content::firstOrFail();
        return view('pages.donate',[
            'donationInfo'=>$donationInfo,
            'donateContent' =>$donateContent,
        ]);
    }
        public function getSucces(){
        dd('Payment succesful');
    }

    public function postDonatePayment(Request $r)
    {
        $amount = number_format ($r->donatoramount ,2);
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $amount  // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            "description" => "API payment from laravel",
            "redirectUrl" => route('donate.succespayment', app()->getLocale()),
            "webhookUrl" => route('webhooks.mollie'),
            "metadata" => [
            ],
        ]);
        $payment = Mollie::api()->payments->get($payment->id);
        
        // store data back in to 
        $donator = [
            "donatorname" => $r->donatorname,
            "donatoremail" => $r->donatoremail,
            "donatoramount" => $r->donatoramount,
            "donatormessage" => $r->donatormessage,
        ];
        Donation_info::create($donator);
        
        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
}