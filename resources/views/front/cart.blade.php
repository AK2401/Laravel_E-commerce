@extends('layouts.front.master')
@section('content')


@if(session('msg'))
      <h2 class="alert alert-warning" >{{session('msg')}}</h2>
      @endif


@foreach($carts as $cart)
<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="sol">

      <img class="img-responsive" src="{{asset('uploads/photo/'.$cart->photo)}}" alt="">
      <b> Brand Name :</b> {{$cart->name}} <br>
      <b>Price:</b> {{$cart->price}}  <br>
        <b>Size:</b> {{$cart->size}} <br>
        <center>
        <a href="/about/{{$cart->id}}/{{Auth::id()}}" class="btn btn-success">Buy Now</a>
        <a href="/delete/{{$cart->card_id}}" class="btn btn-danger">Remove</a>

      </center>
           </div>
        </div>

        @endforeach

  
                     
    <!-- End of Navigation Table Content -->
      </div><!-- End of Index-body box -->

      <!-- Newsletter form -->
        <div class="index-form text-center">
    
          <form class="form-horizontal">
            <div class="form-group">
              <div class="col-xs-12 col-sm-6 col-sm-push-3 col-md-4 col-md-push-4">
              </div>
            </div>
          </form>
        </div>
      <!-- End of Newsletter form -->  
  
      
     </div><!-- End of index box -->
  
    
  
     <!-- Jquery -->
     </body>
  </html>
  
     @endsection
  
  @push('footer-scrpit')
  
  
  @endpush