@extends('layouts.front.master')
@section('content')

@if(session('msg'))
<h2 class="alert alert-success" >{{session('msg')}}</h2>
@endif



<!-- Principal Content Start -->
   <div id="index">

    <!-- Header -->
      <div class="row">
         <div class="col-xs-12 intro">
            <div class="carousel-inner">
               <div class="item active">
                <img class="img-responsive" src="{{asset('fronttheme/images/pic.jpg')}}" alt="header picture">
               </div>
               <div class="carousel-caption">
                  <h1>FIND NICE PRODUCT HERE</h1>
                  <hr>
               </div>
            </div>
         </div>
      </div>

      <div id="index-body">

        
      
      <!-- Navigation Table Content -->
        <div class="tab-content">

        <!-- First Category pictures -->
           <div id="category1" class="" >
              <div class="row">
              @foreach($oprations as $opration)

                <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="sol">
                  <img class="img-responsive" src="{{asset('uploads/photo/'.$opration->photo)}}" alt="">
                   <b> Brand Name :</b> {{$opration['name']}} <br>
                  <b>Price:</b> {{$opration['price']}}  <br>
                    <b>Size:</b> {{$opration['size']}}
                 </div>
                     <div class="text-center">
                      @auth
                      <a href="/about/{{$opration->id}}/{{Auth::id()}}" class="btn btn-success">Buy</a>
                      <a href="/cart/add/{{$opration->id}}/{{Auth::id()}}" class="btn btn-warning">Add Cart</a>
       
                       @else
                       <a href="{{ route('login') }}" class="btn btn-success">Buy</a>
                       <a href="{{ route('login') }}" class="btn btn-warning">Add Cart</a>
                     
                          @endauth
                     </div>
                </div>
               
                @endforeach
                </div>
            
                
    <!-- End of Navigation Table Content -->
      </div><!-- End of Index-body box -->

    <!-- Newsletter form -->
      <div class="index-form text-center">
        <h3>SUSCRIBE TO OUR WEBSITE </h3>
        <h5>Suscribe to receive our News and Gifts</h5>
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-xs-12 col-sm-6 col-sm-push-3 col-md-4 col-md-push-4">
            <input class="form-control" type="text" placeholder="Type here your email address">
            <a href="" class="btn btn-lg sr-button">SUBSCRIBE</a>
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
