
<?php $__env->startSection('main'); ?>

<div>
  <H1>Apply List</H1>
<table class="table table-white">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Job Tittle</th>
      <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Date</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Photo</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
        <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
    <tr>
      <th scope="row"><?php echo e($list->id); ?></th>
      <td><?php echo e($list->tittle); ?></td>
      <td><?php echo e($list->name); ?></td>
      <td><?php echo e($list->fname); ?></td>
      <td><?php echo e($list->mname); ?></td>
      <td><?php echo e($list->date); ?></td>
      <td><?php echo e($list->email); ?></td>
      <td><?php echo e($list->phone); ?></td>
      <td><?php echo e($list->address); ?></td>
      <td><img src="<?php echo e(url('/uploads/'.$list->photo)); ?>" class="img-square" width="90" height="100" alt="apply image"></td>
      <td><?php echo e($list->status); ?></td>
     
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/frontend/fixed/applylist.blade.php ENDPATH**/ ?>