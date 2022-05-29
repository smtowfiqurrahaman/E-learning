<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index(){
    	$projects = Project::all();
    	return view('frontend.project', compact('projects'));
    }
}
