

<?php $__env->startSection('content'); ?>
<?php if(session('msg')): ?>
      <h2 class="alert alert-success" ><?php echo e(session('msg')); ?></h2>
      <?php endif; ?>
<!-- Principal Content Start -->


<div id="contact">
   	  <div class="container">
   	    <div class="col-xs-12 col-sm-8 col-sm-push-2">
       	   <h1>Oder Now</h1>
       	   <hr>
	       <form class="form-horizontal" action="/blog" method="post">
			<?php echo csrf_field(); ?>
	       	  <div class="form-group">
	       	  	<div class="col-xs-12">
					<input class="form-control" name="product_id" value="<?php echo e($product_id); ?>"  type="hidden">

	       	  	    <label class="label-control">Full Name</label>
	       	  		<input class="form-control" name="fullname" placeholder="Enter Your Full Name" type="text">
	       	  	</div>
	       	  
	       	  </div>
	       	  <div class="form-group">
	       	  	<div class="col-xs-12">
	       	  		<label class="label-control">Email</label>
	       	  		<input class="form-control" name="email"placeholder="Enter Your Email Address"  type="text">
	       	  	</div>
	       	  </div>
	       	  <div class="form-group">
	       	  	<div class="col-xs-6">
	       	  		<label class="label-control">MOBAILE NUMBER</label>
	       	  		<input class="form-control"name="mob" placeholder="Enter Your Mobaile NO."  type="text">
	       	  	</div>
               <div class="col-xs-6">
                <label class="label-control">MOBAILE NUMBER</label>
                <input class="form-control"name="mobile" placeholder="Enter Your  Alternate Mobaile NO."  type="text">
              </div>
	       	  </div>
	       	  <div class="form-group">
				 <div class="col-xs-6">
	       	  		<label class="label-control">FULL ADDRESS</label>
              <input class="form-control"  name="fulladd"placeholder="Enter Your Full Address" type="text">
	       	  	</div>
               <div class="col-xs-6">
                <label class="label-control">CITY</label>
             <input class="form-control"name="city" placeholder="Enter Your City" type="text">
              </div>
              <div class="col-xs-6">
                <label class="label-control">PIN CODE</label>
             <input class="form-control"name="pin" placeholder="Enter Your Pin-Code"  type="text">
              </div>
              <div class="col-xs-6">
                <label class="label-control">DATE</label>
             <input class="form-control" name="date" type="date">
              </div>
	       	  </div>
             <div class="card-footer">
               <center>
              <button type="submit" class="btn btn-success">Submit</button>
            </center>
            </div>
	       </form>
	       <hr class="divider">
	    
	    </div>   
   	  </div>
   </div>


    
     <div class="container">
      <div class="row">

    
      </div>
     </div>
   </div>
 



 
</body>
</html>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer-scrpit'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\Shppoing\resources\views/front/blog.blade.php ENDPATH**/ ?>