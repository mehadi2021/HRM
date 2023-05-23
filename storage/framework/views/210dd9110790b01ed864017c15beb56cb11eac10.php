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
    </div>
            </div>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Total Leave :</h5><br>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <h5>Total Leave: <?php echo e($totalLeave); ?></h5>
    <p class="card-text"></p>
  </div>
</div>
<!-- <table class="table table-white">
  <thead>
    <tr>

      <th scope="col">Name</th>
      <th scope="col">phone</th>
    </tr>
  </thead>
  <tbody>


  </tbody>
</table> -->
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.partial.frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/backend/layout/homee.blade.php ENDPATH**/ ?>