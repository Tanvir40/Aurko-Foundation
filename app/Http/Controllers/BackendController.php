<?php

namespace App\Http\Controllers;

use App\about;
use App\advisorycommittee;
use App\Banner;
use App\chairmanmessage;
use Illuminate\Http\Request;
use App\Contacts;
use App\CustomerForm;
use App\executivecommittee;
use App\MissionVision;
use App\RunningProject;
use Carbon\Carbon;
use DB;
use Intervention\Image\Facades\Image;

class BackendController extends Controller
{



   public function newaddedphotogallery()

   {

    return view('backend.dashboard.newaddedphoto');
   }

   public function allphotos()

   {
    return view('backend.dashboard.allphotos');
   }

   public function ourinception()

   {

    return view('backend.dashboard.ourinception');
   }

   public function ourinceptionadded($id)

   {
    $inceptionadded=DB::table('tbl_our_inceptions')->where('id',$id)->get();
    return view('backend.dashboard.ourinceptionadded',compact('inceptionadded'));
   }

   public function updatesaveinception($id)

   {
     return "HIII";
   }

   // add banner
   public function add_banner(){
    $banners = Banner::all();
       return view('backend.add_banner', [
        'banners'=>$banners,
       ]);
   }

   // save banner
   public function save_banner(Request $request){
    $request->validate([
        'bannername' => 'required',
        'bannerimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $banner_id = Banner::insertGetId([
            'bannername'=>$request->bannername,
            'created_at'=>Carbon::now(),
       ]);
        $uploaded_file = $request->bannerimage;
       $extension = $uploaded_file->getClientOriginalExtension();
       $file_name = $banner_id.'.'.$extension;

       Image::make($uploaded_file)->resize(800,340)->save(public_path('/frontend/img/'.$file_name));

       Banner::find($banner_id)->update([
        'bannerimage'=>$file_name,
       ]);
       return back()->with('success', 'Banner Added Successfully!');
   }

//delete banner
   function banner_delete($banner_id){
    $banner_images = Banner::find($banner_id);
    $banner_images->bannerimage;
    $delete_from = public_path('frontend/img/'.$banner_images->bannerimage);
    unlink($delete_from);


    Banner::find($banner_id)->delete();
    return back()->with('delete', 'Banner Image Deleted Successfully!');
    }

    //active carousel_image
    function banner_active($banner_id){
        Banner::find($banner_id)->update([
        'status'=>1,
        ]);
    return back()->with('active', 'Banner Image Activated Successfully!');
    }

