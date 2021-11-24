
<?php $__env->startSection('content'); ?>

<div class="content">
<?php if(session('msg')): ?>
      <h2 class="alert alert-success" ><?php echo e(session('msg')); ?></h2>
      <?php endif; ?>

      <h1>Edit Photo Details</h1>

      <form action="/update" method="post" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
                <div class="card-body">
                  <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo e($opration->id); ?>">
                    <label for="exampleInputEmail1">Enter Photo Name</label>
                    <input type="text" value="<?php echo e($opration->name); ?>" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Photo Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Eneter Photo Price</label>
                    <input type="text" value="<?php echo e($opration->price); ?>" class="form-control" name="price" id="exampleInputPassword1" placeholder="Enter  Photo price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Eneter Photo Size</label>
                    <input type="text" value="<?php echo e($opration->size); ?>" class="form-control" name="size" id="exampleInputPassword1" placeholder="Enter Photo size">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" value="<?php echo e($opration->photo); ?>" class="custom-file-input" name="photo" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <!-- <div class="input-group-append"> -->
                        <!-- <span class="input-group-text">Upload</span> -->
                
         
                 
                    <!-- <input type="file" name="file"> <br> <br> -->
                    <!-- <button type="submit" >Upload File</button> -->
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
</div>

              
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\admin\Desktop\Shppoing\resources\views/back/admin/update.blade.php ENDPATH**/ ?>