@extends('layouts.app')
@section('title', 'Elearning | Service | Create')
@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-6  mb-5">
            	<a href="{{ route('service.index') }}" class="btn btn-primary">Back</a>
              <div class="card pt-4">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Create Service</h4>
                  {{-- <p class="card-category">Complete your profile</p> --}}
                </div>
                <div class="card-body">
                  <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                     <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <label class="bmd-label-floating pl-2">Service Name</label>
                          <input type="text" class="form-control" name="name" >
                        </div>
                         <div class="form-group">
                          <label class="bmd-label-floating pl-2">Service Image</label>
                          <input type="file" class="form-control" name="image" >
                        </div>
                      </div>
                      </div>
{{--                       <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating pl-4">Categorious</label>
                          <select class="form-control" name="category">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div> --}}
                    </div>
{{--                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating pl-4">Price</label>
                          <input type="text" class="form-control" name="price" value="{{ $service->price }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                          <label class="bmd-label-floating">Upload</label>
                          <img src="{{ asset('uploads/service/'.$service->image) }}" style="height:70px; width: auto;" alt="">
                          <input type="file" class="form-control" name="image"> 
                      </div>
                    </div>   --}}
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group pl-3">
                          <label class="bmd-label-floating pl-2">Description</label>
                         <textarea name="desc" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
 {{-- ================================= --}}
{{--                     <div class="row">
                      <div class="col-md-12">
                         <img src="{{ asset('uploads/item/'.$item->image) }}" style="height:70px; width: auto;" alt="">
                          <input type="file" class="form-control" name="image"> 
                      </div>
                    </div> --}}

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