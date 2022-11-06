<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes([
    'login' => false,
]);
Route::get('/admin/my-login/', [LoginController::class, 'showLoginForm'])->name('login');
Route::Post('/login/admin/', [LoginController::class, 'login'])->name('login');

Route::get('/','FrontendController@index');
Route::get('/locale/{locale}','FrontendController@switch');
Route::get('/about/','FrontendController@about');
Route::get('/contacts/','FrontendController@contacts');
Route::get('/contactsdata/','FrontendController@contactdata');
Route::get('/chairmanmessage/','FrontendController@chairmanmessage');
Route::get('/ourpartner/','FrontendController@ourpartner');
Route::get('/ourstaff/','FrontendController@ourstaff');
Route::get('/executivecommittee/','FrontendController@executivecommittee');
Route::get('/advisorycommittee/','FrontendController@advisorycommittee');
Route::get('/skilldevelopment/','FrontendController@skilldevelopment');
Route::get('/economicdevelopment/','FrontendController@economicdevelopment');
Route::get('/covidprojects/','FrontendController@covidprojects');
Route::get('/ourpatron/','FrontendController@ourpatron');
Route::get('/photogallery/','FrontendController@photogallery');
Route::get('/eiddistributiongift2021/','galleryController@eiddistributiongift2021');
Route::get('/eiddistributiongift2022/','galleryController@eiddistributiongift2022');
Route::get('/freebloodgrouping/','galleryController@freebloodgrouping');
Route::get('/freemaskdistribution/','galleryController@freemaskdistribution');
Route::get('/iftarwithmaanibash/','galleryController@iftarwithmaanibash');
Route::get('/sunamganjfloodreliefproject/','galleryController@sunamganjfloodreliefproject');



Route::get('/videogallery/','FrontendController@videogallery');
Route::get('/emergenceyaid/','FrontendController@emergenceyaid');
Route::get('/education/','FrontendController@education');
Route::get('/healthcare/','FrontendController@healthcare');
Route::get('/rehabitationcare/','FrontendController@rehabitationcare');
Route::get('/articles/','FrontendController@articles');
Route::get('/paperandbooks/','FrontendController@paperandbooks');
Route::get('/careers/','FrontendController@careers');






Route::post('/savecontacts/','ContactsController@savecontacts');
Route::get('/deletemessageinfo/{id}','ContactsController@deletemessageinfo');

Route::get('/publication/','FrontendController@publication');
Route::get('/ongoingproject/','FrontendController@ongoingproject');
Route::get('/noticeboard/','FrontendController@noticeboard');
Route::get('/news/','FrontendController@news');
Route::get('/slider/','SliderController@slider');
Route::get('/allslider/','SliderController@allslider');
Route::post('/savesliders/','SliderController@savesliders');
Route::get('/deleteslideinfo/{id}','SliderController@deleteslideinfo');

Route::get('/contactsinfo/','FrontendController@contactsinfo');
Route::get('/newspublishedadmin/','FrontendController@newspublishedadmin');
Route::get('/newaddedphotogallery/','BackendController@newaddedphotogallery');
Route::get('/allphotos/','BackendController@allphotos');
Route::get('/ourinception/','BackendController@ourinception');
Route::get('/ourinceptionadded/{id}','BackendController@ourinceptionadded');
Route::put('/ourinceptionadded/updatesaveinception/{id}','BackendController@updatesaveinception');

