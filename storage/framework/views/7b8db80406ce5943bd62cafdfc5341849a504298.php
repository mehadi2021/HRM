
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Xtreme lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title> </title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/xtreme-admin-lite/"
    />
    <!-- Favicon icon -->
    <!-- <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png" -->
    />
    <!-- Custom CSS -->
    <link
      href="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/assets/libs/chartist/dist/chartist.min.css"
      rel="stylesheet"
    />e
    <!-- Custom CSS -->
    <link href="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Preloader - style you can find in spinners.css -->
    
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
   
    <!-- Main wrapper - style you can find in pages.scss -->
    
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    
      <!-- Topbar header - style you can find in pages.scss -->
      <?php echo $__env->make('backend.partial.frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
         <?php echo $__env->make('backend.partial.frontend.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       


        <!-- End Sidebar scroll-->
      </aside>
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row align-items-center">
            

            <div class="col-7">
              
            </div>
          </div>
        </div>
      
        <!-- End Bread crumb and right sidebar toggle -->
       
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
        
          <div class="row">
              <?php echo $__env->yieldContent('content'); ?>
           
              
          </div>
          
     
      </div>
   
    </div>
  
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="https://demos.wrappixel.com/free-admin-templates/bootstrap/xtreme-bootstrap-free/dist/js/pages/dashboards/dashboard1.js"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\hms\resources\views/backend/partial/frontend/master.blade.php ENDPATH**/ ?>