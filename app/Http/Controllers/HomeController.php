<?php

namespace App\Http\Controllers;

use App\About_content;
use App\Contact_content;
use App\Donate_content;
use Illuminate\Http\Request;
use App\Home_content;
use App\Privacy_content;

class HomeController extends Controller
{
    public function home()
    {   
        //firstorfail -> object, get->arra
        $homeContent = Home_content::firstOrFail();
        return view('pages.home',compact('homeContent'));
    }
    public function about()
    {
        $aboutContent = About_content::firstOrFail();
        return view('pages.about',compact('aboutContent'));
    }
    public function contact()
    {
        $contactContent = Contact_content::firstOrFail();
        return view('pages.contact',compact('contactContent'));
    }
    public function donate()
    {
        $donateContent = Donate_content::firstOrFail();
        return view('pages.donate',compact('donateContent'));
    }
    public function privacy()
    {
        $privacyContent = Privacy_content::firstOrFail();
        return view('pages.privacy',compact('privacyContent'));
        
    }
}



