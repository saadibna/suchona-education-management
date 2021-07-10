<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user\UserForm;
use App\Enrollment;
use App\Admin\AboutUs;
use App\Admin\Trainer;
use App\Admin\Slider;
use App\Admin\Upcoming;
use App\Admin\Course;
use App\Admin\Modules;
use App\Admin\Blog;
use App\Admin\Testimonial;
use App\Admin\Successful_students;

class AdminController extends Controller
{
    function index(){
        return view('layouts/admin/index');
    }
    function users(){
        return view('layouts/admin/users');
    }
    function mail(){
        return view('layouts/admin/mail');
    }
    function table_basic(){
        return view('layouts/admin/table_basic');
    }
    function table_datatable(){
        $allEnroll = Enrollment::latest()->get();//->paginate(5);
        return view('layouts/admin/table_datatable',compact('allEnroll'));
    }
    
    function mediaFancybox(){
        return view('layouts/admin/media_fancybox');
    }
    function mediaMasonry(){
        return view('layouts/admin/media_masonry');
    }
    function pagePricingTable(){
        return view('layouts/admin/page_pricing_table');
    }
    function pageTimeline(){
        return view('layouts/admin/page_timeline');
    }


    //slider method
    function slider(){
        return view('layouts/admin/slider');
    }
    function sliderShow(){
        $slider = Slider::get();
        return view('layouts/admin/sliderTable',compact('slider'));
    }
    public function sliderSave(Request $req){

        $slider=new slider;
        $slider->heading= $req->heading;
        $slider->paragraph= $req->paragraph;
        $slider->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/slider/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $slider->image = $path . '/' . $file_name;
        }
        $slider->save();