Route::get('/admins', 'HomeController@admin')->name('admin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home','TaskController@index')->name('home_page');
Route::post('/task/store','TaskController@store')->name('task_store');
Route::post('/task/update','TaskController@update')->name('task_update');
Route::get('/task/deletedata/{id}','TaskController@destroy')->name('task_destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// add banner
Route::get('/add-banner', 'BackendController@add_banner')->name('add.banner');

// save banner
Route::POST('/save-banner', 'BackendController@save_banner')->name('save.banner');

//Image banner delete
Route::get('/banner/delete/{banner_id}', 'BackendController@banner_delete')->name('banner.delete');



// active banner
Route::get('/active/banner/{banner_id}', 'BackendController@banner_active');

// Deactive banner
Route::get('/deactive/banner/{banner_id}', 'BackendController@banner_deactive');

// update mission.vision
Route::get('/mission-vision', 'BackendController@mission_vision')->name('mission.vision');

// save mission
Route::POST('/save-mission', 'BackendController@save_mission')->name('save.mission');

// save vision
Route::POST('/save-vision', 'BackendController@save_vision')->name('save.vision');

// add running project
Route::get('/add/running-project', 'BackendController@running_project')->name('running.project');

// save running project
Route::POST('/save-project', 'BackendController@save_project')->name('save.project');

//project delete
Route::get('/banner/project/{project_id}', 'BackendController@project_delete')->name('project.delete');

//contact us form
Route::get('/customer/contact/form', 'BackendController@customer_form')->name('customer.form');
//save contact us form
Route::POST('/save/customer/contact/form', 'BackendController@customer_form_save')->name('customer.form.save');
//customer form delete
Route::get('/customer/contact/form/delete{customer_id}', 'BackendController@customer_form_delete')->name('customer.form.delete');

// about
Route::get('/about/us', 'BackendController@about_us')->name('about.us');

// save about
Route::POST('/about/save', 'BackendController@save_about')->name('save.about');

// chairmanmessage
Route::get('/show/chairmanmessage', 'BackendController@chairmanmessage')->name('show.chairmanmessage');

// save chairmanmessage
Route::POST('/chairmanmessage/save', 'BackendController@save_chairmanmessage')->name('save.chairmanmessage');

// executivecommittee
Route::get('/show/executivecommittee', 'BackendController@executivecommittee')->name('show.executivecommittee');
// save executivecommittee
Route::POST('/executivecommittee/save', 'BackendController@save_executivecommittee')->name('save.executivecommittee');
//executivecommittee delete
Route::get('/executivecommittee/delete/{executivecommittee_id}', 'BackendController@executivecommittee_delete')->name('executivecommittee.delete');
//executivecommittee edit
Route::get('/executivecommittee/edit/{executivecommittee_id}',  'BackendController@edit_executivecommittee')->name('edit.executivecommittee');
// executivecommittee update
Route::POST('/update/executivecommittee', 'BackendController@update_executivecommittee')->name('update.executivecommittee');


// advisorycommittee
Route::get('/show/advisorycommittee', 'BackendController@advisorycommittee')->name('show.advisorycommittee');
// save advisorycommittee
Route::POST('/advisorycommittee/save', 'BackendController@save_advisorycommittee')->name('save.advisorycommittee');
//advisorycommittee delete
Route::get('/bannadvisorycommitteeer/delete/{advisorycommittee_id}', 'BackendController@advisorycommittee_delete')->name('advisorycommittee.delete');
//advisorycommittee edit
Route::get('/advisorycommittee/edit/{advisorycommittee_id}',  'BackendController@edit_advisorycommittee')->name('edit.advisorycommittee');
// advisorycommittee update
Route::POST('/update/advisorycommittee', 'BackendController@update_advisorycommittee')->name('update.advisorycommittee');


//ourworks

//emergenceyaid_project
Route::get('/emergenceyaid/project/',  'OurWorksController@emergenceyaid_project')->name('emergenceyaid.project');
Route::POST('/emergenceyaid/save/',  'OurWorksController@emergenceyaid_save');
Route::get('/emergenceyaid/delete/{emergenceyaid_id}', 'OurWorksController@emergenceyaid_delete')->name('emergenceyaid.delete');

//healthcare_project
Route::get('/healthcare/project/',  'OurWorksController@healthcare_project')->name('healthcare.project');
Route::POST('/healthcare/save/',  'OurWorksController@healthcare_save')->name('save.healthcare');
Route::get('/healthcare/delete/{healthcare_id}', 'OurWorksController@healthcare_delete')->name('healthcare.delete');

// //education_project
Route::get('/education/project/',  'OurWorksController@education_project')->name('education.project');
Route::POST('/education/save/',  'OurWorksController@education_save')->name('save.education');
Route::get('/education/delete/{education_id}', 'OurWorksController@education_delete')->name('education.delete');

//skilldevelopment_project
Route::get('/skilldevelopment/project/',  'OurWorksController@skilldevelopment_project')->name('skilldevelopment.project');
Route::POST('/skilldevelopment/save/',  'OurWorksController@skilldevelopment_save')->name('save.skilldevelopment');
Route::get('/skilldevelopment/delete/{skill_id}', 'OurWorksController@skilldevelopment_delete')->name('skilldevelopment.delete');

//economicdevelopment_project
Route::get('/economicdevelopment/project/',  'OurWorksController@economicdevelopment_project')->name('economicdevelopment.project');
Route::POST('/economicdevelopment/save/',  'OurWorksController@economicdevelopment_save')->name('save.economicdevelopment');
Route::get('/economicdevelopment/delete/{economic_id}', 'OurWorksController@economicdevelopment_delete')->name('economicdevelopment.delete');

//covid_project
Route::get('/covid/project/',  'OurWorksController@covid_project')->name('covid.project');
Route::POST('/covid/save/',  'OurWorksController@covid_save')->name('save.covid');
Route::get('/covid/delete/{covid_id}', 'OurWorksController@covid_delete')->name('covid.delete');

//notice board
Route::get('/show/notice',  'OurWorksController@show_notice')->name('show.notice');
Route::POST('/save/notice',  'OurWorksController@save_notice')->name('save.notice');
Route::get('/notice/delete/{notice_id}', 'OurWorksController@notice_delete')->name('notice.delete');

//photos

//eiddistributiongift2021
Route::get('/add/photo/eiddistributiongift2021','PhotoController@eiddistributiongift2021')->name('add.photo.eiddistributiongift2021');
// save eiddistributiongift2021
Route::POST('/eiddistributiongift2021/save', 'PhotoController@eiddistributiongift2021_save')->name('eiddistributiongift2021.save');
// delete eiddistributiongift2021
Route::get('/eiddistributiongift2021/delete/{eiddistributiongift2021_id}', 'PhotoController@eiddistributiongift2021_delete')->name('eiddistributiongift2021.delete');


//eiddistributiongift2022
Route::get('/add/photo/eiddistributiongift2022','PhotoController@eiddistributiongift2022')->name('add.photo.eiddistributiongift2022');
// save eiddistributiongift2022
Route::POST('/eiddistributiongift2022/save', 'PhotoController@eiddistributiongift2022_save')->name('eiddistributiongift2022.save');
// delete eiddistributiongift2022
Route::get('/eiddistributiongift2022/delete/{eiddistributiongift2022_id}', 'PhotoController@eiddistributiongift2022_delete')->name('eiddistributiongift2022.delete');

//freebloodgrouping
Route::get('/add/photo/freebloodgrouping','PhotoController@freebloodgrouping')->name('add.photo.freebloodgrouping');
// save freebloodgrouping
Route::POST('/freebloodgrouping/save', 'PhotoController@freebloodgrouping_save')->name('freebloodgrouping.save');
// delete freebloodgrouping
Route::get('/freebloodgrouping/delete/{freebloodgrouping_id}', 'PhotoController@freebloodgrouping_delete')->name('freebloodgrouping.delete');


//freemaskdistribution
Route::get('/add/photo/freemaskdistribution','PhotoController@freemaskdistribution')->name('add.photo.freemaskdistribution');
// save freemaskdistribution
Route::POST('/freemaskdistribution/save', 'PhotoController@freemaskdistribution_save')->name('freemaskdistribution.save');
// delete freemaskdistribution
Route::get('/freemaskdistribution/delete/{freemaskdistribution_id}', 'PhotoController@freemaskdistribution_delete')->name('freemaskdistribution.delete');


//iftarwithmaanibash
Route::get('/add/photo/iftarwithmaanibash','PhotoController@iftarwithmaanibash')->name('add.photo.iftarwithmaanibash');
// save iftarwithmaanibash
Route::POST('/iftarwithmaanibash/save', 'PhotoController@iftarwithmaanibash_save')->name('iftarwithmaanibash.save');
// delete iftarwithmaanibash
Route::get('/iftarwithmaanibash/delete/{iftarwithmaanibash_id}', 'PhotoController@iftarwithmaanibash_delete')->name('iftarwithmaanibash.delete');


//sunamganjfloodreliefproject
Route::get('/add/photo/sunamganjfloodreliefproject','PhotoController@sunamganjfloodreliefproject')->name('add.photo.sunamganjfloodreliefproject');
// save sunamganjfloodreliefproject
Route::POST('/sunamganjfloodreliefproject/save', 'PhotoController@sunamganjfloodreliefproject_save')->name('sunamganjfloodreliefproject.save');
// delete sunamganjfloodreliefproject
Route::get('/sunamganjfloodreliefproject/delete/{sunamganjfloodreliefproject_id}', 'PhotoController@sunamganjfloodreliefproject_delete')->name('sunamganjfloodreliefproject.delete');
