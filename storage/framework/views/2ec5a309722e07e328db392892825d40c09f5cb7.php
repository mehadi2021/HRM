<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">HR Management System</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('website.circular')); ?>">Job Circular</a></li>
                        <?php if(!auth()->user()): ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('website.reg')); ?>">SignUp</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('website.Login')); ?>">SignIn</a></li>
                        <?php else: ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('website.Logout')); ?>">Logout</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav><?php /**PATH C:\xampp\htdocs\spring-2023\hr-management-system\resources\views/frontend/fixed/header.blade.php ENDPATH**/ ?>