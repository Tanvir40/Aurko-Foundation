<?php

namespace App\Http\Controllers;

use App\about;
use App\advisorycommittee;
use App\Banner;
use App\chairmanmessage;
use Illuminate\Http\Request;
use App\Contacts;
use App\covid;
use App\economicdevelopment;
use App\education;
use App\emergenceyaid;
use App\executivecommittee;
use App\healthcare;
use App\MissionVision;
use App\Notice;
use App\RunningProject;
use App\skilldevelopment;
use App\eiddistributiongift2021;
use App\eiddistributiongift2022;
use App\freebloodgrouping;
use App\freemaskdistribution;
use App\iftarwithmaanibash;
use App\sunamganjfloodreliefproject;

class FrontendController extends Controller
{

   public function index()

   {
       $banners = Banner::all();
       $mission_vision = MissionVision::all();
       $running_project = RunningProject::latest()->take(3)->get();
    return view('frontend.index',[
        'banners'=>$banners,
        'mission_vision'=>$mission_vision,
        'running_project'=>$running_project,
    ]);
   }


   public function chairmanmessage()

   {
    $chairmanmessage = chairmanmessage::get();
    return view('frontend.chairmanmessage',[
        'chairmanmessage'=>$chairmanmessage,
    ]);
   }



   public function contactsinfo()

   {
    return view('backend.dashboard.unsercontactsinfo');
   }

   public function newspublishedadmin()

   {

    return view('backend.dashboard.newspublished');
   }


   public function ourpartner()
   {

    return view('frontend.ourpartner');
   }

   public function ourstaff()

   {
    return view('frontend.ourstaff');

   }

   public function executivecommittee()

   {
       $executivecommittee = executivecommittee::get();
    return view('frontend.executivecommittee',[
        'executivecommittee'=>$executivecommittee,
    ]);
   }

    public function advisorycommittee()
    {
        $advisorycommittee = advisorycommittee::get();
        return view('frontend.advisorycommittee',[
            'advisorycommittee'=>$advisorycommittee,
        ]);
    }

   public function ourpatron()

   {
        $about = about::get();
    return view('frontend.ourpatron',[
        'about'=>$about,
    ]);
   }

   public function photogallery()

   {
    $sunamganjfloodreliefproject = sunamganjfloodreliefproject::get();
    $iftarwithmaanibash = iftarwithmaanibash::get();
    $freemaskdistribution = freemaskdistribution::get();
    $freebloodgrouping = freebloodgrouping::get();
    $eiddistributiongift2022 = eiddistributiongift2022::get();
    $eiddistributiongift2021 = eiddistributiongift2021::get();
    return view('frontend.folderwisephotogallery',[
        'sunamganjfloodreliefproject'=>$sunamganjfloodreliefproject,
        'iftarwithmaanibash'=>$iftarwithmaanibash,
        'freemaskdistribution'=>$freemaskdistribution,
        'freebloodgrouping'=>$freebloodgrouping,
        'eiddistributiongift2022'=>$eiddistributiongift2022,
        'eiddistributiongift2021'=>$eiddistributiongift2021,
    ]);
   }

   public function videogallery()

   {
    return view('frontend.videogallery');
   }

   public function careers()

   {
    return view('frontend.careers');
   }

   public function emergenceyaid()


   {
       $emergenceyaid = emergenceyaid::get();
    return view('frontend.emergenceyaid' ,[
        'emergenceyaid'=>$emergenceyaid,
    ]);
   }

   public function education()

   {
    $education = education::get();
    return view('frontend.education',[
        'education'=>$education,
    ]);
   }

   public function skilldevelopment()
   {
    $skills = skilldevelopment::get();
    return view('frontend.skilldevelopment',[
        'skills'=>$skills,
    ]);
   }

   public function economicdevelopment()

   {
    $economicdevelopment = economicdevelopment::get();
    return view('frontend.economicdevelopment',[
        'economicdevelopment'=>$economicdevelopment,
    ]);
   }

   public function covidprojects()

   {
    $covids = covid::get();
    return view('frontend.covidprojects',[
        'covids'=>$covids,
    ]);
   }

   public function healthcare()

   {
    $healthcare = healthcare::get();
    return view('frontend.healthcare',[
        'healthcare'=>$healthcare,
    ]);
   }

   public function rehabitationcare()

   {
    return view('frontend.rehabitationcare');

   }

   public function articles()

   {

    return view('frontend.articles');
   }


   public function paperandbooks()

   {
    return view('frontend.paperandbooks');
   }

   public function publication()
   {
    return view('frontend.publication');
   }

   public function ongoingproject()
   {
    $running_project = RunningProject::latest()->take(3)->get();
    return view('frontend.ongoingproject',[
        'running_project'=>$running_project,
    ]);
   }

   public function noticeboard()

   {
       $noticeboard = Notice::get();
    return view('frontend.noticeboard',[
        'noticeboard'=>$noticeboard,
    ]);
   }



     public function contactdata()


    {
        return Contacts::all();
    }


    public function news()
   {
    return view('frontend.news');
   }

   public function donors()

   {
    return view('frontend.donors');
   }

   public function contacts()
   {
    return view('frontend.contacts');
   }

   public function contactus()
   {
      return view('frontend.contactus');
   }

    public function switch(Request $request, $locale)
    {

        session (['APP_LOCALE'=>$locale]);


        return redirect()->back();
    }
}
