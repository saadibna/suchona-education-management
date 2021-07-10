<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user\UserForm;

class UserController extends Controller
{
    // public function index(){
    //     return view('user.home');
    //     return view('layouts/user/index');
    // }
    
    //Pranto
    public function index(){
        return view('user.user.index');
    }
    public function home(){
        return view('frontend/home');
    }
    public function webDevelopment(){
        return view('user.user.web');
    }
    public function digitalmerketing(){
        return view('user.user.digitalmarketing');
    }
    public function profile(){
        return view('user.user.profile');
    }
    
}
