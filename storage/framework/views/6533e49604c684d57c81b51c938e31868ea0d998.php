<?php $__env->startSection('content'); ?>

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
      <th scope="col">Date of Birth</th>
      
      <th scope="col">Photo</th>
      <th scope="col">CV Download</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php $__currentLoopData = $applys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($apply->id); ?></th>
      <td><?php echo e($apply->tittle); ?></td>
      <td><?php echo e($apply->name); ?></td>
      <td><?php echo e($apply->fname); ?></td>
      <td><?php echo e($apply->mname); ?></td>
      <td><?php echo e($apply->date); ?></td>
      
      <td><img src="<?php echo e(url('/uploads/'.$apply->photo)); ?>" class="img-square" width="90" height="100" alt="apply image"></td>
      <td><a href="<?php echo e(route('circular.download',$apply->cv)); ?>">Download</a></td>
      <td><?php echo e($apply->address); ?></td>
      <td><?php echo e($apply->status); ?></td>
      <td>

        <a class="btn btn-success" href="<?php echo e(route('circular.edit',$apply->id)); ?>">Approve</a>
  
      </td>


    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </tbody>
</table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/backend/apply/applylist.blade.php ENDPATH**/ ?>