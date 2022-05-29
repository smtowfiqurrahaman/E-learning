<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $project = Project::all();
         return view('admin.project.create',compact('project'));
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
            'link' => 'required',
            'image' => 'required'
        ]);

        $image = $request->file('image');
        $slug = Str::slug($request->name);


        if (isset($image)) {
            $currentData = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentData.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/project')) {
                mkdir('uploads/project', 077 , true);
            }
            $image->move('uploads/project', $imagename);
        }else{
            $imagename = 'default.png';
        }

        $project = new Project();
        $project->project_name = $request->name;
        $project->project_des = $request->desc;
        $project->project_link = $request->link;
        $project->project_img = $imagename;

        $project->save();
        return redirect()->route('project.index');
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
        $project = Project::find($id);
         return view('admin.project.edit',compact('project'));
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
            'link' => 'required'
            // 'image' => 'required'
        ]);

        $project = Project::find($id);
        $image = $request->file('image');
        $slug = Str::slug($request->name);


        if (isset($image)) {
            $currentData = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentData.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/project')) {
                mkdir('uploads/project', 077 , true);
            }
            $image->move('uploads/project', $imagename);
        }else{
            $imagename = 'default.png';
        }

        
        $project->project_name = $request->name;
        $project->project_des = $request->desc;
        $project->project_link = $request->link;
        $project->project_img = $imagename;

        $project->save();
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if (file_exists('uploads/project/'.$project->project_img)) {
            unlink('uploads/project/'.$project->project_img);
        }
        $project->delete();
        return redirect()->route('project.index');
    }
}
