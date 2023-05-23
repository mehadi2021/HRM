

  
<?php $__env->startSection('main'); ?>
<br>
<div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
         
<h3>Fill Up this form</h3>

<form action="<?php echo e(route('exampage.exstore')); ?>" method="post" enctype="multipart/form-data" >
<?php echo csrf_field(); ?>
<?php $__currentLoopData = $lists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php if($list->to_time<= now()->toTimeString()): ?>
<h3 style="text-align:center">Exam Hour(<?php echo e($list->exam_time); ?>min)</h3>
<div>
    <input type="hidden" name="user_name" >
</div>
  <div class="form-group">
    <label for=""><?php echo e($list->qa); ?></label>
    <input type="text" name="ra" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

   <div class="form-group">
    <label for=""><?php echo e($list->qb); ?></label>
    <input type="text" name="rb" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

   <div class="form-group">
    <label for=""><?php echo e($list->qc); ?></label>
    <input type="text" name="rc" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

   <div class="form-group">
    <label for=""><?php echo e($list->qd); ?></label>
    <input type="text" name="rd" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for=""><?php echo e($list->qe); ?></label>
    <input type="text" name="re" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for=""><?php echo e($list->qf); ?></label>
    <input type="text" name="rf" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for=""><?php echo e($list->qg); ?></label>
    <input type="text" name="rg" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for=""><?php echo e($list->qh); ?></label>
    <input type="text" name="rh" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for=""><?php echo e($list->qi); ?></label>
    <input type="text" name="ri" class="form-control" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>

  <div class="form-group">
    <label for=""><?php echo e($list->qj); ?></label>
    <input type="text" class="form-control" name="rj" id="" aria-describedby="emailHelp" placeholder="Please Written Your Answer">
  </div>
   <div>
    <input type="hidden" name="result">
  </div>
  <br><br>
   <?php if(now()->diffInMinutes($list->to_time)<=$list->exam_time): ?>
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php else: ?>
  <h1>Sorry!Exam Time Over</h1>
  <?php endif; ?>
</form>

<?php else: ?>
<h1>Exam Time not going on</h1>
<h2>Please Wait!</h2>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<br>
</div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/frontend/fixed/expage.blade.php ENDPATH**/ ?>