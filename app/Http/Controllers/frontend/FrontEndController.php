<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\AboutUs;
use App\Admin\Slider;
use App\Admin\Trainer;
use App\Admin\Upcoming;
use App\Admin\Course;
use App\Admin\Modules;
use App\Admin\Blog;
use App\Admin\Testimonial;
use App\Admin\Successful_students;


class FrontEndController extends Controller
{
    function main(){
        $slider = Slider::get();
        $upcoming = Upcoming::get();
        $course = Course::get();
        $modules = Modules::get();
        $about = AboutUs::where('status','Approved')->get();
        //$about = AboutUs::get();
        //dd($about); 
        $trainer = Trainer::get();
        $testimonial = Testimonial::get();
        $blog = Blog::get();
        return view('frontend/main',compact('slider','upcoming','course','modules','about','trainer','testimonial','blog'));
    }
    function webCourse(){
        return view('frontend/webCourse');
    }
    function graphicCourse(){
        return view('frontend/graphicCourse');
    }
    function digitalMarketCourse(){
        return view('frontend/digitalMarketCourse');
    }
    function success(){
        $successful_students = Successful_students::get();
        return view('frontend/success',compact('successful_students'));
    }
    function successP2(){
        return view('frontend/successP2');
    }
    function successP3(){
        return view('frontend/successP3');
    }
    function blogs(){
        return view('frontend/blogs');
    }
    function contact(){
        return view('frontend/contact');
    }
    // function login(){
    //     return view('frontend/login');
    // }
    // function register(){
    //     return view('frontend/register');
    // }
}
