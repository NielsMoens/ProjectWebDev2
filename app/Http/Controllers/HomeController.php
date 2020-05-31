<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home_content;

class HomeController extends Controller
{
    public function home()
    {   
        //firstorfail -> object, get->arra
        $homeContent= Home_content::firstOrFail();
        return view('pages.home',compact('homeContent'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function donate()
    {
        return view('pages.donate');
    }
    public function privacy()
    {
        return view('pages.privacy');
    }
}



