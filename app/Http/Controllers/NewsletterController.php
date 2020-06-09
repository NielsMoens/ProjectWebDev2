<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterController extends Controller
{
    // public function postNewsletter(Request $r){
    //     if (! Newsletter::isSubscribed($r->email)) {
    //         Newsletter::subscribePending($r->email);
    //         return redirect('home')->with('status', 'Thanks for subscribing');

    //     }
    //     return redirect('home')->with('status', 'You are already subscribed');
    // }
    public function postNewsletter(Request $r)
    {
        
        $isSubscribed = Newsletter::isSubscribed($r->email);
        if($isSubscribed){
            Newsletter::delete($r->email);
        } else{
            Newsletter::subscribe($r->email);
        }
        return redirect()->route('newsletter.subscribed', app()->getLocale());
    }

    public function subscribedNewsletter(){
        return view('pages.newsletter');
    } 
}

