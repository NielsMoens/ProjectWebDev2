<?php

namespace App\Http\Controllers;

use App\Donate_content;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donate ()
    {
        $donateContent = Donate_content::firstOrFail();
        return view('pages.donate',compact('donateContent'));
    }
}
