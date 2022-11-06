<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sliders;


class SliderController extends Controller
{


    public function slider()
   {
    return view('backend.dashboard.slider');
   }

   public function allslider()

   {
    return view('backend.dashboard.allslider');
   }



   public function savesliders(Request $request) {


           $request->validate([
            'slidername' => 'required',
            'sliderdescription' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'public/frontend/img/slider/';
            $profileImage =date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Sliders::create($input);

       return redirect()->back()->with('success','Message Sent successfully.');


     }

public function deleteslideinfo($id)
{
    Sliders::where('id',$id)->delete();
    return redirect()->back()->withInput();
}

/*
     public function savecontactsshow()
    {
        $contacts = Contacts::latest()->paginate(5);

        return view('unsercontactsinfo',compact('contacts'));
        return view('backend.dashboard.unsercontactsinfo', ['contacts' => $contacts]);

       $contacts = Contacts::all();
         return view('backend.dashboard.unsercontactsinfo', compact('contacts'));
    }*/



}
