<?php

namespace App\Http\Controllers;

use App\Newsblog_content;
use Illuminate\Http\Request;

class NewsblogController extends Controller
{
    // fetch data from model en return the right view
    public function newsblog ()
    {
        $newsblogContent= Newsblog_content::get();
        return view('pages.newsblog', compact('newsblogContent'));
    }
    
    // fetch data from model en return the right view
    public function detailpage($lang, $id)
    {   
        $newsblogContent= Newsblog_content::where('id', $id)->first();
        return view('pages.detailpage',[
            'newsblogContent'=>$newsblogContent,
        ]);
    }
}
