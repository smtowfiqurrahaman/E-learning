<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Str;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
// $service = json_decode(Visitor::orderBy('id','DESC')->take(50)->get());
    $services = Service::all();
    return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();
        return view('admin.service.create',compact('service'));
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
            'image' => 'required'
        ]);

        $image = $request->file('image');
        $slug = Str::slug($request->name);


        if (isset($image)) {
            $currentData = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentData.'-'.'.'.$image->getClientOriginalExtension();
            if (!file_exists('uploads/service')) {
                mkdir('uploads/service', 077 , true);
            }
            $image->move('uploads/service', $imagename);
        }else{
            $imagename = 'default.png';
        }

        $service = new Service();
        $service->service_name = $request->name;
        $service->service_des = $request->desc;
        $service->service_img = $imagename;

        $service->save();
        return redirect()->route('service.index');
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
        $service = Service::find($id);

       return view('admin.service.edit',compact('service'));
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
            'service_name' => 'required',
            'service_des' => 'required'
        ]);

        $service = Service::find($id);
        $image = $request->file('image');
        $slug = Str::slug($request->service_name);

        $service->service_name = $request->service_name;

        if (isset($image)) {
            $currentData = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentData.'-'.'.'.$image->getClientOriginalExtension();
            
            if (!file_exists('uploads/service')) {
                mkdir('uploads/service', 077 , true);
            }
            $image->move('uploads/service', $imagename);
        }else{
            $imagename = $service->service_img;
        }

        
        $service->service_name = $request->service_name;
        $service->service_des = $request->service_des;
        $service->service_img = $imagename;

        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $service = Service::find($id);
        if (file_exists('uploads/service/'.$service->service_img)) {
            unlink('uploads/service/'.$service->service_img);
        }
        $service->delete();
        return redirect()->route('service.index');

    }
}
