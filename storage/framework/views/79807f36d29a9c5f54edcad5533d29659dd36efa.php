
   
<?php $__env->startSection('main'); ?>
 <?php $__currentLoopData = $apply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div style="text-align: center;">
 <h1>Confirmation Letter<h1>
<h2>Name:<?php echo e($list->user_name); ?></h2>

<h2>Phone:<?php echo e(auth()->user()->mobile); ?></h2>
<h2>Address:<?php echo e(auth()->user()->Address); ?></h2>
<h2>Job Status:<?php echo e($list->result); ?></h2>
 </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/frontend/fixed/cletter.blade.php ENDPATH**/ ?>