    //De-active carousel_image
    function banner_deactive($banner_id){
        Banner::find($banner_id)->update([
        'status'=>2,
        ]);
    return back()->with('deactive', '
    Banner Image De-activated Successfully!');
    }

    // mission
   public function mission_vision(){
    $mission_vision = MissionVision::all();
       return view('backend.index_page_text',[
        'mission_vision'=>$mission_vision,
       ]);
    }

    // save mission
   public function save_mission(Request $request){
    $request->validate([
        'mission' => 'required',
        ]);

        MissionVision::find($request->id)->update([
            'mission'=>$request->mission,
        ]);
        return back()->with('mission', 'Mission Updated Successfully');
   }
    // save vision
   public function save_vision(Request $request){
    $request->validate([
        'vision' => 'required',
        ]);

        MissionVision::find($request->id)->update([
            'vision'=>$request->vision,
        ]);
        return back()->with('vision', 'Vision Updated Successfully');
   }

   // running project
   public function running_project(){
    $running_project = RunningProject::orderBy('created_at' , 'DESC')->get();
       return view('backend.running_project',[
        'running_project'=>$running_project,
       ]);
   }

    // save project
    public function save_project(Request $request){
        $request->validate([
            'project_name' => 'required',
            'project_desp' => 'required',
            ]);

            RunningProject::insert([
                'project_name'=>$request->project_name,
                'project_desp'=>$request->project_desp,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('success', 'Project Added Successfully');
       }

       //delete project
        function project_delete($project_id){

            RunningProject::find($project_id)->delete();
            return back()->with('delete', 'Project Deleted Successfully!');
        }

        // customer form
        function customer_form(){
            $customers = CustomerForm::get();
            return view('backend.customer_form',[
                'customers'=>$customers,
            ]);
        }

        //customer form save
        function customer_form_save(Request $request){
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'subject'=>'required',
                'phone'=>'required',
                'message'=>'required',
            ],[
                'name.required'=>'Please Enter Your Name!',
                'email.required'=>'Please Enter a Email!',
                'subject.required'=>'Subject Is Required!',
                'phone.required'=>'Phone Number Is Required!',
                'message.required'=>'Tell Us your Opinion!',
            ]);

            CustomerForm::insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'phone'=>$request->phone,
                'message'=>$request->message,
                'created_at'=>Carbon::now(),
            ]);
            return back()->with('form_success' , 'Your Queries has been Submitted');
        }

         //delete customer_form_delete
         function customer_form_delete($customer_id){

            CustomerForm::find($customer_id)->delete();
            return back()->with('delete', 'Customer Form Deleted Successfully!');
        }

        public function about_us(){
            $abouts = about::all();
               return view('backend.about',[
                'abouts'=>$abouts,
               ]);
            }


           public function save_about(Request $request){
            $request->validate([
                'about' => 'required',
                ]);

                about::find($request->id)->update([
                    'about'=>$request->about,
                ]);
                return back()->with('success', 'About Updated Successfully');
            }


        public function chairmanmessage(){
            $chairmanmessages = chairmanmessage::all();
               return view('backend.chairmanmessage',[
                'chairmanmessages'=>$chairmanmessages,
               ]);
            }


           public function save_chairmanmessage(Request $request){
            $request->validate([
                'chairmanmessage' => 'required',
                ]);

                chairmanmessage::find($request->id)->update([
                    'chairmanmessage'=>$request->chairmanmessage,
                ]);
                return back()->with('success', 'Chairman Message Updated Successfully');
            }

            public function executivecommittee(){
                $executivecommittee = executivecommittee::all();
                   return view('backend.executivecommittee',[
                    'executivecommittee'=>$executivecommittee,
                   ]);
                }
            // save save_executivecommittee
            public function save_executivecommittee(Request $request){
                $request->validate([
                    'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'name' => 'required',
                    'position' => 'required',
                    ]);

                    $executivecommittee_id = executivecommittee::insertGetId([
                        'name'=>$request->name,
                        'position'=>$request->position,
                        'created_at'=>Carbon::now(),
                ]);
                    $uploaded_file = $request->photo;
                $extension = $uploaded_file->getClientOriginalExtension();
                $file_name = $executivecommittee_id.'.'.$extension;

                Image::make($uploaded_file)->resize(300,300)->save(public_path('frontend/img/executivecommittee/'.$file_name));

                executivecommittee::find($executivecommittee_id)->update([
                    'photo'=>$file_name,
                ]);
                return back()->with('success', 'Executivecommittee Member Added Successfully!');
            }

            //delete executivecommittee
            function executivecommittee_delete($executivecommittee_id){
                $executivecommittee_images = executivecommittee::find($executivecommittee_id);
                $executivecommittee_images->photo;
                $delete_from = public_path('frontend\img\executivecommittee/'.$executivecommittee_images->photo);
                unlink($delete_from);


                executivecommittee::find($executivecommittee_id)->delete();
                return back()->with('delete', 'Executivecommittee Deleted Successfully!');
                }

                //executivecommittee edit
                function edit_executivecommittee($executivecommittee_id){
                    $executivecommittee = executivecommittee::find($executivecommittee_id);
                    return view('backend.executivecommittee_edit' , [
                        'executivecommittee'=>$executivecommittee,
                    ]);
                }

                //update_executivecommittee
            function update_executivecommittee(Request $request){
                $request->validate([
                    'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'name' => 'required',
                    'position' => 'required',

                ]);
                executivecommittee::find($request->id)->update([
                    'name' =>$request->name,
                    'position' =>$request->position,
                    'updated_at'=>Carbon::now(),
                ]);

           $executivecommittee_images = $request->photo;
            if($executivecommittee_images != ''){
                 $executivecommittee_images = executivecommittee::find($request->id);
                 $delete_from = public_path('frontend\img\executivecommittee/'.$executivecommittee_images->photo);
                unlink($delete_from);


             $uploaded_file = $request->photo;
            $extension = $uploaded_file->getClientOriginalExtension();
             $file_name = $request->id.'.'.$extension;

                Image::make($uploaded_file)->resize(300,300)->save(public_path('frontend\img\executivecommittee/'.$file_name));

                executivecommittee::find($request->id)->update([
                    'photo'=>$file_name,
                   ]);
        }
           return back()->with('success', 'executivecommittee edited Successfully!');
    }

            public function advisorycommittee(){
                $advisorycommittee = advisorycommittee::all();
                   return view('backend.advisorycommittee',[
                    'advisorycommittee'=>$advisorycommittee,
                   ]);
                }

            // save save_advisorycommittee
            public function save_advisorycommittee(Request $request){
                $request->validate([
                    'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'name' => 'required',
                    'position' => 'required',
                    ]);

                    $advisorycommittee_id = advisorycommittee::insertGetId([
                        'name'=>$request->name,
                        'position'=>$request->position,
                        'created_at'=>Carbon::now(),
                ]);
                $uploaded_file = $request->photo;
                $extension = $uploaded_file->getClientOriginalExtension();
                $file_name = $advisorycommittee_id.'.'.$extension;

                Image::make($uploaded_file)->resize(300,300)->save(public_path('frontend\img\advisorycommittee/'.$file_name));

                advisorycommittee::find($advisorycommittee_id)->update([
                    'photo'=>$file_name,
                ]);
                return back()->with('success', 'Advisorycommittee Member Added Successfully!');
            }

            //delete Advisorycommittee
            function advisorycommittee_delete($advisorycommittee_id){
                $advisorycommittee_images = advisorycommittee::find($advisorycommittee_id);
                $advisorycommittee_images->photo;
                $delete_from = public_path('frontend\img\advisorycommittee/'.$advisorycommittee_images->photo);
                unlink($delete_from);


                advisorycommittee::find($advisorycommittee_id)->delete();
                return back()->with('delete', 'Banner Image Deleted Successfully!');
                }

                //advisorycommittee edit
                function edit_advisorycommittee($advisorycommittee_id){
                    $advisorycommittee = advisorycommittee::find($advisorycommittee_id);
                    return view('backend.advisorycommittee_edit' , [
                        'advisorycommittee'=>$advisorycommittee,
                    ]);
                }

                //update_advisorycommittee
            function update_advisorycommittee(Request $request){
                $request->validate([
                    'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'name' => 'required',
                    'position' => 'required',

                ]);
                advisorycommittee::find($request->id)->update([
                    'name' =>$request->name,
                    'position' =>$request->position,
                    'updated_at'=>Carbon::now(),
                ]);

           $advisorycommittee_images = $request->photo;
            if($advisorycommittee_images != ''){
                 $advisorycommittee_images = advisorycommittee::find($request->id);
                 $delete_from = public_path('frontend\img\advisorycommittee/'.$advisorycommittee_images->photo);
                unlink($delete_from);


             $uploaded_file = $request->photo;
            $extension = $uploaded_file->getClientOriginalExtension();
             $file_name = $request->id.'.'.$extension;

                Image::make($uploaded_file)->resize(300,300)->save(public_path('frontend\img\advisorycommittee/'.$file_name));

                advisorycommittee::find($request->id)->update([
                    'photo'=>$file_name,
                   ]);
        }
           return back()->with('success', 'advisorycommittee edited Successfully!');
    }

}
