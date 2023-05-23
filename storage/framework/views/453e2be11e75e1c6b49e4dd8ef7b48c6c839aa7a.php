
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('submit.salary')); ?>" method="post">
      <?php echo csrf_field(); ?>
    
  <div class="form-group">
    <label for="exampleFormControlInput1">Names</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
  </div>


  <div class="form-group">
    <label for="exampleFormControlInput1">Basic Allowence</label>
    <input type="number" class="form-control" id="amount" name="basic_allowence" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Home Allowence</label>
    <input type="number" class="form-control" id="amount" name="home_allowence">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Medical Allowence</label>
    <input type="number" class="form-control" id="amount" name="medical_allowence" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">status</label>
    <input type="string" class="form-control" id="amount" name="status" >
  </div>
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/backend/salary/form.blade.php ENDPATH**/ ?>