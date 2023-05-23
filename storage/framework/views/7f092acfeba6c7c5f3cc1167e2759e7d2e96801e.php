
<?php $__env->startSection('content'); ?>
<div class="col-5">
              <h4 class="page-title">Dashboard</h4>
              <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Total Apply :</h5><br>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <h5>Total Apply : <?php echo e($totalApply); ?></h5>
    <p class="card-text"></p>
    <a href="<?php echo e(route('circular.List')); ?>" class="btn btn-info">View List</a>
  </div>

  <div>
<!-- <table class="table table-white">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">phone</th>
    </tr>
  </thead>
  <tbody>

       
  <?php $__currentLoopData = $ApplyList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($apply->name); ?></td>
      <td><?php echo e($apply->phone); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table> -->
</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\spring-2023\hr-management-system\resources\views/backend/layout/home.blade.php ENDPATH**/ ?>