<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminPage()
    {   
        $pages = Page::all();
        return view('adminDashboard.pages.admin', [
            'pages' => $pages
        ]);
    }

    public function getCreatePage()
    {   
        $pages = Page::all();
        return view('adminDashboard.pages.create', []);
    }

    public function postCreatePage(Request $r)
    {   
        // dd($r);
        $page = new Page();
        $page->template = $r->template;
        $page->title_nl = $r->title_nl;
        $page->slug_nl = Str::snake($r->title_nl);
        $page->title_en = $r->title_en;
        $page->slug_en = Str::snake($r->title_en);
        $page->intro_nl = $r->intro_nl;
        $page->intro_en = $r->intro_en;
        $page->content_nl = $r->content_nl;
        $page->content_en = $r->content_en;
        $page->save();

        return redirect()->route('admin');
    }

    public function getEditPage(Page $page)
    {   
        return view ('adminDashboard.pages.edit',[
            'page'=>$page
            ]);
    }

    public function postEditPage(Page $page, Request $r)
    {

        if($r->id != $page->id) abort('403','Elabah ik heb het wel gezien ze, kom wees keer braaf!');

        $page->template = $r->template;
        $page->title_nl = $r->title_nl;
        $page->slug_nl = Str::snake($r->title_nl);
        $page->title_en = $r->title_en;
        $page->slug_en = Str::snake($r->title_en);
        $page->intro_nl = $r->intro_nl;
        $page->intro_en = $r->intro_en;
        $page->content_nl = $r->content_nl;
        $page->content_en = $r->content_en;
        $page->save();
        return redirect()->route('admin');
    }

    public function postDeletePage(Page $page)
    {

    }
    public function getEditHomePage()
    {   
        $homepage =Page::all();
        return view ('adminDashboard.pages.edithome',[]);
    }


    public function postEditHomePage(Page $page, Request $r)
    {   
        $page->title_nl = $r->title_nl;
        $page->title_en = $r->title_en;
        $page->content_nl = $r->content_nl;
        $page->content_en = $r->content_en;
        $page->save();
        return redirect()->route('admin');
    }
    
    
}