<?php

namespace App\Http\Controllers;

use App\covid;
use App\economicdevelopment;
use App\education;
use App\emergenceyaid;
use App\healthcare;
use App\Notice;
use App\skilldevelopment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class OurWorksController extends Controller
{
    public function emergenceyaid_project(){
        $emergenceyaid = emergenceyaid::get();
        return view('backend.our_works.emergenceyaid',[
            'emergenceyaid'=>$emergenceyaid,
        ]);
    }
     // save emergenceyaid_project
        public function emergenceyaid_save(Request $request){

            $emergenceyaid_id = emergenceyaid::insertGetId([
                    'project_name'=>$request->project_name,
                    'project_desp'=>$request->project_desp,
                    'created_at'=>Carbon::now(),
            ]);
            $uploaded_file = $request->photo;
            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = $emergenceyaid_id.'.'.$extension;

            Image::make($uploaded_file)->resize(800,340)->save(public_path('frontend/img/project/emergenceyaid/'.$file_name));

            emergenceyaid::find($emergenceyaid_id)->update([
                'photo'=>$file_name,
            ]);
            return back();
        }

        //delete emergenceyaid_project
        function emergenceyaid_delete($emergenceyaid_id){
            $emergenceyaid_images = emergenceyaid::find($emergenceyaid_id);
            $emergenceyaid_images->photo;
            $delete_from = public_path('frontend/img/project/emergenceyaid/'.$emergenceyaid_images->photo);
            unlink($delete_from);

            emergenceyaid::find($emergenceyaid_id)->delete();
            return back()->with('delete', 'EmergenceyAid Project Deleted Successfully!');
            }

//health care project

    public function healthcare_project(){
        $healthcare = healthcare::get();
        return view('backend.our_works.healthcare',[
            'healthcare'=>$healthcare,
        ]);
    }

    public function healthcare_save(Request $request){
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_name' => 'required',
            'project_desp' => 'required',
            ]);

            $healthcare_id = healthcare::insertGetId([
                'project_name'=>$request->project_name,
                'project_desp'=>$request->project_desp,
                'created_at'=>Carbon::now(),
        ]);
        $uploaded_file = $request->photo;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = $healthcare_id.'.'.$extension;

        Image::make($uploaded_file)->resize(800,340)->save(public_path('frontend/img/project/health/'.$file_name));

        healthcare::find($healthcare_id)->update([
            'photo'=>$file_name,
        ]);
        return back()->with('success', 'healthcare Project Added Successfully!');
    }

    function healthcare_delete($healthcare_id){
        $healthcare_images = healthcare::find($healthcare_id);
        $healthcare_images->photo;
        $delete_from = public_path('frontend/img/project/health/'.$healthcare_images->photo);
        unlink($delete_from);


        healthcare::find($healthcare_id)->delete();
        return back()->with('delete', 'Health Project Deleted Successfully!');
        }

// //education project
    public function education_project(){
        $educations = education::get();
        return view('backend.our_works.education',[
            'educations'=>$educations,
        ]);
    }

    public function education_save(Request $request){
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_name' => 'required',
            'project_desp' => 'required',
            ]);

            $education_id = education::insertGetId([
                'project_name'=>$request->project_name,
                'project_desp'=>$request->project_desp,
                'created_at'=>Carbon::now(),
        ]);
        $uploaded_file = $request->photo;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = $education_id.'.'.$extension;

        Image::make($uploaded_file)->resize(800,340)->save(public_path('frontend/img/project/education/'.$file_name));

        education::find($education_id)->update([
            'photo'=>$file_name,
        ]);
        return back()->with('success', 'education Project Added Successfully!');
    }

    function education_delete($education_id){
        $education_images = education::find($education_id);
        $education_images->photo;
        $delete_from = public_path('frontend/img/project/education/'.$education_images->photo);
        unlink($delete_from);


        education::find($education_id)->delete();
        return back()->with('delete', 'Education Project Deleted Successfully!');
        }


