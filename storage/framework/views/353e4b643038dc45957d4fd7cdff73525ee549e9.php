
<?php $__env->startSection('content'); ?>

<div class="content">
      <?php if(session('msg')): ?>
      <h2 class="alert alert-success" ><?php echo e(session('msg')); ?></h2>
      <?php endif; ?>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
             
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Shopping Site</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/add" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Photo Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Photo Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Eneter Photo Price</label>
                    <input type="text" class="form-control" name="price" id="exampleInputPassword1" placeholder="Enter Photo price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Eneter Photo size</label>
                    <input type="text" class="form-control" name="size" id="exampleInputPassword1" placeholder="Enter Photo size">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="photo" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                     
                    </div>
                    </div>
                  </div>
                 
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
             
            </div>
           
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\Shppoing\resources\views/back/admin/add.blade.php ENDPATH**/ ?>