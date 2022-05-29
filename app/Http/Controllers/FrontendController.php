<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\Service;
use App\Models\Course;
use App\Models\Project;

class FrontendController extends Controller
{
   public function homeIndex(){

   	$UserIP = $_SERVER['REMOTE_ADDR'];
   	date_default_timezone_set("Asia/Dhaka");
   	$timeDate = date('d-m-Y h:i:sa');

   	Visitor::insert(['ip_address'=>$UserIP, 'visite_time'=>$timeDate]);
//Visitor section

	$serviceSection = Service::all();

	$courseSection = Course::orderBy('id','DESC')->limit(6)->get();
	$projectSection = Project::all();
	// $projectSection = Project::orderBy('id','DESC')->limit(10)->get();


   	return view('welcome',compact('serviceSection','courseSection','projectSection'));
   }

   
}