//         //skill development project
    public function skilldevelopment_project(){
        $skilldevelopment = skilldevelopment::get();
        return view('backend.our_works.skilldevelopment',[
            'skilldevelopment'=>$skilldevelopment,
        ]);
    }
    public function skilldevelopment_save(Request $request){
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_name' => 'required',
            'project_desp' => 'required',
            ]);

            $skill_id = skilldevelopment::insertGetId([
                'project_name'=>$request->project_name,
                'project_desp'=>$request->project_desp,
                'created_at'=>Carbon::now(),
        ]);
        $uploaded_file = $request->photo;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = $skill_id.'.'.$extension;

        Image::make($uploaded_file)->resize(800,340)->save(public_path('frontend/img/project/skill/'.$file_name));

        skilldevelopment::find($skill_id)->update([
            'photo'=>$file_name,
        ]);
        return back()->with('success', 'healthcare Project Added Successfully!');
    }

    function skilldevelopment_delete($skill_id){
        $skill_images = skilldevelopment::find($skill_id);
        $skill_images->photo;
        $delete_from = public_path('frontend/img/project/skill/'.$skill_images->photo);
        unlink($delete_from);


        skilldevelopment::find($skill_id)->delete();
        return back()->with('delete', 'Skill-Development Project Deleted Successfully!');
        }

        //economic development project
    public function economicdevelopment_project(){
        $economicdevelopment = economicdevelopment::get();
        return view('backend.our_works.economicdevelopment',[
            'economicdevelopment'=>$economicdevelopment,
        ]);
    }
    public function economicdevelopment_save(Request $request){
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_name' => 'required',
            'project_desp' => 'required',
            ]);

            $economic_id = economicdevelopment::insertGetId([
                'project_name'=>$request->project_name,
                'project_desp'=>$request->project_desp,
                'created_at'=>Carbon::now(),
        ]);
        $uploaded_file = $request->photo;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = $economic_id.'.'.$extension;

        Image::make($uploaded_file)->resize(800,340)->save(public_path('frontend/img/project/economicdevelopment/'.$file_name));

        economicdevelopment::find($economic_id)->update([
            'photo'=>$file_name,
        ]);
        return back()->with('success', 'economic Project Added Successfully!');
    }

    function economicdevelopment_delete($economic_id){
        $economicdevelopment_images = economicdevelopment::find($economic_id);
        $economicdevelopment_images->photo;
        $delete_from = public_path('frontend/img/project/economicdevelopment/'.$economicdevelopment_images->photo);
        unlink($delete_from);


        economicdevelopment::find($economic_id)->delete();
        return back()->with('delete', 'economicdevelopment Project Deleted Successfully!');
        }

        //covid project
    public function covid_project(){
        $covids = covid::get();
        return view('backend.our_works.covidprojects',[
            'covids'=>$covids,
        ]);
    }
    public function covid_save(Request $request){
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'project_name' => 'required',
            'project_desp' => 'required',
            ]);

            $covid_id = covid::insertGetId([
                'project_name'=>$request->project_name,
                'project_desp'=>$request->project_desp,
                'created_at'=>Carbon::now(),
        ]);
        $uploaded_file = $request->photo;
        $extension = $uploaded_file->getClientOriginalExtension();
        $file_name = $covid_id.'.'.$extension;

        Image::make($uploaded_file)->resize(800,340)->save(public_path('frontend/img/project/covid/'.$file_name));

        covid::find($covid_id)->update([
            'photo'=>$file_name,
        ]);
        return back()->with('success', 'Covid Project Added Successfully!');
    }

    function covid_delete($covid_id){
        $covid_images = covid::find($covid_id);
        $covid_images->photo;
        $delete_from = public_path('frontend/img/project/covid/'.$covid_images->photo);
        unlink($delete_from);


        covid::find($covid_id)->delete();
        return back()->with('delete', 'EmergenceyAid Project Deleted Successfully!');
        }

//notice
        public function show_notice(){
            $notices = Notice::get();
            return view('backend.notice',[
                'notices'=>$notices,
            ]);
        }

        public function save_notice(Request $request){
            $request->validate([
                'notice' => 'required|file|mimes:pdf,PDF|max:5120',
                'notice_title' => 'required',
                ]);

                $notice_id = Notice::insertGetId([
                    'notice'=>$request->notice,
                    'notice_title'=>$request->notice_title,
                    'created_at'=>Carbon::now(),
            ]);
            $uploaded_file = $request->notice;
            $extension = $uploaded_file->getClientOriginalExtension();
            $file_name = $notice_id.'.'.$extension;

            $request->notice->move('frontend/pdf' ,$file_name);

            Notice::find($notice_id)->update([
                'notice'=>$file_name,
            ]);
            return back()->with('success', 'Notice Added Successfully!');
        }

        function notice_delete($notice_id){
            $notice_file = Notice::find($notice_id);
            $notice_file->notice;
            $delete_from = public_path('frontend/pdf/'.$notice_file->notice);
            unlink($delete_from);


            Notice::find($notice_id)->delete();
            return back()->with('delete', 'Notice Deleted Successfully!');
            }
}
