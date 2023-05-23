
<?php $__env->startSection('content'); ?>
<a class="btn btn-success" href="<?php echo e(route('backend.job.circular.create')); ?>">Circular Create</a>
<div>
  <H1>Circular List</H1>
<table class="table table-white">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Salary</th>
      <th scope="col">Requirement</th>
    </tr>
  </thead>
  <tbody>

       
  <?php $__currentLoopData = $circulars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($data->id); ?></th>
      <td><?php echo e($data->tittle); ?></td>
      <td><?php echo e($data->description); ?></td>
      <td><?php echo e($data->salary); ?></td>
      <td><?php echo e($data->requirement); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spring-2023\hr-management-system\resources\views/backend/circular/circular.blade.php ENDPATH**/ ?>