<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
/****Frontend routes starts****/
Route::get('/', 'frontend\FrontEndController@main')->name('main');
Route::get('/web/course', 'frontend\FrontEndController@webCourse')->name('webCourse');
Route::get('/graphic/course', 'frontend\FrontEndController@graphicCourse')->name('graphicCourse');
Route::get('/digital/course', 'frontend\FrontEndController@digitalMarketCourse')->name('digitalMarketCourse');
Route::get('/success', 'frontend\FrontEndController@success')->name('success');
Route::get('/successP2', 'frontend\FrontEndController@successP2')->name('successP2');
Route::get('/successP3', 'frontend\FrontEndController@successP3')->name('successP3');
Route::get('/blogs', 'frontend\FrontEndController@blogs')->name('blogs');
Route::get('/contact', 'frontend\FrontEndController@contact')->name('contact');

// Route::get('/login', 'frontend\FrontEndController@login')->name('login');
Route::get('/register', 'frontend\FrontEndController@register')->name('register');

/****Frontend routes ends****/




//Default
//Route::get('/', function () {
    //return view('welcome');
//});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Admin
Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function(){
    Route::get('dashboard','AdminController@index')->name('admin.dashboard');
    Route::get('users','AdminController@users');
    Route::get('mail','AdminController@mail');
    Route::get('table_basic','AdminController@table_basic');
    Route::get('table_datatable','AdminController@table_datatable');
    
    // Route::get('media_fancybox','AdminController@mediaFancybox');
    // Route::get('media_masonry','AdminController@mediaMasonry');
    // Route::get('page_timeline','AdminController@pageTimeline');
    // Route::get('page_pricing_tables','AdminController@pagePricingTable');
    // Route::post('form/update/{id}','AdminController@formDataUpdate')->name('admin.form.update');
    // Route::get('/enroll','AdminController@enroll')->name('admin.enroll');

    //Slider
    Route::get('slider','AdminController@slider');
    Route::get('form/slider','AdminController@slider')->name('admin.slider');
    Route::post('slider/save','AdminController@sliderSave')->name('admin.sliderSave');
    Route::get('slider/show','AdminController@sliderShow')->name('admin.sliderShow');
    Route::get('slider/delete/{id}','AdminController@sliderDelete')->name('admin.sliderDelete');
    Route::get('slider/edit/{id}','AdminController@sliderEdit')->name('admin.sliderEdit');
    Route::post('slider/update/{id}','AdminController@sliderUpdate')->name('admin.sliderUpdate');

    //Upcoming course
    Route::get('form/upcoming','AdminController@upcoming')->name('admin.upcoming');
    Route::post('upcoming/save','AdminController@upcomingSave')->name('admin.upcomingSave');
    Route::get('upcoming/show','AdminController@upcomingShow')->name('admin.upcomingShow');
    Route::get('upcoming/delete/{id}','AdminController@upcomingDelete')->name('admin.upcomingDelete');
    Route::get('upcoming/edit/{id}','AdminController@upcomingEdit')->name('admin.upcomingEdit');
    Route::post('upcoming/update/{id}','AdminController@upcomingUpdate')->name('admin.upcomingUpdate');

    // Our Course
    Route::get('form/course','AdminController@course')->name('admin.course');
    Route::get('course/show','AdminController@courseShow')->name('admin.courseShow');
    Route::post('course/save','AdminController@courseSave')->name('admin.courseSave');
    Route::get('course/delete/{id}','AdminController@courseDelete')->name('admin.courseDelete');
    Route::get('course/edit/{id}','AdminController@courseEdit')->name('admin.courseEdit');
    Route::post('course/update/{id}','AdminController@courseUpdate')->name('admin.courseUpdate');
   
    //Modules
    Route::get('form/module','AdminController@module')->name('admin.module');
    Route::post('module/save','AdminController@moduleSave')->name('admin.moduleSave');
    Route::get('module/show','AdminController@moduleShow')->name('admin.moduleShow');


    //About Us
    Route::get('form/aboutUs','AdminController@aboutUs')->name('admin.aboutUs');
    Route::post('about/save','AdminController@aboutSave')->name('admin.aboutSave');
    Route::get('about/show','AdminController@aboutShow')->name('admin.aboutShow');
    Route::get('about/delete/{id}','AdminController@aboutDelete')->name('admin.aboutDelete');
    Route::get('about/edit/{id}','AdminController@aboutEdit')->name('admin.aboutEdit');
    Route::post('about/update/{id}','AdminController@aboutUpdate')->name('admin.aboutUpdate');
    Route::put('save/about/approve/{id}','AdminController@aboutApprove')->name('admin.aboutApprove');

    //Our Trainers
    Route::get('form/trainer','AdminController@trainer')->name('admin.trainer');
    Route::post('trainer/save','AdminController@trainerSave')->name('admin.trainerSave');
    Route::get('trainer/show','AdminController@trainerShow')->name('admin.trainerShow');
    Route::get('trainer/delete/{id}','AdminController@trainerDelete')->name('admin.trainerDelete');
    Route::get('trainer/edit/{id}','AdminController@trainerEdit')->name('admin.trainerEdit');
    Route::post('trainer/update/{id}','AdminController@trainerUpdate')->name('admin.trainerUpdate');

    //Testimonial
    Route::get('form/testimonial','AdminController@testimonial')->name('admin.testimonial');
    Route::post('testimonial/save','AdminController@testimonialSave')->name('admin.testimonialSave');
    Route::get('testimonial/show','AdminController@testimonialShow')->name('admin.testimonialShow');
    Route::get('testimonial/delete/{id}','AdminController@testimonialDelete')->name('admin.testimonialDelete');
    Route::get('testimonial/edit/{id}','AdminController@testimonialEdit')->name('admin.testimonialEdit');
    Route::post('testimonial/update/{id}','AdminController@testimonialUpdate')->name('admin.testimonialUpdate');


    //Blogs
    Route::get('blog','AdminController@blog');
    Route::get('form/blog','AdminController@blog')->name('admin.blog');
    Route::post('blog/save','AdminController@blogSave')->name('admin.blogSave');
    Route::get('blog/show','AdminController@blogShow')->name('admin.blogShow');
    Route::get('blog/delete/{id}','AdminController@blogDelete')->name('admin.blogDelete');
    Route::get('blog/edit/{id}','AdminController@blogEdit')->name('admin.blogEdit');
    Route::post('blog/update/{id}','AdminController@blogUpdate')->name('admin.blogUpdate');

    //Successful students
    Route::get('form/successful_students','AdminController@successful_students')->name('admin.successful_students');
    Route::post('successful_students/save','AdminController@successful_studentsSave')->name('admin.successful_studentsSave');
    Route::get('successful_students/show','AdminController@successful_studentsShow')->name('admin.successful_studentsShow');
    Route::get('successful_students/delete/{id}','AdminController@successful_studentsDelete')->name('admin.successful_studentsDelete');
    Route::get('successful_students/edit/{id}','AdminController@successful_studentsEdit')->name('admin.successful_studentsEdit');
    Route::post('successful_students/update/{id}','AdminController@successful_studentsUpdate')->name('admin.successful_studentsUpdate');

    
});

Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function(){
    Route::get('dashboard','UserController@index')->name('user.dashboard');
    //Route::post('form/submit','UserController@formSubmit')->name('user.form.submit');
    //Route::get('form/data','UserController@formData')->name('user.data.list');


    Route::get('/', 'UserController@home')->name('home');
    //Route::get('dashboard','UserController@index')->name('user.dashboard');
    Route::get('webdevelopment','UserController@webDevelopment')->name('user.webDevelopment');
    Route::get('digitalmerketing','UserController@digitalmerketing')->name('user.digitalmerketing');
    Route::get('profile','UserController@profile')->name('user.profile');
    
});


//Enroll
Route::post('/enroll','EnrollController@insert')->name('enroll');