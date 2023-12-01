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

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{route('home')}}">
            <span style="font-family: 'Mulish', sans-serif;">
            Online LMS
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link pl-lg-0" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}"> About</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
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
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Online Library
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                    Libraries are treasure troves of knowledge, offering a vast array of books catering to diverse tastes and interests. Whether you're drawn to classic literature, the latest bestsellers, informative non-fiction, or niche genres, libraries provide an enriching experience for all readers                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('user_panel/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                     Online Library
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                    Libraries are treasure troves of knowledge, offering a vast array of books catering to diverse tastes and interests. Whether you're drawn to classic literature, the latest bestsellers, informative non-fiction, or niche genres, libraries provide an enriching experience for all readers                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('user_panel/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                     Online Library
                    </h5>
                    <h1>
                      For All Your <br>
                      Reading Needs
                    </h1>
                    <p>
                    Libraries are treasure troves of knowledge, offering a vast array of books catering to diverse tastes and interests. Whether you're drawn to classic literature, the latest bestsellers, informative non-fiction, or niche genres, libraries provide an enriching experience for all readers                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('user_panel/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn_box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- catagory section -->

  <section class="catagory_section layout_padding">
    <div class="catagory_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Books Categories
          </h2>
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('user_panel/images/cat1.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Textbooks
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('user_panel/images/cat2.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Science
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('user_panel/images/cat3.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  History
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('user_panel/images/cat4.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Biography
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('user_panel/images/cat5.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Adventure
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <img src="{{asset('user_panel/images/cat6.png')}}" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  Fantasy
                </h5>
                <p>
                  fact that a reader will be distracted by the readable content of a page when looking at its layout.
                  The
                  point of using
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end catagory section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container ">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{asset('user_panel/images/about-img.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Our Online Library
              </h2>
            </div>
            <p>
            Our Online Library Management System is more than a platform; it's a gateway to a world of knowledge and literary exploration. We're committed to revolutionizing the way readers discover and engage with books. Our system is designed to streamline access to an extensive collection of titles across genres, catering to diverse tastes and interests. With intuitive features and user-friendly navigation, we aim to create a seamless experience for patrons, empowering them to delve into captivating stories and enrich their reading journey. Join us in embracing the magic of literature as we pave the way for a thriving community of passionate readers.            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

 

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