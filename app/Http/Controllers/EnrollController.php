<?php

namespace App\Http\Controllers;

use App\Enrollment;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function insert(Request $req){

        $user_info=new Enrollment;
        $user_info->name= $req->name;
        $user_info->phone= $req->phone;
        $user_info->email= $req->email;
        $user_info->course= $req->course;
        $user_info->address= $req->address;
        $user_info->save();

        return redirect()->back();
    }
    // public function formData(){
    //     $allEnroll = Enrollment::get();
    //     return view('layouts/admin/users',compact('allEnroll'));
    // }
}
