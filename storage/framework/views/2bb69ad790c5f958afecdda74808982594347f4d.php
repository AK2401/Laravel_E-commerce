

<?php $__env->startSection('content'); ?>


<?php if(session('msg')): ?>
      <h2 class="alert alert-warning" ><?php echo e(session('msg')); ?></h2>
      <?php endif; ?>

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
                <input class="form-control" value="<?php echo e(Auth::user()->fullname); ?>" >
                <input class="form-control" value="<?php echo e(Auth::user()->email); ?>" >
                <input class="form-control" value="<?php echo e(Auth::user()->mob); ?>">
                <input class="form-control" value="<?php echo e(Auth::user()->mobile); ?>" >
                <input class="form-control" value="<?php echo e(Auth::user()->fulladd); ?>">
                <input class="form-control" value="<?php echo e(Auth::user()->city); ?>">
                <input class="form-control" value="<?php echo e(Auth::user()->pin); ?>">
              </div>
           
            </div>


         
      </center>
        </td>
      </tr>
    </table>

<?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="sol">

      <img class="img-responsive" src="<?php echo e(asset('uploads/photo/'.$cart->photo)); ?>" alt="">
      <b> Brand Name :</b> <?php echo e($cart->name); ?> <br>
      <b>Price:</b> <?php echo e($cart->price); ?>  <br>
        <b>Size:</b> <?php echo e($cart->size); ?> <br>
        <center>
    <a href="/oder/delete/<?php echo e($cart->order_id); ?>" class="btn btn-danger"> Cancel Order</a>

        </center>
           </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

               
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

 <?php $__env->stopSection(); ?>

<?php $__env->startPush('footer-scrpit'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\Shppoing\resources\views/front/about.blade.php ENDPATH**/ ?>