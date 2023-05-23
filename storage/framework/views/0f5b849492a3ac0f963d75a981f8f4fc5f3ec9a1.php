<?php $__env->startSection('content'); ?>
<h1>Exam Paper</h1>

<form action="<?php echo e(route('exam.store')); ?>" method="post" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="">Question no-1</label>
    <input type="text" name="qa" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Question No-2</label>
    <input type="text" name="qb" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Question No-3</label>
    <input type="text" name="qc" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question No-4</label>
    <input type="text" name="qd" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Question No-5</label>
    <input type="text" name="qe" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question No-6</label>
    <input type="text" name="qf" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question No-7</label>
    <input type="text" name="qg" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question-8 <No-8></No-8></label>
    <input type="text" name="qh" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question No-9</label>
    <input type="text" name="qi" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Question No-10</label>
    <input type="text" name="qj" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">start Exam time  </label>
    <input type="time" name="to_time" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">End Exam time  </label>
    <input type="time" name="end_time" class="form-control" id="" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="form-group">
    <label for="">How Many Hour Exam</label>
    <input type="number" name="exam_time" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter minutes time">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/backend/exam/exampage.blade.php ENDPATH**/ ?>