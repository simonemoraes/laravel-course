<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class Courses extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request){
        $str = $request->get('str', "");
        if($str){
            $courses = Course::where('name', 'like','%'.$str.'%')->
                orWhere('description', 'like','%'.$str.'%')->get();
        }else {
            $courses = Course::all();
        }
        return view('courses.index', ['courses' => $courses, 'str' => $str]);
    }
}
