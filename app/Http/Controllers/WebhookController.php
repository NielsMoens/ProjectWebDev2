<?php
namespace App\Http\Controllers;

use App\Donation_info;
use Mollie\Laravel\Facades\Mollie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    public function handle(Request $request) {
        Log::info($request);
        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
            // /webhook/mollie 500 Internal Server Error TODO
            // $donator = new Donation_info();
            // $donator->donatorname = $payment->metadata->donatorname;
            // $donator->donatoremail = $payment->metadata->donatoremail;
            // $donator->donatoramount = $payment->amount->value;
            // $donator->donatormessage = $payment->metadata->donatormessage;
            // $donator->create();
        } 
    }
}
