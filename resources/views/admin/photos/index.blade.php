@extends('layouts.app')
@section('title', 'Elearning | Gallery')
@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-12 p-5">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Photo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
         <input type="file" id="imgInput" class="form-group">
         <br>
        <center> <img class="w-75 justify-content-center" id="imgview" src="" alt=""></center>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Upload</button>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection

@push('script')
 <script type="text/javascript">
 	$('#imgInput').change(function(){
 		var reader = new FileReader();
 		reader.readAsDataURL(this.files[0]);
 		reader.onload = function(event){
 			var ImgSource = event.target.result;
 			$('#imgview').attr('src',ImgSource)
 		}
 	});
 	
 </script>
@endpush