@extends('layouts.app')
@section('title', 'Elearning | Project | Create')
@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-6  mb-5">
            	<a href="{{ route('project.index') }}" class="btn btn-primary">Back</a>
              <div class="card pt-4">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create project</h4>
                  {{-- <p class="card-category">Complete your profile</p> --}}
                </div>
                <div class="card-body">
                  <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating pl-2">Project Name</label>
                          <input type="text" class="form-control" name="name" >
                        </div>
                         <div class="form-group">
                          <label class="bmd-label-floating pl-2">Project Image</label>
                          <input type="file" class="form-control" name="image" >
                        </div>
                        {{--  --}}
                        
                        <div class="form-group">
                          <label class="bmd-label-floating pl-2">Project Link</label>
                          <input type="text" class="form-control" name="link" >
                        </div>
                      {{--  --}}
                       
                      </div>
                      </div>
                    </div>
                    {{--  --}}
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group pl-3">
                          <label class="bmd-label-floating pl-2">Description</label>
                         <textarea name="desc" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
 {{-- ================================= --}}
                    <button type="submit" class="btn btn-primary mt-4 pull-left">Create</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection