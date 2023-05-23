</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><span>HR</span> Management System</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.html" class="active">Home</a></li>

          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="team.html">Team</a></li>
              <li><a href="<?php echo e(route('exampage.expage')); ?>">Exam</a></li>
              <li><a href="<?php echo e(route('letter.cletter')); ?>">Exam Result</a></li>
            </ul>
          </li>

          <li><a href="services.html">About Us</a></li>
          <li><a href="<?php echo e(route('website.circular')); ?>">Job offer</a></li>
          <li><a href="<?php echo e(route('circular.applylist')); ?>">Portfolio</a></li>
            <?php if(!auth()->user()): ?>
          <li><a href="<?php echo e(route('website.reg')); ?>">Sign Up</a></li>
          <li><a href="<?php echo e(route('website.Login')); ?>">Sign In</a></li>
          <?php else: ?>
           <li><a href=""><?php echo e((auth()->user())->name); ?></a></li>
          <li><a href="<?php echo e(route('website.Logout')); ?>">Sign Out</a></li>

          <?php endif; ?>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->





































<?php /**PATH C:\xampp\htdocs\hms\resources\views/frontend/fixed/header.blade.php ENDPATH**/ ?>