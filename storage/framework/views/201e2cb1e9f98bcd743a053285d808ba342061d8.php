
<?php $__env->startSection('content'); ?>

<?php if(session('msg')): ?>
<h2 class="alert alert-success" ><?php echo e(session('msg')); ?></h2>
<?php endif; ?>



<!-- Principal Content Start -->
   <div id="index">

    <!-- Header -->
      <div class="row">
         <div class="col-xs-12 intro">
            <div class="carousel-inner">
               <div class="item active">
                <img class="img-responsive" src="<?php echo e(asset('fronttheme/images/pic.jpg')); ?>" alt="header picture">
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
              <?php $__currentLoopData = $oprations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="sol">
                  <img class="img-responsive" src="<?php echo e(asset('uploads/photo/'.$opration->photo)); ?>" alt="">
                   <b> Brand Name :</b> <?php echo e($opration['name']); ?> <br>
                  <b>Price:</b> <?php echo e($opration['price']); ?>  <br>
                    <b>Size:</b> <?php echo e($opration['size']); ?>

                 </div>
                     <div class="text-center">
                      <?php if(auth()->guard()->check()): ?>
                      <a href="/about/<?php echo e($opration->id); ?>/<?php echo e(Auth::id()); ?>" class="btn btn-success">Buy</a>
                      <a href="/cart/add/<?php echo e($opration->id); ?>/<?php echo e(Auth::id()); ?>" class="btn btn-warning">Add Cart</a>
       
                       <?php else: ?>
                       <a href="<?php echo e(route('login')); ?>" class="btn btn-success">Buy</a>
                       <a href="<?php echo e(route('login')); ?>" class="btn btn-warning">Add Cart</a>
                     
                          <?php endif; ?>
                     </div>
                </div>
               
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

   <?php $__env->stopSection(); ?>

<?php $__env->startPush('footer-scrpit'); ?>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\Shppoing\resources\views/front/home.blade.php ENDPATH**/ ?>