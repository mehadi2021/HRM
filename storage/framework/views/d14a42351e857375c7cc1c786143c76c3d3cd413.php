
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('job.store')); ?>" method="post" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="">Job Tittle</label>
    <input type="text" name="tittle" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Job Description</label>
    <input type="text" name="description" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Salary Range</label>
    <input type="number" name="salary" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Requirement</label>
    <input type="text" name="requirement" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spring-2023\hr-management-system\resources\views/backend/circular/create.blade.php ENDPATH**/ ?>