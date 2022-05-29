@extends('layouts.app')
@section('title', 'Elearning | Contact')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12 p-5">
 {{--      <a class="btn btn-primary" href="{{ route('contact.create') }}">Add New</a> --}}
      <table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="">Sl No</th>
            <th class="th-sm">Name</th>
            <th class="th-sm">Phone</th>
            <th class="th-sm">Email</th>
            <th class="th-sm">Message</th>
            {{-- <th class="th-sm">Edit</th> --}}
            <th class="th-sm">Delete</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($contacts as $key=>$contact)
          <tr>
            <th>{{ $key+1 }}</th>
             <th class="th-sm">{{ $contact->contact_name }}</th>
            {{-- <th class="th-sm"><img class="table-img" src="{{ asset('uploads/contact/'.$contact->contact_img) }}"></th> --}}
           <th class="th-sm">{{ $contact->contact_phn }}</th>
           <th class="th-sm">{{ $contact->contact_emali }}</th>
            <th class="th-sm">{{ $contact->contact_message }}</th>

{{--         <th class="th-sm">
              <a href="{{ route('contact.edit', $contact->id) }}">
                <i class="fas fa-edit">
                </i>
              </a>
            </th> --}}
            
            {{-- Delete --}}
            <form action="{{ route('contact.destroy',$contact->id) }}" id="delete-form-{{$contact->id}}" method="POST">
              @csrf
              @method('DELETE')
            </form>
            {{-- Delete --}}
            <th class="th-sm">
              <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are You Sure To Delete This item????')){
                event.preventDefault();
                document.getElementById('delete-form-{{$contact->id}}').submit();
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

@endsection