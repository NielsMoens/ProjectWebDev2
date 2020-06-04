<?php

namespace App\Http\Controllers;

use App\Detail_content;
use App\Newsblog_content;
use Illuminate\Http\Request;

class NewsblogController extends Controller
{
    public function newsblog ()
    {
        $newsblogContent= Newsblog_content::get();
        return view('pages.newsblog', compact('newsblogContent'));

        $detailpageContent= Detail_content::get();
        return view('pages.newsblog', compact('detailContent'));
    }
}
