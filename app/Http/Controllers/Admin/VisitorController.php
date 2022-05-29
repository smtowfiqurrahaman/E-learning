<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
	public function visitorIndex(){

	// $visitor = json_decode(Visitor::orderBy('id','DESC')->take(50)->get());
	$visitor = json_decode(Visitor::all());
    return view('admin.visitor', compact('visitor'));
	}


	// public function destroy($id)
 //    {
 //       $visitor = Visitor::find($id)->delete();
 //       return redirect()->route('admin.visitor');
 //    }
}
