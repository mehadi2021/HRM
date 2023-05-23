
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('add.salary')); ?>" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
  Add salary
</a>
<table class="table">
  <thead>
  <tr>
      <th scope="col">serial</th>
      <th scope="col">Name</th>
      <th scope="col">Basic Allowence</th>
      <th scope="col">Home Allowence</th>
      <th scope="col">Medical Allowence</th>
     
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    
    <?php $__currentLoopData = $ing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($loop->iteration); ?></td>
      <td><?php echo e($data->name); ?></td>
      <td><?php echo e($data->basic_allowence); ?></td>
      <td><?php echo e($data->home_allowence); ?></td>
      <td><?php echo e($data->medical_allowence); ?></td>
      <td><?php echo e($data->status); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
  </tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spring-2023\hr-management-system\resources\views/backend/salary/table.blade.php ENDPATH**/ ?>