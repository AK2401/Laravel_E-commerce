@extends('layouts.front.master')
@section('content')

@if(session('msg'))
      <h2 class="alert alert-success" >{{session('msg')}}</h2>
      @endif

<!-- Principal Content Start -->
   <div id="contact">
   	  <div class="container">
   	    <div class="col-xs-12 col-sm-8 col-sm-push-2">
	
       	   <h1>PROFILE</h1>
       	   <hr>
	       <form class="form-horizontal" action="/contact" method="post" enctype="multipart/form-data">
			@csrf
 			<div> 
			<img class="circle" height="300px" width="200px"  src="{{asset('uploads/photo/'. Auth::user()->profile_photo_path )}}" alt="">
		</div>
			<div class="input-group">
				<div class="custom-file">
					<label class="label-control">Update Photo</label>
				  <input type="file" value="{{Auth::user()->profile_photo_path}}" class="custom-file-input" name="profile_photo_path" id="exampleInputFile">
				  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
				</div>
			  </div>

	       	  <div class="form-group">
	       	  	<div class="col-xs-12">
						 <input type="hidden"  name="id" value="{{Auth::user()->id}}">
	       	  	    <label class="label-control">Full Name</label>
	       	  		<input class="form-control" value="{{Auth::user()->fullname}}" name="fullname" type="text">
	       	  	</div>
	       	  
	       	  </div>
	       	  <div class="form-group">
	       	  	<div class="col-xs-12">
	       	  		<label class="label-control">Email</label>
	       	  		<input class="form-control" value="{{Auth::user()->email}}"name="email" type="text">
	       	  	</div>
	       	  </div>
	       	  <div class="form-group">
	       	  	<div class="col-xs-6">
	       	  		<label class="label-control">MOBAILE NUMBER</label>
	       	  		<input class="form-control" value="{{Auth::user()->mob}} "name="mob" type="text">
	       	  	</div>
					 <div class="col-xs-6">
						<label class="label-control">MOBAILE NUMBER</label>
						<input class="form-control" value="{{Auth::user()->mobile}} "name="mobile" type="text">
					</div>
	       	  </div>
	       	  <div class="form-group">
				 <div class="col-xs-12">
	       	  		<label class="label-control">ADDRESS</label>
	       	  		<input class="form-control" value="{{Auth::user()->fulladd}}"name="fulladd" type="text">
	       	  	</div>
	       	  </div>
				 <div class="form-group">
					<div class="col-xs-6">
							<label class="label-control">CITY</label>
							<input class="form-control" value="{{Auth::user()->city}}"name="city" type="text">
						</div>
						<div class="col-xs-6">
							<label class="label-control">PIN</label>
							<input class="form-control" value="{{Auth::user()->pin}}"name="pin" type="text">
						</div>
					</div>
					
					  <div class="card-footer">
						  <center>
						<button type="submit" class="btn btn-primary">EDIT </button>
					</center>
					  </div>
	       </form>
	       <hr class="divider">
	      
	    </div>   
   	  </div>
   </div>

</body>
</html>
@endsection

@push('footer-scrpit')


@endpush