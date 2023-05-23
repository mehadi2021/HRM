
<?php $__env->startSection('content'); ?>

<!-- ---Modal -->
<form action="<?php echo e(route('designation.designation_update',$department->id)); ?>" method="post">
     <?php echo method_field('PUT'); ?>
  <div class="modal-body">
      <?php echo csrf_field(); ?>
    
  <div class="form-group">
    <label for="exampleFormControlInput1">Names</label>
    <input value="<?php echo e($department->name); ?>" type="text" class="form-control" name="name" name="name" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">IDs</label>
    <input value="<?php echo e($department->id); ?>" type="number" class="form-control" id="id" name="id" placeholder="ID">
  </div>
 

        
  <div class="form-group">
    <label for="exampleFormControlInput1">Designation_status</label>
    <input value="<?php echo e($department->designation); ?>" type="text" class="form-control"  name="designation" placeholder="Designation_status">
  </div>
      
  
 

   
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hr-management-system\resources\views/backend/partial/edit/designationedit.blade.php ENDPATH**/ ?>