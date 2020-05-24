<?php

namespace App\Http\Controllers;
use App\Course;

use Illuminate\Http\Request;

class Courses extends Controller
{
    public function index(Request $request)
    {
        $string = $request->get('str', "");
        if($string) {
            // $courses = Course::where('name', 'like', '%' . $string . '%')->
            //     orWhere('description', 'like', '%' . $string . '%')->get();
            $courses = Course::search($string)->get();
        } else {
            $courses = Course::all();
        }
        
        return view('courses.index', ['courses' => $courses, 'str' => $string]);
    }
}
