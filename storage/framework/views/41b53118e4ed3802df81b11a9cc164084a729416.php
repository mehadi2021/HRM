<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HR Management System - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(url('frontend/assetss/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(url('frontend/assetss/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(url('frontend/assetss/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('frontend/assetss/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('frontend/assetss/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('frontend/assetss/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('frontend/assetss/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('frontend/assetss/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('frontend/assetss/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(url('frontend/assetss/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(url('frontend/assetss/css/style.css')); ?>" rel="stylesheet">

<?php echo $__env->make('frontend.fixed.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.fixed.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('main'); ?>
  <main id="main">



<?php echo $__env->make('frontend.fixed.clients', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </main>
  <!-- End #main -->
<?php echo $__env->make('frontend.fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(url('frontend/assetss/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(url('frontend/assetss/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(url('frontend/assetss/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(url('frontend/assetss/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(url('frontend/assetss/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(url('frontend/assetss/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
  <script src="<?php echo e(url('frontend/assetss/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(url('frontend/assetss/js/main.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\hms\resources\views/frontend/master.blade.php ENDPATH**/ ?>