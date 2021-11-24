<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
DATA
</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')); ?>">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>>
  <!-- IonIcons -->
  <link rel="stylesheet" href="<?php echo e(asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
  
    
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="/" class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="\about" class="nav-link <?php echo e(Request::is('about') ? 'active' : ''); ?>">about</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="\blog" class="nav-link <?php echo e(Request::is('blog') ? 'active' : ''); ?>">Order</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="\contact"class="nav-link <?php echo e(Request::is('contact') ? 'active' : ''); ?>">Contact</a>
        </li>
      </ul> 
  
  
      <ul class="navbar-nav ml-auto">
    
       <!-- Left navbar links -->
   
         <!-- log out code -->
 
    <form method="POST" action="<?php echo e(route('logout')); ?>">
      <?php echo csrf_field(); ?>
      <div class="nav-item">
          <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                      this.closest('form').submit(); " role="button">
              <i class="fas fa-sign-out-alt"></i>

           <button type="button" class="btn btn-dark">Log out</button>
          </a>
      </div>
  </form>

         
        </li>
     
    </nav>
    </ul>

    <!-- Right navbar links -->
  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link ">
      <img src="<?php echo e(asset('dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Table</span> <br>
    
      <div class="text-center">  <span class="brand-text font-weight-light text-success ">Online</span></div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        


      
        <div class="info">
          <a href="#" class="d-block"> <?php echo e(Auth::user()->name); ?> </a>
        </div>
      </div>

<?php if (isset($component)) { $__componentOriginalb39f02297e06f88d776a00f43735bbb27b257ee9 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Back\Sidebar::class, []); ?>
<?php $component->withName('back.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalb39f02297e06f88d776a00f43735bbb27b257ee9)): ?>
<?php $component = $__componentOriginalb39f02297e06f88d776a00f43735bbb27b257ee9; ?>
<?php unset($__componentOriginalb39f02297e06f88d776a00f43735bbb27b257ee9); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>

    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard </h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   <?php echo $__env->yieldContent('content'); ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="">DATA</a>.</strong>
    All rights reserved.
   
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap -->
<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE -->
<script src="<?php echo e(asset('dist/js/adminlte.js')); ?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo e(asset('plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('dist/js/pages/dashboard3.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\admin\Desktop\opration\resources\views/layouts/back/master.blade.php ENDPATH**/ ?>