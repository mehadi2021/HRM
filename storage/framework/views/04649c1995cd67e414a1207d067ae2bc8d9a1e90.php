
<?php $__env->startSection('main'); ?>

<br><br><br>
<section class="contact-section bg-black"><br><br><br>
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">


                <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                            <h4 class="text-uppercase m-0">Tittle:<?php echo e($job->tittle); ?></h4>
                            <hr class="my-4 mx-auto" />
                                <h4 class="text-uppercase m-0">Salary: <?php echo e($job->salary); ?> BDT</h4><br>
                                <h4 class="text-uppercase m-0">Description: <?php echo e($job->description); ?></h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50">Education: <?php echo e($job->requirement); ?></div>
                            </div>
                            <a href="<?php echo e(route('place.job',$job->id)); ?>" class="btn btn-success"> Job Apply</a>
                        </div>
                    </div>

                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                   
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hms\resources\views/frontend/fixed/job-circular.blade.php ENDPATH**/ ?>