<?php

namespace App\Http\Controllers;

use App\eiddistributiongift2021;
use App\eiddistributiongift2022;
use App\freebloodgrouping;
use App\freemaskdistribution;
use App\iftarwithmaanibash;
use App\sunamganjfloodreliefproject;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{
    //add eiddistributiongift2021
    function eiddistributiongift2021(){
        $eiddistributiongift2021 = eiddistributiongift2021::get();
        return view('backend.photos.eiddistributiongift2021',[
            'eiddistributiongift2021'=>$eiddistributiongift2021,
        ]);
    }
    // save eiddistributiongift2021
    public function eiddistributiongift2021_save(Request $request){
    $request->validate([
        'title' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $eiddistributiongift2021_id = eiddistributiongift2021::insertGetId([
            'title'=>$request->title,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $eiddistributiongift2021_id.'.'.$extension;

       Image::make($uploaded_file)->resize(1280,960)->save(public_path('frontend/img/PhotoGallery/eiddistributiongift2021/'.$file_name));

       eiddistributiongift2021::find($eiddistributiongift2021_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'eiddistributiongift2021 Added Successfully!');
   }
    //delete eiddistributiongift2021
    function eiddistributiongift2021_delete($eiddistributiongift2021_id){
        $eiddistributiongift2021_images = eiddistributiongift2021::find($eiddistributiongift2021_id);
        $eiddistributiongift2021_images->photo;
        $delete_from = public_path('frontend/img/PhotoGallery/eiddistributiongift2021/'.$eiddistributiongift2021_images->photo);
        unlink($delete_from);


        eiddistributiongift2021::find($eiddistributiongift2021_id)->delete();
        return back()->with('delete', 'eiddistributiongift2021 Image Deleted Successfully!');
        }





    //add eiddistributiongift2022
    function eiddistributiongift2022(){
        $eiddistributiongift2022 = eiddistributiongift2022::get();
        return view('backend.photos.eiddistributiongift2022',[
            'eiddistributiongift2022'=>$eiddistributiongift2022,
        ]);
    }
    // save eiddistributiongift2022
    public function eiddistributiongift2022_save(Request $request){
    $request->validate([
        'title' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $eiddistributiongift2022_id = eiddistributiongift2022::insertGetId([
            'title'=>$request->title,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $eiddistributiongift2022_id.'.'.$extension;

       Image::make($uploaded_file)->resize(1280,960)->save(public_path('frontend/img/PhotoGallery/eiddistributiongift2022/'.$file_name));

       eiddistributiongift2022::find($eiddistributiongift2022_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'eiddistributiongift2022 Added Successfully!');
   }
    //delete eiddistributiongift2022
    function eiddistributiongift2022_delete($eiddistributiongift2022_id){
        $eiddistributiongift2022_images = eiddistributiongift2022::find($eiddistributiongift2022_id);
        $eiddistributiongift2022_images->photo;
        $delete_from = public_path('frontend/img/PhotoGallery/eiddistributiongift2022/'.$eiddistributiongift2022_images->photo);
        unlink($delete_from);


        eiddistributiongift2022::find($eiddistributiongift2022_id)->delete();
        return back()->with('delete', 'eiddistributiongift2022 Image Deleted Successfully!');
        }

    //add freebloodgrouping
    function freebloodgrouping(){
        $freebloodgrouping = freebloodgrouping::get();
        return view('backend.photos.freebloodgrouping',[
            'freebloodgrouping'=>$freebloodgrouping,
        ]);
    }

    // save freebloodgrouping
   public function freebloodgrouping_save(Request $request){
    $request->validate([
        'title' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $freebloodgrouping_id = freebloodgrouping::insertGetId([
            'title'=>$request->title,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $freebloodgrouping_id.'.'.$extension;

       Image::make($uploaded_file)->resize(1280,960)->save(public_path('frontend/img/PhotoGallery/freebloodgrouping/'.$file_name));

       freebloodgrouping::find($freebloodgrouping_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'freebloodgrouping Added Successfully!');
   }

   //delete freebloodgrouping
   function freebloodgrouping_delete($freebloodgrouping_id){
    $freebloodgrouping_images = freebloodgrouping::find($freebloodgrouping_id);
    $freebloodgrouping_images->photo;
    $delete_from = public_path('frontend/img/PhotoGallery/freebloodgrouping/'.$freebloodgrouping_images->photo);
    unlink($delete_from);


    freebloodgrouping::find($freebloodgrouping_id)->delete();
    return back()->with('delete', 'freebloodgrouping Image Deleted Successfully!');
    }




    //add freemaskdistribution
    function freemaskdistribution(){
        $freemaskdistribution = freemaskdistribution::get();
        return view('backend.photos.freemaskdistribution',[
            'freemaskdistribution'=>$freemaskdistribution,
        ]);
    }

      // save freemaskdistribution_save
   public function freemaskdistribution_save(Request $request){
    $request->validate([
        'title' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $freemaskdistribution_id = freemaskdistribution::insertGetId([
            'title'=>$request->title,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $freemaskdistribution_id.'.'.$extension;

       Image::make($uploaded_file)->resize(1280,960)->save(public_path('frontend/img/PhotoGallery/freemaskdistribution/'.$file_name));

       freemaskdistribution::find($freemaskdistribution_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'freemaskdistribution Added Successfully!');
   }
    //delete freemaskdistribution_
    function freemaskdistribution_delete($freemaskdistribution_id){
        $freemaskdistribution_images = freemaskdistribution::find($freemaskdistribution_id);
        $freemaskdistribution_images->photo;
        $delete_from = public_path('frontend/img/PhotoGallery/freemaskdistribution/'.$freemaskdistribution_images->photo);
        unlink($delete_from);


        freemaskdistribution::find($freemaskdistribution_id)->delete();
        return back()->with('delete', 'freemaskdistribution Image Deleted Successfully!');
        }

         //add iftarwithmaanibash
    function iftarwithmaanibash(){
        $iftarwithmaanibash = iftarwithmaanibash::get();
        return view('backend.photos.iftarwithmaanibash',[
            'iftarwithmaanibash'=>$iftarwithmaanibash,
        ]);
    }

      // save iftarwithmaanibash
   public function iftarwithmaanibash_save(Request $request){
    $request->validate([
        'title' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $iftarwithmaanibash_id = iftarwithmaanibash::insertGetId([
            'title'=>$request->title,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $iftarwithmaanibash_id.'.'.$extension;

       Image::make($uploaded_file)->resize(1280,960)->save(public_path('frontend/img/PhotoGallery/iftarwithmaanibash/'.$file_name));

       iftarwithmaanibash::find($iftarwithmaanibash_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'iftarwithmaanibash Added Successfully!');
   }
    //delete iftarwithmaanibash
    function iftarwithmaanibash_delete($iftarwithmaanibash_id){
        $iftarwithmaanibash_images = freemaskdistribution::find($iftarwithmaanibash_id);
        $iftarwithmaanibash_images->photo;
        $delete_from = public_path('frontend/img/PhotoGallery/iftarwithmaanibash/'.$iftarwithmaanibash_images->photo);
        unlink($delete_from);


        iftarwithmaanibash::find($iftarwithmaanibash_id)->delete();
        return back()->with('delete', 'iftarwithmaanibash Image Deleted Successfully!');
        }

         //add sunamganjfloodreliefproject
    function sunamganjfloodreliefproject(){
        $sunamganjfloodreliefproject = sunamganjfloodreliefproject::get();
        return view('backend.photos.sunamganjfloodreliefproject',[
            'sunamganjfloodreliefproject'=>$sunamganjfloodreliefproject,
        ]);
    }

      // save sunamganjfloodreliefproject
   public function sunamganjfloodreliefproject_save(Request $request){
    $request->validate([
        'title' => 'required',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $sunamganjfloodreliefproject_id = sunamganjfloodreliefproject::insertGetId([
            'title'=>$request->title,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->photo;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $sunamganjfloodreliefproject_id.'.'.$extension;

       Image::make($uploaded_file)->resize(1280,960)->save(public_path('frontend/img/PhotoGallery/sunamganjfloodreliefproject/'.$file_name));

       sunamganjfloodreliefproject::find($sunamganjfloodreliefproject_id)->update([
        'photo'=>$file_name,
       ]);
       return back()->with('success', 'sunamganjfloodreliefproject Added Successfully!');
   }
    //delete sunamganjfloodreliefproject
    function sunamganjfloodreliefproject_delete($sunamganjfloodreliefproject_id){
        $sunamganjfloodreliefproject_images = sunamganjfloodreliefproject::find($sunamganjfloodreliefproject_id);
        $sunamganjfloodreliefproject_images->photo;
        $delete_from = public_path('frontend/img/PhotoGallery/sunamganjfloodreliefproject/'.$sunamganjfloodreliefproject_images->photo);
        unlink($delete_from);


        sunamganjfloodreliefproject::find($sunamganjfloodreliefproject_id)->delete();
        return back()->with('delete', 'sunamganjfloodreliefproject Image Deleted Successfully!');
        }
}
