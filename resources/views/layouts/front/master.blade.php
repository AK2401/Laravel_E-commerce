<?php
use App\Http\Controllers\CartController;
$total=CartController::show();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon"  href="{{ asset('images/logo.png') }}">
	<title>Shopping</title>

	<!-- Bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="{{asset('fronttheme/bootstrap/css/bootstrap.min.css')}}">
	<!-- Bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="{{asset('fronttheme/css/style.css')}}">
	<!-- Font Awesome icons -->
	<link rel="stylesheet" type="text/css" href="{{asset('fronttheme/font-awesome/css/font-awesome.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top">

<!-- Navigation Bar -->
   <nav class="navbar navbar-fixed-top navbar-default">
     <div class="container">
	   	 <div class="navbar-header">
	   	 	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
	   	 		<span class="sr-only">Toggle navigation</span>
	   	 		<span class="icon-bar"></span>
	   	 		<span class="icon-bar"></span>
	   	 		<span class="icon-bar"></span>
	   	 	</button>
          <div>
            <a  class="navbar-brand page-scroll" href="#page-top">
            </a>
          </div>
	   	 </div>
      
	   	 <div class="collapse navbar-collapse navbar-right" id="menu">
	   	 	<ul class="nav navbar-nav">
                @auth
                <li class=" lien">  <b><a href="#" class="d-block"><i class="fa fa-user" sr-icons"></i> {{Auth::user()->fullname}} </a>  <p class="text-success">Online</p> </b>     </li>
                @endauth              
	   	 		<li class=" lien"><a href="/"><i class="fa fa-gift sr-icons"></i> Product</a></li>
             <li class="lien"><a href="/cart"><i class="fa fa-shopping-cart sr-icons"></i> Cart {{$total}}</a></li>
             <li class="lien"><a href="/order"><i class="fa fa-car sr-icons"></i> View Order</a></li>
             @auth
	   	 		<li class="lien"><a href="/contact"><i class="fa fa-user-circle sr-icons"></i> Profile</a></li>
                    @endauth 
                <li class="lien">@if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fa fa-home sr-icons"></i>Dashboard</a>
                        </li> @else
                        <li class="lien"><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        </li>
                            @if (Route::has('register'))
                            <li class="lien">   <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            </li>@endif
                        @endauth
                @endif

                    <li class="lien">    
   <!-- log out code -->
 
   <form method="POST" action="{{ route('logout') }}">
    @csrf
    <div class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    this.closest('form').submit(); " role="button">
            <i class="fas fa-sign-out-alt"></i>

         <button type="button" class="btn btn-danger">Log out</button>
        </a>
    </div>
</form>
                    </li>
            
	   	 	</ul>
	   	 </div>
   	 </div>
   </nav>
  
   
<!-- End of Navigation Bar -->

<!-- Principal Content Start -->
    
      @yield('content')
<!-- Principal Content Start -->
 <!-- Footer -->
 <footer class="home-page">
     <div class="container text-muted text-center">
        <div class="ending text-center">
			        <ul class="list-inline social-buttons">
			            <li><a href="#"><i class="fa fa-facebook sr-icons"></i></a>
			            </li>
                        <li><a href="#"><i class="fa fa-whatsapp sr-icons"></i></a>
			            </li>
                        <li><a href="#"><i class="fa fa-instagram sr-icons"></i></a>
			            </li>
			            <li><a href="#"><i class="fa fa-twitter sr-icons"></i></a>
			            </li>
			            <li><a href="#"><i class="fa fa-google-plus sr-icons"></i></a>
			            </li>
			        </ul>
				    <ul class="list-inline contact">
				       <li class="footer-number"><i class="fa fa-phone sr-icons"></i>  (00228)92229954 </li>
				       <li><i class="fa fa-envelope sr-icons"></i>  
                       Shopping@gmail.com</li>
				    </ul>
				    <p> Online Shpooing Website &copy; 2021</p>
		       </div>
     </div>
   </footer>
<!-- Jquery -->
   <script type="text/javascript" src="{{asset('fronttheme/js/jquery.min.js')}}"></script>
   <!-- Bootstrap core Javascript -->
   <script type="text/javascript" src="{{asset('fronttheme/bootstrap/js/bootstrap.min.js')}}"></script>
   <!-- Plugins -->
   <script type="text/javascript" src="{{asset('fronttheme/js/jquery.easing.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('fronttheme/js/jquery.magnific-popup.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('fronttheme/js/scrollreveal.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('fronttheme/js/script.js')}}"></script>
   @stack('footer-scripts')
</body>
</html>