

  
<?php $__env->startSection('main'); ?>
<br><br><br><br><br>
<h3>Fill Up this form</h3>

<form action="<?php echo e(route('applyForm.job',$jobs->id)); ?>" method="post">
 <?php echo csrf_field(); ?>
      <?php echo method_field('put'); ?>
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
  <div class="form-group">
    <label for="">Photo</label>
    <input type="text" name="photo" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/frontend/fixed/checkout.blade.php ENDPATH**/ ?>