<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsletterController extends Controller
{
    // Newsletter controller 
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
    // Once user is subscribed return the right view
    public function subscribedNewsletter(){
        return view('pages.newsletter');
    } 
}

