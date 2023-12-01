<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Online Library Management System</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('user_panel/css/bootstrap.css')}}" />
  <!-- font awesome style -->
  <link href="{{asset('user_panel/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{asset('user_panel/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('user_panel/css/responsive.css')}}" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
             Online LMS
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link pl-lg-0" href="{{route('home')}}">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}"> About</a>
              </li>
              
              <li class="nav-item active">
                <a class="nav-link" href="{{route('contact')}}">Contact Us <span class="sr-only">(current)</span> </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('authentication.register.form')}}"> Register </a>
              </li>
            </ul>
        
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="heading_container ">
            <h2 class="">
              Contact Us
            </h2>
          </div>
          @if(session('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
        {{session('success')}}
        </div>
         @endif
          <form action="{{route('contact.store')}}" method="POST">
            @csrf
            <div>
              <input type="text" name="name" placeholder="Name" />
              @error('name')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div>
              <input type="email" name="email" placeholder="Email" />
              @error('email')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div>
              <input type="text" name="contact_number" placeholder="Pone Number" />
              @error('contact_number')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div>
              <input type="text" name="subject" placeholder="Subject" />
              @error('subject')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div>
              <input type="text" name="message" class="message-box" placeholder="Message" />
              @error('message')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="btn-box">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{asset('user_panel/images/contact-img.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_detail">
            <h4>
              About Us
            </h4>
            <p>
            Our Our system is designed to streamline access to an extensive collection of titles across genres, catering to diverse tastes and interests. </p>
            </p>
            
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Address
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                 Pakistan
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call 03043353402
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                BC210427108nka@vu.edu.pk

                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 info-col">
          <div class="info_contact">
            <h4>
              Newsletter
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
    
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
      Designed by <a href="https://intelliwaresoft.com/">Intelliwaresoft</a>

      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{asset('user_panel/js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('user_panel/js/bootstrap.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('user_panel/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>