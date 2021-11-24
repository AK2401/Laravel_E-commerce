
<?php $__env->startSection('content'); ?>

<div class="content">
<?php if(session('delete')): ?>
      <h2 class="alert alert-success" ><?php echo e(session('delete')); ?></h2>
      <?php endif; ?>


      <h1>Display Photo</h1>

      <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th style="width: 40px">Name</th>
                      <th style="width: 40px">Price</th>
                      <th style="width: 40px">Size</th>
                      <th style="width: 60px">Photo</th>
                      <th style="width: 60px">update</th>
                      <th style="width: 60px">Delete</th>

                    </tr>
                    <?php $__currentLoopData = $opration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  </thead>
                  <tbody>
                    <tr>
                    
                      <td> <?php echo e($opration['id']); ?> </td>
                      <td> <?php echo e($opration['name']); ?> </td>
                   
                      <td> <?php echo e($opration['price']); ?> </td>
                      <td> <?php echo e($opration['size']); ?> </td>
                    <td><img width="60px" hight="40px" src="<?php echo e(asset('uploads/photo/'.$opration->photo )); ?>" alt="<?php echo e($opration->photo); ?>"> </td>

<td> <a  class="btn btn-primary" href=update/<?php echo e($opration->id); ?> >Update</a> </td>
<td> <a  class="btn btn-danger" href=delete/<?php echo e($opration->id); ?> >Delete</a> </td>


                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                   
               
                </table>
              
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\Shppoing\resources\views/back/admin/view.blade.php ENDPATH**/ ?>