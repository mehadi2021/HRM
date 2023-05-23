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
              <li><a href="{{ route('exampage.expage') }}">Exam</a></li>
              <li><a href="{{ route('letter.cletter') }}">Exam Result</a></li>
            </ul>
          </li>

          <li><a href="services.html">About Us</a></li>
          <li><a href="{{route('website.circular')}}">Job offer</a></li>
          <li><a href="{{ route('circular.applylist') }}">Portfolio</a></li>
            @if(!auth()->user())
          <li><a href="{{route('website.reg')}}">Sign Up</a></li>
          <li><a href="{{route('website.Login')}}">Sign In</a></li>
          @else(auth()->user())
           <li><a href="">{{ (auth()->user())->name }}</a></li>
          <li><a href="{{route('website.Logout')}}">Sign Out</a></li>

          @endif


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




































{{-- <!-- Navigation-->
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
                        <li class="nav-item"><a class="nav-link" href="{{route('website.circular')}}">Job Circular</a></li>
                        @if(!auth()->user())
                        <li class="nav-item"><a class="nav-link" href="{{route('website.reg')}}">SignUp</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('website.Login')}}">SignIn</a></li>
                        @else(auth()->user())
                        <li class="nav-item"><a class="nav-link" href="{{route('website.Logout')}}">Logout</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav> --}}
