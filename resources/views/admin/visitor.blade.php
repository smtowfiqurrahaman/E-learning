@extends('layouts.app')
@section('title', 'Elearning | Visitor')


@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12 p-5">
      <table id="VisitorDt" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">NO</th>
            <th class="th-sm">IP</th>
            <th class="th-sm">Date & Time</th>
            {{-- <th class="th-sm">action</th> --}}
          </tr>
        </thead>
        <tbody>
        	@foreach($visitor as $key=>$list)
          <tr>
            <th class="th-sm">{{ $key+1 }}</th>
            <th class="th-sm">{{ $list->ip_address }}</th>
            <th class="th-sm">{{ $list->visite_time }}</th>
           {{--  <th class="th-sm"><a href="/visitor/{{ $list->id }}/delete" class="btn btn-danger fs-5"><i class="fa fa-trash"></i></a></th> --}}
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

@endsection