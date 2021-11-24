
<?php $__env->startSection('content'); ?>

<div class="content">



      <h1>Display customer Order</h1>

      <div class="card">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th style="width: 40px">Full Name</th>
                      <th style="width: 40px">Email</th>
                      <th style="width: 40px">MOBAILE NUMBER</th>
                      <th style="width: 60px">MOBAILE NUMBER</th>
                      <th style="width: 60px">ADDRESS</th>
                      <th style="width: 60px">CITY</th>
                      <th style="width: 60px">PIN CODE</th>
                      <th style="width: 60px">DATE</th>


                    </tr>
                    <?php $__currentLoopData = $oder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  </thead>
                  <tbody>
                    <tr>
                    
                      <td> <?php echo e($oder['id']); ?> </td>
                      <td> <?php echo e($oder['fullname']); ?> </td>
                      <td> <?php echo e($oder['email']); ?> </td>
                      <td> <?php echo e($oder['mob']); ?> </td>
                      <td> <?php echo e($oder['mobile']); ?> </td>
                      <td> <?php echo e($oder['fulladd']); ?> </td>
                      <td> <?php echo e($oder['city']); ?> </td>
                      <td> <?php echo e($oder['pin']); ?> </td>
                      <td> <?php echo e($oder['date']); ?> </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                   
               
                </table>
              
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\opration\resources\views/back/admin/orderview.blade.php ENDPATH**/ ?>