<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index(){
    	$courses = Course::all();
    	return view('frontend.course', compact('courses'));
    }
}
