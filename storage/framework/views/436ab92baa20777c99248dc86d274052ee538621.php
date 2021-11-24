<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon"  href="<?php echo e(asset('images/logo/camera.png')); ?>">
	<title>Shopping</title>

	<!-- Bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('fronttheme/bootstrap/css/bootstrap.min.css')); ?>">
	<!-- Bootstrap core css -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('fronttheme/css/style.css')); ?>">
	<!-- Font Awesome icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('fronttheme/font-awesome/css/font-awesome.min.css')); ?>">

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
	   	 		<li class=" lien"><a href="/"><i class="fa fa-home sr-icons"></i> Home</a></li>
	   	 		<li class="lien"><a href="/blog"><i class="fa fa-file-text sr-icons"></i> Order</a></li>
             <li class="lien"><a href="/cart"><i class="fa fa-file-text sr-icons"></i> Cart</a></li>
             <li class="lien"><a href="/about"><i class="fa fa-bookmark sr-icons"></i> View Order</a></li>

	   	 		<li class="lien"><a href="/contact"><i class="fa fa-phone-square sr-icons"></i> Contact</a></li>

                <li class="lien"><?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/dashboard')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        </li> <?php else: ?>
                        <li class="lien"><a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                        </li>
                            <?php if(Route::has('register')): ?>
                            <li class="lien">   <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            </li><?php endif; ?>
                        <?php endif; ?>
                <?php endif; ?>

                    <li class="lien">    
   <!-- log out code -->
 
   <form method="POST" action="<?php echo e(route('logout')); ?>">
    <?php echo csrf_field(); ?>
    <div class="nav-item">
        <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
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
    
      <?php echo $__env->yieldContent('content'); ?>
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
   <script type="text/javascript" src="<?php echo e(asset('fronttheme/js/jquery.min.js')); ?>"></script>
   <!-- Bootstrap core Javascript -->
   <script type="text/javascript" src="<?php echo e(asset('fronttheme/bootstrap/js/bootstrap.min.js')); ?>"></script>
   <!-- Plugins -->
   <script type="text/javascript" src="<?php echo e(asset('fronttheme/js/jquery.easing.min.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('fronttheme/js/jquery.magnific-popup.min.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('fronttheme/js/scrollreveal.min.js')); ?>"></script>
   <script type="text/javascript" src="<?php echo e(asset('fronttheme/js/script.js')); ?>"></script>
   <?php echo $__env->yieldPushContent('footer-scripts'); ?>
</body>
</html><?php /**PATH C:\Users\admin\Desktop\opration\resources\views/layouts/front/master.blade.php ENDPATH**/ ?>