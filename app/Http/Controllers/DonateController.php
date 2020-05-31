<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function donate ()
    {
        return view('pages.donate');
    }
}
