<?php

namespace App\Http\Controllers;

use App\Newsblog_content;
use Illuminate\Http\Request;

class NewsblogController extends Controller
{
    public function newsblog ()
    {
        $newsblogContent= Newsblog_content::get();
        return view('pages.newsblog', compact('newsblogContent'));
    }
}
