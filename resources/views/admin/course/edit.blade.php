@extends('layouts.app')
@section('title', 'Elearning | Course| Edit')
@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-8">
            	<a href="{{ route('course.index') }}" class="btn btn-primary">Back</a>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit course</h4>
                  {{-- <p class="card-category">Complete your profile</p> --}}
                </div>
                <div class="card-body">
                  <form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")
                     <div class="row">
                      <div class="col-md-10 pt-4">
                        <div class="form-group">
                          <label class="bmd-label-floating pl-4">Course Name</label>
                          <input type="text" class="form-control" name="name" value="{{ $course->course_name }}" >
                        </div>
                        <div class="form-group">
                          <label class="bmd-label-floating pl-2">Course Image</label>
                          <img src="{{ asset('uploads/course/'.$course->course_img) }}" style="height:70px; width: auto;" alt="">
                          <input type="file" class="form-control" name="image" >
                        </div>
                      {{--  --}}
                        <div class="form-group">
                          <label class="bmd-label-floating pl-2">Course Fee</label>
                          <input type="text" class="form-control" name="fee" value="{{ $course->course_fee }}" >
                        </div>
                        {{--  --}}
                        <div class="form-group">
                          <label class="bmd-label-floating pl-2">Course Total Class</label>
                          <input type="text" class="form-control" name="class" value="{{ $course->course_totalclass }}" >
                        </div>
                        {{--  --}}
                        <div class="form-group">
                          <label class="bmd-label-floating pl-2">Course Total Enroll</label>
                          <input type="text" class="form-control" name="enroll" value="{{ $course->course_totalenroll }}" >
                        </div>
                        {{--  --}}
                        <div class="form-group">
                          <label class="bmd-label-floating pl-2">Course Link</label>
                          <input type="text" class="form-control" name="link" value="{{ $course->course_link }}" >
                        </div>
                      </div>
                    </div>
                {{--  --}}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating pl-4">Description</label>
                         <textarea name="desc" id="" cols="30" rows="5" class="form-control">{{ $course->course_des}}</textarea>
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