        return redirect()->back();
    }
    function sliderEdit($id){
        $slider = Slider::findOrFail($id);
        return view('layouts/admin/sliderEdit',compact('slider'));
    }

    public function sliderUpdate(Request $req, $id){

        $slider=new Slider;
        $slider = Slider::findOrFail($id);
        $slider->heading= $req->heading;
        $slider->paragraph= $req->paragraph;
        $slider->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/Slider/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $slider->image = $path . '/' . $file_name;
        }
        $slider->save();

        return redirect()->route('admin.sliderShow');
    }
    
    function sliderDelete($id){
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->back();
    }

    //Slider section end


    //upcoming method
    function upcoming(){
        return view('layouts/admin/upcoming');
    }
    function upcomingShow(){
        $upcoming = Upcoming::get();
        return view('layouts/admin/upcomingTable',compact('upcoming'));
    }
    public function upcomingSave(Request $req){

        $upcoming=new upcoming;
        $upcoming->name= $req->name;
        $upcoming->registrationOpens= $req->registrationOpens;
        $upcoming->registrationClosed= $req->registrationClosed;
        $upcoming->batchOrientation= $req->batchOrientation;
        $upcoming->classesStart= $req->classesStart;
        
        $upcoming->save();

        return redirect()->back();
    }
    function upcomingEdit($id){
        $upcoming = Upcoming::findOrFail($id);
        return view('layouts/admin/upcomingEdit',compact('upcoming'));
    }

    public function upcomingUpdate(Request $req, $id){

        $upcoming=new Upcoming;
        $upcoming = Upcoming::findOrFail($id);
        $upcoming->name= $req->name;
        $upcoming->registrationOpens= $req->registrationOpens;
        $upcoming->registrationClosed= $req->registrationClosed;
        $upcoming->batchOrientation= $req->batchOrientation;
        $upcoming->classesStart= $req->classesStart;

        $upcoming->save();

        return redirect()->route('admin.upcomingShow');
    }
    
    function upcomingDelete($id){
        $upcoming = Upcoming::findOrFail($id);
        $upcoming->delete();
        return redirect()->back();
    }

    //Upcoming section end

    //our course

    function course(){
        return view('layouts/admin/course');
    }

    function courseShow(){
        $course = Course::get();
        return view('layouts/admin/courseTable',compact('course'));
    }
    public function CourseSave(Request $req){
        $course=new Course;
        $course->title= $req->title;
        $course->description= $req->description;
        $course->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/course/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $course->image = $path . '/' . $file_name;
        }
        $course->save();

        return redirect()->back();
    }
    function courseEdit($id){
        $course = course::findOrFail($id);
        return view('layouts/admin/courseEdit',compact('course'));
    }
    public function courseUpdate(Request $req, $id){

        //$about=new AboutUs;
        $course = Course::findOrFail($id);
        $course->title= $req->title;
        $course->description= $req->description;
        $course->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/course/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $course->image = $path . '/' . $file_name;
        }
        $course->save();

        return redirect()->route('admin.courseShow');
    }
     function courseDelete($id){
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->back();
    }
    //our course end

    //module method
    function module(){
        return view('layouts/admin/module');
    }
    function moduleShow(){
        $module = Modules::get();
        return view('layouts/admin/moduleTable',compact('module'));
    }
    public function moduleSave(Request $req){

        $module=new modules;
        $module->heading= $req->heading;
        $module->paragraph= $req->paragraph;
        $module->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/module/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $module->image = $path . '/' . $file_name;
        }
        $module->save();

        return redirect()->back();
    }




    //About Us Section Start
    
    function aboutUs(){
        return view('layouts/admin/aboutUs');
    }
    function aboutShow(){
        $about = AboutUs::get();

        return view('layouts/admin/aboutUsTable',compact('about'));
    }
    public function aboutSave(Request $req){
        $about=new AboutUs;
        $about->heading= $req->heading;
        $about->title= $req->title;
        $about->description= $req->description;
        $about->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/AboutUs/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $about->image = $path . '/' . $file_name;
        }
        $about->status='Pending';
        $about->save();

        return redirect()->back();
    }
    public function aboutApprove(Request $req, $id){
        $about = AboutUs::where('id', '=', $id)->first();
        $about->status = 'Approved';
        $about->save();
        return redirect()->back();
    }
    function aboutEdit($id){
        $about = AboutUs::findOrFail($id);
        return view('layouts/admin/aboutUsEdit',compact('about'));
    }

    public function aboutUpdate(Request $req, $id){

        $about=new AboutUs;
        $about = AboutUs::findOrFail($id);
        $about->heading= $req->heading;
        $about->title= $req->title;
        $about->description= $req->description;
        $about->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/AboutUs/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $about->image = $path . '/' . $file_name;
        }
        $about->save();

        return redirect()->route('admin.aboutShow');
    }
    
    function aboutDelete($id){
        $about = AboutUs::findOrFail($id);
        $about->delete();
        return redirect()->back();
    }

//About Us Section End


//Trainer Method

    function trainer(){
        return view('layouts/admin/trainer');
    }
    function trainerShow(){
        $trainer = Trainer::get();
        return view('layouts/admin/trainerTable',compact('trainer'));
    }
    public function trainerSave(Request $req){

        $trainer=new Trainer;
        $trainer->name= $req->name;
        $trainer->description= $req->description;
        $trainer->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/Trainer/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $trainer->image = $path . '/' . $file_name;
        }
        $trainer->save();

        return redirect()->back();
    }

    function trainerEdit($id){
        $trainer = Trainer::findOrFail($id);
        return view('layouts/admin/trainerEdit',compact('trainer'));
    }

    public function trainerUpdate(Request $req, $id){
        $trainer=new Trainer;
        $trainer = Trainer::findOrFail($id);
        $trainer->name= $req->name;
        $trainer->description= $req->description;
        $trainer->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/Trainer/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $trainer->image = $path . '/' . $file_name;
        }
        $trainer->save();

        return redirect()->route('admin.trainerShow');
    }
    
    function trainerDelete($id){
        $trainer = Trainer::findOrFail($id);
        $trainer->delete();
        return redirect()->back();
    }

    //trainer section end

    //Testimonial method
    function testimonial(){
        return view('layouts/admin/testimonial');
    }
    function testimonialShow(){
        $testimonial = Testimonial::get();
        return view('layouts/admin/testimonialTable',compact('testimonial'));
    }
    public function testimonialSave(Request $req){

        $testimonial=new Testimonial;
        $testimonial->name= $req->name;
        $testimonial->description= $req->description;
        $testimonial->rating= $req->rating;
        $testimonial->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/testimonial/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $testimonial->image = $path . '/' . $file_name;
        }
        $testimonial->save();

        return redirect()->back();
    }
    function testimonialEdit($id){
        $testimonial = Testimonial::findOrFail($id);
        return view('layouts/admin/testimonialEdit',compact('testimonial'));
    }

    public function testimonialUpdate(Request $req, $id){

        $testimonial=new Testimonial;
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name= $req->name;
        $testimonial->description= $req->description;
        $testimonial->rating= $req->rating;
        $testimonial->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/testimonial/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $testimonial->image = $path . '/' . $file_name;
        }
        $testimonial->save();

        return redirect()->route('admin.testimonialShow');
    }
    
    function testimonialDelete($id){
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->back();
    }

    //testimonial section end


   
    //Blog method
    function blog(){
        return view('layouts/admin/blog');
    }
    function blogShow(){
        $blog = Blog::get();
        return view('layouts/admin/blogTable',compact('blog'));
    }
    public function blogSave(Request $req){

        $blog=new blog;
        $blog->title= $req->title;
        $blog->postedBy= $req->postedBy;
        $blog->paragraph= $req->paragraph;
        $blog->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/blog/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $blog->image = $path . '/' . $file_name;
        }
        $blog->save();

        return redirect()->back();
    }

    function blogEdit($id){
        $blog = Blog::findOrFail($id);
        return view('layouts/admin/blogEdit',compact('blog'));
    }

    public function blogUpdate(Request $req, $id){

        $blog=new Blog;
        $blog = Blog::findOrFail($id);
        $blog->title= $req->title;
        $blog->postedBy= $req->postedBy;
        $blog->paragraph= $req->paragraph;
        $blog->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/blog/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $blog->image = $path . '/' . $file_name;
        }
        $blog->save();

        return redirect()->route('admin.blogShow');
    }
    
    function blogDelete($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->back();
    }

    //blog section end

    //Successful students method
    function successful_students(){
        return view('layouts/admin/successful_students');
    }
    function successful_studentsShow(){
        $successful_students = Successful_students::get();
        return view('layouts/admin/successful_students_table',compact('successful_students'));
    }
    public function successful_studentsSave(Request $req){

        $successful_students=new successful_students;
        $successful_students->name= $req->name;
        $successful_students->designation= $req->designation;
        $successful_students->comment= $req->comment;
        $successful_students->image= $req->image;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/success/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $successful_students->image = $path . '/' . $file_name;
        }
        $successful_students->save();

        return redirect()->back();
    }

    function successful_studentsEdit($id){
        $successful_students = Successful_students::findOrFail($id);
        return view('layouts/admin/successful_studentsEdit',compact('successful_students'));
    }

    public function successful_studentsUpdate(Request $req, $id){

        $successful_students=new Successful_students;
        $successful_students = Successful_students::findOrFail($id);
        $successful_students->name= $req->name;
        $successful_students->designation= $req->designation;
        $successful_students->comment= $req->comment;
        $successful_students->image= $req->image;
        if($req->hasFile('image')) {
            $file = $req->file('image');
            $path = 'admin/success/image';
            $file_name = 'image'. time() . '.' . $file->getClientOriginalExtension();
            $file->move($path, $file_name);
            $successful_students->image = $path . '/' . $file_name;
        }
        $successful_students->save();

        return redirect()->route('admin.successful_studentsShow');
    }
    
    function successful_studentsDelete($id){
        $successful_students = Successful_students::findOrFail($id);
        $successful_students->delete();
        return redirect()->back();
    }

    //Successful students section end


}
