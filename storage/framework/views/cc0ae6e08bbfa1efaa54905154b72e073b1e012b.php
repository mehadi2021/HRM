
<?php $__env->startSection('content'); ?>
<br><br><br><br><br>
<h3>Fill Up this form</h3>

<form action="<?php echo e(route('circular.update',$apply->id)); ?>" method="post">
 <?php echo csrf_field(); ?>
      <?php echo method_field('put'); ?>
  <div class="form-group">
    <label for="">Confirm Status</label>
    <input type="text" name="status" class="form-control" id="" aria-describedby="emailHelp" placeholder="<?php echo e($apply->status); ?>">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/backend/apply/edit.blade.php ENDPATH**/ ?>