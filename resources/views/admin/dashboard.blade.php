@extends('layouts.app')
@section('title', 'Elearning | Admin')
{{-- @include('layouts.partial.topbar') --}}
@include('layouts.partial.sidebar')

@section('content')

<div class="row justify-content-center pt-5 pl-5">
	<div class="col-lg-12 justify-content-center pt-5 pl-5">
		<img src="{{ asset('backend/images/programmer.gif') }}"  alt="" style="padding-left: 200px;
">
	</div>
</div>



@endsection