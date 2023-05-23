
<?php $__env->startSection('content'); ?>

<a class="btn btn-success" href="<?php echo e(route('exam.create')); ?>">Exam Create</a>
<br>
    <a class="btn btn-success" href="<?php echo e(route('result.resultpage')); ?>">Exam Result</a>

  <H1>Exam List</H1>
<table class="table table-white">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Action</th>
      <th scope="col">End Time</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
      <th scope="col">Question</th>
    </tr>
  </thead>
  <tbody>


  <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($data->id); ?></th>
      <td><a class="btn btn-success" href="<?php echo e(route('exam.delete',$data->id)); ?>">Delete</a></td>
       <td><?php echo e($data->to_time); ?></td>
      <td><?php echo e($data->qa); ?></td>
      <td><?php echo e($data->qb); ?></td>
      <td><?php echo e($data->qc); ?></td>
      <td><?php echo e($data->qd); ?></td>
      <td><?php echo e($data->qe); ?></td>
      <td><?php echo e($data->qf); ?></td>
      <td><?php echo e($data->qg); ?></td>
      <td><?php echo e($data->qh); ?></td>
      <td><?php echo e($data->qi); ?></td>
      <td><?php echo e($data->qj); ?></td>
     
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/backend/exam/exam.blade.php ENDPATH**/ ?>