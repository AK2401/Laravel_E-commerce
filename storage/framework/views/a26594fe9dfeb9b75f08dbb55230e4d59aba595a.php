
<?php $__env->startSection('content'); ?>

<div class="content">
<?php if(session('delete')): ?>
      <h2 class="alert alert-success" ><?php echo e(session('delete')); ?></h2>
      <?php endif; ?>


      <h1>Display User Order And Address</h1>

      <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th style="width: 40px">Customer Name</th>
                      <th style="width: 40px">Customer Address</th>
                      <th style="width: 40px">Customer Mobaile</th>

                      <th style="width: 40px">Product Name</th>
                      <th style="width: 40px">Product Price</th>
                      <th style="width: 40px">Product Size</th>
                      <th style="width: 60px">Product Photo</th>
                      <th style="width: 60px">Delete</th>

                    </tr>
                        <?php $__currentLoopData = $oder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  </thead>
                  <tbody>
                    <tr>
                  
                      <td> <?php echo e($oder->id); ?> </td>
                      <td> <?php echo e($oder->fullname); ?> </td>
                      <td> <?php echo e($oder->fulladd); ?> </td>
                      <td> <?php echo e($oder->mob); ?> </td>


                      <td> <?php echo e($oder->name); ?> </td>
                      <td> <?php echo e($oder->price); ?> </td>
                      <td> <?php echo e($oder->size); ?> </td>
                    <td><img width="60px" hight="40px" src="<?php echo e(asset('uploads/photo/'.$oder->photo )); ?>" alt="<?php echo e($oder->photo); ?>"> </td>

               <td> <a  class="btn btn-danger" href=admin/oder/delete/<?php echo e($oder->id); ?> >Delete</a> </td> 


                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                   
               
                </table>
              
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\Shppoing\resources\views/back/admin/orderview.blade.php ENDPATH**/ ?>