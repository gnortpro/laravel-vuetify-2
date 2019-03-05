<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function viewCourse(){
        return view('course.course');
    }
}
