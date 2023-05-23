
<?php $__env->startSection('content'); ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
Add employee
</button>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col"> Name</th>
      <th scope="col">Employee Id</th>
      <th scope="col"> Mobile</th>
      <th scope="col">Email</th>
      <th scope="col"> Address</th>
      

     
    </tr>
  </thead>
  <?php $__currentLoopData = $request; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo e($data->id); ?></th>
      <td><?php echo e($data->name); ?></td>
      <td><?php echo e($data->employee_id); ?></td>
      <td><?php echo e($data->mobile); ?></td>
      <td><?php echo e($data->email); ?></td>
      <td><?php echo e($data->Address); ?></td>
      <td>
      <a href="" class="btn btn-info" role="button">Edit</a>
      <a href="<?php echo e(route('employee.delete',$data->id)); ?>" class="btn btn-danger" role="button">Delete</a>
      </td>
      <?php if(session()->has('message')): ?>
                <span class="alert alert-success"><?php echo e(session()->get('message')); ?></span>
            <?php endif; ?>
      
    </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </tbody>
</table>



<!-- ---Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo e(route('_employee')); ?>" method="post">
      <?php echo csrf_field(); ?>
    
  <div class="form-group">
    <label for="exampleFormControlInput1">Names</label>
    <input type="text" class="form-control" name="name"  name="name"  placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">IDs</label>
    <input type="number" class="form-control"  name="id"  placeholder="ID">
</div>

<div class="form-group">
    <label for="exampleFormControlInput1">Mobiles</label>
    <input type="number" class="form-control" name="mobile" name="mobile" placeholder="Mobile">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Emails</label>
    <input type="text" class="form-control"name="email" placeholder="Email">
</div>

<div>
  <label for="">
    select grade
  </label>
  <select class="form-control" name="grade_id" id="">
    <?php $__currentLoopData = $grades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value=""><?php echo e($data->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Address">
  </div>
<div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <input type="password" class="form-control" name="password"  placeholder="Password">
</div>





 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
 
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/backend/partial/employee/employee.blade.php ENDPATH**/ ?>