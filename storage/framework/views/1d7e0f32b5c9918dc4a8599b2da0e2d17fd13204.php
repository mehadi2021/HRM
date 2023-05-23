
<?php $__env->startSection('content'); ?>


<form action="<?php echo e(route('leave.store')); ?>" method="post">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label name='employee_name' for="employee_name"></label>
    <input type="Employee Name" class="form-control" id="employee_name" name="employee_name" aria-describedby="EmployeeName" placeholder=" Employee Name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label name='employee_id' for="employee_id"></label>
    <input type="Employee Id" class="form-control" id="employee_id" name="employee_id" aria-describedby="EmployeeId" placeholder=" Employee Id">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  

  <div class="form-group">
    <label name='department_name' for="department_name">Department</label>
    <input type="Department Name" class="form-control" id="department_name" name="department_name"placeholder="Department">
  </div>
  <div class="form-group">
    <label name='department_id' for="department_id">Department Id</label>
    <input type="Department Id" class="form-control" id="department_id" name="department_id"placeholder="Department Id">
  </div>
  <div class="form-group">
    <label name='leave_type' for="leave_type">Leave Type</label>
    <input type="Leave Type" class="form-control" id="leave_type"name="leave_type" placeholder="Leave Type">
  </div>

  <div class="form-group">
    <label  for="leave_date">Leave Date</label>
    <input type="date" name='leave_date' class="form-control" id="leave_date"name="leave_date" placeholder="Leave Date">
  </div>
  <div class="form-group">
    <label name='employee_email' for="employee_email">Employee Email</label>
    <input type="Employee Email" class="form-control" id="employee_email" name="employee_email" placeholder="Employee Email">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hr-management-system\resources\views/backend/partial/leaveForm.blade.php ENDPATH**/ ?>