<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Str;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $course = Course::all();
       return view('admin.course.create', compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $this->validate($request,[
            'name' => 'required',
            'desc' => 'required',
            'fee' => 'required',
            'class' => 'required',
            'enroll' => 'required',
            'link' => 'required',
            'image' => 'required'
        ]);

        $image = $request->file('image');
        $slug = Str::slug($request->name);


        if (isset($image)) {
            $currentData = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentData.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/course')) {
                mkdir('uploads/course', 077 , true);
            }
            $image->move('uploads/course', $imagename);
        }else{
            $imagename = 'default.png';
        }

        $course = new Course();
        $course->course_name = $request->name;
        $course->course_des = $request->desc;
        $course->course_fee = $request->fee;
        $course->course_totalclass = $request->class;
        $course->course_totalenroll = $request->enroll;
        $course->course_link = $request->link;
        $course->course_img = $imagename;

        $course->save();
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        return view('admin.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'desc' => 'required',
            'fee' => 'required',
            'class' => 'required',
            'enroll' => 'required',
            'link' => 'required'
            // 'image' => 'required'
        ]);

        $course = Course::find($id);
        $image = $request->file('image');
        $slug = Str::slug($request->name);


        if (isset($image)) {
            $currentData = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentData.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/course')) {
                mkdir('uploads/course', 077 , true);
            }
            $image->move('uploads/course', $imagename);
        }else{
            $imagename = 'default.png';
        }

        // $course = new Course();
        $course->course_name = $request->name;
        $course->course_des = $request->desc;
        $course->course_fee = $request->fee;
        $course->course_totalclass = $request->class;
        $course->course_totalenroll = $request->enroll;
        $course->course_link = $request->link;
        $course->course_img = $imagename;

        $course->save();
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $course = course::find($id);
        if (file_exists('uploads/course/'.$course->course_img)) {
            unlink('uploads/course/'.$course->course_img);
        }
        $course->delete();
        return redirect()->route('course.index');
    }
}
