
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(route('payroll.create')); ?>" class="btn btn-primary">
  Add salary
</a>
<table class="table">
  <thead>
  <tr>
      <th scope="col">serial</th>
      <th scope="col">Name</th>
      
      <th scope="col">Month</th>
      <th scope="col">Status</th>
      <th scope="col">Amount</th>
     
    </tr>
  </thead>
  <tbody>
    
    <?php $__currentLoopData = $payrolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($loop->iteration); ?></td>
      <td><?php echo e(optional($data->user)->name); ?></td>
     
      <td><?php echo e($data->month); ?></td>
      <td><?php echo e($data->status); ?></td>
      <td><?php echo e($data->salarystructure->basic_allowence+$data->salarystructure->home_allowence+$data->salarystructure->medical_allowence); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
  </tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hr-management-system\resources\views/backend/payroll/table.blade.php ENDPATH**/ ?>