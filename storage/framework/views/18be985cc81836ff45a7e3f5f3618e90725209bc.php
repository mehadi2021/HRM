
<?php $__env->startSection('content'); ?>
<div class="row">
  <div class='col-md-3'></div>
  <div class='col-md-6'>
    <table class="table table-striped">
      <thead>
        <div class="row">
          <div class="col-md-8">
            <a href="<?php echo e(route('attendence.checkin')); ?>" class="btn btn-primary my-2,">Check In</a>
          </div>
          <div class="col-md-4">
            <a href="<?php echo e(route('attendence.checkout')); ?>" class="btn btn-success my-2">Check Out</a>
          </div>
        </div>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">In-Time</th>
          <th scope="col">Out-Time</th>
          <th scope="col">Date</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $attendences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <th scope="row"><?php echo e($data->id); ?></th>
          <td><?php echo e($data->in_time); ?></td>
          <td><?php echo e($data->out_time); ?></td>
          <td><?php echo e($data->date); ?></td>
          <td><?php echo e($data->in_time->gt('9:00')?'Late':'Present'); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>



  <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/backend/partial/frontend/attendance.blade.php ENDPATH**/ ?>