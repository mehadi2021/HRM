
<?php $__env->startSection('content'); ?>

<div>
  <H1>Result List</H1>
  <?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <h1>Applicant Name:<?php echo e($result->user_name); ?>

    <hr>
      <h2>Question 1:<?php echo e($list->qa); ?>

      <h2>Answer 1:<?php echo e($result->ra); ?>

        <hr>
         <h2>Question 2:<?php echo e($list->qb); ?>

      <h2>Answer 2:<?php echo e($result->rb); ?>

        <hr>
         <h2>Question 3:<?php echo e($list->qc); ?>

      <h2>Answer 3:<?php echo e($result->rc); ?>

        <hr>
         <h2>Question 4:<?php echo e($list->qd); ?>

      <h2>Answer 4:<?php echo e($result->rd); ?> 
        <hr>
        <h2>Question 5:<?php echo e($list->qe); ?>

      <h2>Answer 5:<?php echo e($result->re); ?> 
        <hr>
        <h2>Question 6:<?php echo e($list->qf); ?>

      <h2>Answer 6:<?php echo e($result->rf); ?>

        <hr>
         <h2>Question 7:<?php echo e($list->qg); ?>

      <h2>Answer 7:<?php echo e($result->rg); ?>

        <hr>
         <h2>Question 8:<?php echo e($list->qh); ?>

      <h2>Answer 8:<?php echo e($result->rh); ?> 
        <hr>
        <h2>Question 9:<?php echo e($list->qi); ?>

      <h2>Answer 9:<?php echo e($result->ri); ?> 
        <hr>
        <h2>Question 10:<?php echo e($list->qj); ?>

      <h2>Answer 10:<?php echo e($result->rj); ?>

        <br>
        <br>
   
        
       

<a class="btn btn-success" href="<?php echo e(route('result.resultedit',$result->id)); ?>">Result Submit</a>

      
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/backend/exam/result.blade.php ENDPATH**/ ?>