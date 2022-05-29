@extends('layouts.app')
@section('title', 'Elearning | Course')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12 p-5">
      <a class="btn btn-primary" href="{{ route('course.create') }}">Add New</a>
      <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">Sl No</th>
            <th class="th-sm">Name</th>
            <th class="th-sm">Image</th>
            <th class="th-sm">Fee</th>
            <th class="th-sm">Class</th>
            <th class="th-sm">Enroll</th>
            <th class="th-sm">Details</th>
            <th class="th-sm">Edit</th>
            <th class="th-sm">Delete</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($courses as $key=>$course)
          <tr>
            <th>{{ $key+1 }}</th>
             <th class="th-sm">{{ $course->course_name }}</th>
            <th class="th-sm"><img class="table-img" src="{{ asset('uploads/course/'.$course->course_img) }}"></th>
           <th class="th-sm">{{ $course->course_fee }}</th>
           <th class="th-sm">{{ $course->course_totalclass }}</th>
           <th class="th-sm">{{ $course->course_totalenroll }}</th>
            <th class="th-sm">{{ $course->course_des }}</th>

            <th class="th-sm">
              <a href="{{ route('course.edit', $course->id) }}" class="btn btn-success btn-sm">
                <i class="fas fa-edit">
                </i>
              </a>
            </th>
            {{-- Delete --}}
            <form action="{{ route('course.destroy',$course->id) }}" id="delete-form-{{$course->id}}" method="POST">
              @csrf
              @method('DELETE')
            </form>
            {{-- Delete --}}
            <th class="th-sm">
              <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure To Delete This item????')){
                event.preventDefault();
                document.getElementById('delete-form-{{$course->id}}').submit();
              }else{
                event.preventDefault();
              }
              "><i class="fas fa-trash-alt"></i>
            </button>
            
             {{--  <a href="" ><i class="fas fa-trash-alt"></i></a> --}}

            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
{{-- 2nd Div --}}
{{-- <div class="container">
  <div class="row">
    <div class="col-md-12 text-center p-5">
      <div class="spinner-grow text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-secondary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-success" role="status">
        <span class="sr-only">Loading...</span>
      </div>
      <div class="spinner-grow text-danger" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
  </div>
</div> --}}
{{-- 2nd Div --}}
{{-- 3rd Div --}}
{{-- <div class="container">
  <div class="row">
    <div class="col-md-12 text-center p-5">
      <h3 class="alert alert-danger">No Data Found......</h3>
    </div>
  </div>
</div> --}}
{{-- 3rd Div --}}
@endsection