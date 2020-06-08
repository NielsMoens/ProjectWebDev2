<?php

namespace App\Http\Controllers;

use App\About_content;
use App\Contact_content;
use App\Detail_content;
use App\Detailpage_content;
use App\Donate_content;
use App\Home_content;
use App\Newsblog_content;
use App\Page;
use App\Privacy_content;
use HomeSeeder;
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
        $homeContent = Home_content :: firstOrFail();
        $aboutContent = About_content :: firstOrFail();
        $contactContent = Contact_content :: firstOrFail();
        $newsblogContent = Newsblog_content :: all();
        $donateContent = Donate_content :: firstOrFail();
        $privacyContent = Privacy_content :: firstOrFail();
    
        return view('adminDashboard.pages.admin', [
            'pages' => $pages,
            'homeContent' => $homeContent,
            'aboutContent' => $aboutContent,
            'contactContent' => $contactContent,
            'newsblogContent' => $newsblogContent,
            'donateContent' => $donateContent,
            'privacyContent' => $privacyContent
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

    public function postDeletePage(request $r)
    {
        Page::find($r->id)->delete();
        return redirect()->route('admin');
    }

    //  edit home page
    public function getEditHome(Home_content $home)
    {   
        return view ('adminDashboard.pages.edithome',[
            'home'=>$home
            ]);
    }
    
    public function postEditHome(Home_content $home, Request $r)
    {

        if($r->id != $home->id) abort('403','Elabah ik heb het wel gezien ze, kom wees keer braaf!');

        $home->title_nl = $r->title_nl;
        $home->title_en = $r->title_en;
        $home->maininfo_nl = $r->maininfo_nl;
        $home->maininfo_en = $r->maininfo_en;
        $home->save();
        return redirect()->route('admin');
    }
    
    //  edit about page
    public function getEditAbout(About_content $about)
    {   
        return view ('adminDashboard.pages.editabout',[
            'about'=>$about
            ]);
    }
    
    public function postEditAbout(About_content $about, Request $r)
    {

        if($r->id != $about->id) abort('403','Elabah ik heb het wel gezien ze, kom wees keer braaf!');

        $about->title_nl = $r->title_nl;
        $about->title_en = $r->title_en;
        $about->abouttitle_nl = $r->abouttitle_nl;
        $about->abouttitle_en = $r->abouttitle_en;
        $about->aboutcontent_nl = $r->aboutcontent_nl;
        $about->aboutcontent_en= $r->aboutcontent_en;
        $about->save();
        return redirect()->route('admin');
    }

    //  edit contact Page
    public function getEditContact(Contact_content $contact)
    {   
        return view ('adminDashboard.pages.editcontact',[
            'contact'=>$contact
            ]);
    }
    
    public function postEditContact(Contact_content $contact, Request $r)
    {
        if($r->id != $contact->id) abort('403','Elabah ik heb het wel gezien ze, kom wees keer braaf!');

        $contact->title_nl = $r->title_nl;
        $contact->title_en = $r->title_en;
        $contact->subtitle_en = $r->subtitle_en;
        $contact->subtitle_nl = $r->subtitle_nl;
        $contact->content_nl = $r->content_nl;
        $contact->content_en = $r->content_en;
        $contact->save();
        return redirect()->route('admin');
    }

    //  edit newsblog page
    public function getEditNewsblog(Newsblog_content $newsblog)
    {   
        return view ('adminDashboard.pages.editnewsblog',[
            'newsblog'=>$newsblog
            ]);
    }
    
    public function postEditNewsblog(Newsblog_content $newsblog, Request $r)
    {

        if($r->id != $newsblog->id) abort('403','Elabah ik heb het wel gezien ze, kom wees keer braaf!');

        $newsblog->posttitle_nl = $r->posttitle_nl;
        $newsblog->posttitle_en = $r->posttitle_en;
        $newsblog->postcontent_nl = $r->postcontent_nl;
        $newsblog->postcontent_en = $r->postcontent_en;
        $newsblog->postdate = $r->postdate;
        $newsblog->save();
        return redirect()->route('admin');
    }

    public function getAddNewsblog()
    {   
        $newsblogContent = Newsblog_content :: all();
        return view('adminDashboard.pages.addpost', []);
    }

    public function postAddNewsblog(Request $r)
    {   
        $blog = new Newsblog_content();
        $blog->posttitle_nl = $r->posttitle_nl;
        $blog->posttitle_en = $r->posttitle_en;
        $blog->postcontent_nl = $r->postcontent_nl;
        $blog->postcontent_en = $r->postcontent_en;
        $blog->postdate = $r->postdate;
        $blog->save();

        return redirect()->route('admin');
    }
    public function getdeleteNewsblog(request $r)
    {
        Newsblog_content::find($r->id)->delete();
        return redirect()->route('admin');
    }


    //  edit donate page
    public function getEditDonate(Donate_content $donate)
    {   
        return view ('adminDashboard.pages.editdonate',[
            'donate'=>$donate
            ]);
    }
    
    public function postEditDonate(Donate_content $donate, Request $r)
    {

        if($r->id != $donate->id) abort('403','Elabah ik heb het wel gezien ze, kom wees keer braaf!');

        $donate->title_nl = $r->title_nl;
        $donate->title_en = $r->title_en;
        $donate->subtitle_nl = $r->subtitle_nl;
        $donate->subtitle_en = $r->subtitle_en;
        $donate->featuredtitle_nl = $r->featuredtitle_nl;
        $donate->featuredtitle_en = $r->featuredtitle_en;
        $donate->donatorname = $r->donatorname;
        $donate->donationamount = $r->donationamount;

        $donate->save();
        return redirect()->route('admin');
    }

    //  edit privacy page
    public function getEditPrivacy(Privacy_content $privacy)
    {   
        return view ('adminDashboard.pages.editprivacy',[
            'privacy'=>$privacy
            ]);
    }
    
    public function postEditPrivacy(Privacy_content $privacy, Request $r)
    {

        if($r->id != $privacy->id) abort('403','Elabah ik heb het wel gezien ze, kom wees keer braaf!');

        $privacy->title_nl = $r->title_nl;
        $privacy->title_en = $r->title_en;
        $privacy->subtitle_en = $r->subtitle_en;
        $privacy->subtitle_nl = $r->subtitle_nl;
        $privacy->content_nl = $r->content_nl;
        $privacy->content_en = $r->content_en;
        $privacy->save();
        return redirect()->route('admin');
    }
}