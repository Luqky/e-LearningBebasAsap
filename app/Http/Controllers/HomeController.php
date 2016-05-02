<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
USE App\Course;

class HomeController extends Controller
{

    public function beranda()
    {
        $course = Course::select('*') -> orderBy('course_id','asc')->get();
        return view('beranda',[
          'course' => $course
        ]);
    }
    public function kursus()
    {
        $course = Course::select('*') -> orderBy('course_id','asc')->get();
        return view('kursus',[
          'course' => $course
        ]);
    }
    public function kami()
    {
        return view('kami');
    }
}
