
@extends('layouts.front.master')
@section('content')


@if(session('msg'))
      <h2 class="alert alert-warning" >{{session('msg')}}</h2>
      @endif

<!-- Principal Content Start-->
   <div id="about">
  
    <table>
      <tr>
        <td>
          <center>
            <div class="form-group">
              <div class="col-xs-12">
             <h1>Order Sent To This Address </h1>
              </div>
              <div class="col-xs-12">
             <h2>Profile</h2>
                <input class="form-control" value="{{Auth::user()->fullname}}" >
                <input class="form-control" value="{{Auth::user()->email}}" >
                <input class="form-control" value="{{Auth::user()->mob}}">
                <input class="form-control" value="{{Auth::user()->mobile}}" >
                <input class="form-control" value="{{Auth::user()->fulladd}}">
                <input class="form-control" value="{{Auth::user()->city}}">
                <input class="form-control" value="{{Auth::user()->pin}}">
              </div>
           
            </div>


         
      </center>
        </td>
      </tr>
    </table>

@foreach($carts as $cart)
<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="sol">

      <img class="img-responsive" src="{{asset('uploads/photo/'.$cart->photo)}}" alt="">
      <b> Brand Name :</b> {{$cart->name}} <br>
      <b>Price:</b> {{$cart->price}}  <br>
        <b>Size:</b> {{$cart->size}} <br>
        <center>
    <a href="/oder/delete/{{$cart->order_id}}" class="btn btn-danger"> Cancel Order</a>

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