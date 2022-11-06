<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\eiddistributiongift2021;
use App\eiddistributiongift2022;
use App\freebloodgrouping;
use App\freemaskdistribution;
use App\iftarwithmaanibash;
use App\sunamganjfloodreliefproject;

class galleryController extends Controller
{

public function eiddistributiongift2021()
{
    $eiddistributiongift2021 = eiddistributiongift2021::get();
	return view('frontend.eidgiftdistribution2021',[
        'eiddistributiongift2021'=>$eiddistributiongift2021,
    ]);
}


public function eiddistributiongift2022()
{
    $eiddistributiongift2022 = eiddistributiongift2022::get();
	return view('frontend.eidgiftdistribution2022',[
        'eiddistributiongift2022'=>$eiddistributiongift2022,
    ]);
}



  public function freebloodgrouping()
  {
    $freebloodgrouping = freebloodgrouping::get();
  	return view('frontend.freebloodgrouping',[
        'freebloodgrouping'=>$freebloodgrouping,
      ]);
  }

  public function freemaskdistribution()

  {
    $freemaskdistribution = freemaskdistribution::get();
  	return view('frontend.freemaskdistribution',[
        'freemaskdistribution'=>$freemaskdistribution,
      ]);
  }

  public function iftarwithmaanibash()

  {
    $iftarwithmaanibash = iftarwithmaanibash::get();
  	return view('frontend.iftarwithmaanibash',[
        'iftarwithmaanibash'=>$iftarwithmaanibash,
      ]);
  }

  public function sunamganjfloodreliefproject()

  {
    $sunamganjfloodreliefproject = sunamganjfloodreliefproject::get();
  	return view('frontend.sunamganjfloodreliefproject',[
        'sunamganjfloodreliefproject'=>$sunamganjfloodreliefproject,
      ]);
  }


}
