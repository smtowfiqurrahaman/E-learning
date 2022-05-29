@extends('layouts.app')
@section('title', 'Elearning | project| Edit')
@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-8">
            	<a href="{{ route('project.index') }}" class="btn btn-primary">Back</a>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit project</h4>
                  {{-- <p class="card-category">Complete your profile</p> --}}
                </div>
                <div class="card-body">
                  <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                     <div class="row">
                      <div class="col-md-10 pt-4">
                        <div class="form-group">
                          <label class="bmd-label-floating pl-4">project Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $project->project_name }}" >
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating pl-2">project Image</label>
                          <img src="{{ asset('uploads/project/'.$project->project_img) }}" style="height:70px; width: auto;" alt="">
                          <input type="file" class="form-control" name="image" >
                        </div>
                      {{--  --}}
                        <div class="form-group">
                          <label class="bmd-label-floating pl-2">project Link</label>
                          <input type="text" class="form-control" name="link" value="{{ $project->project_link }}" >
                        </div>
                      </div>
                    </div>
                {{--  --}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating pl-4">Description</label>
                         <textarea name="desc" id="" cols="30" rows="5" class="form-control">{{ $project->project_des}}</textarea>
                        </div>
                      </div>
                    </div>
 {{-- ================================= --}}
                    <button type="submit" class="btn btn-primary mt-4 pull-left">Update</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection