<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>SwiftShip Courier | Home</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <style>
      #pic{
        width:50px;
        height:50px;
        border-radius:200px;
      }
      .alert,.success{
        width: 400px;
        text-align: center;
        position: absolute;
        bottom:30px;
        left:50%;
        transform: translateX(-50%);
        color: whitesmoke;
        padding:8px 0;
      }
    .alert{ background-color: red;}
    .success{background-color: green;}

    </style>

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="assets/img/gallery/Swiftship courier service.png" height="100" width="120" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#services">Our Services</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#findUs">Find Us</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#contact">Contact Us</a></li>
            </ul>
            <div class="dropdown d-none d-lg-block">
              <!-- <button class="btn bg-soft-warning ms-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-warning"></i></button> -->
              <div class="dropdown-menu dropdown-menu-lg-end p-0 rounded" aria-labelledby="dropdownMenuButton1" style="top:55px">
                <form>
                  <input class="form-control border-200" type="search" placeholder="Search" aria-label="Search" style="background:#FDF1DF;" />
                </form>
              </div>
            </div><a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="register.php">Register</a>
          </div><a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="userlogin.php">Login</a>
            <!-- <form class="d-flex my-3 d-block d-lg-none">
              <input class="form-control me-2 border-200 bg-light" type="search" placeholder="Search" aria-label="Search" />
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav>
     
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/hero-header-bg.png);background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="assets/img/illustrations/swiftship.jpg" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-8">
              <h1 class="fw-normal fs-6 fs-xxl-7">A trusted provider of </h1>
              <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">courier services.</h1>
              <p class="fs-1 mb-5">We deliver your products safely to <br />your home in a reasonable time. </p>
              <!-- <a class="btn btn-primary me-2" href="#!" role="button">Get started<i class="fas fa-arrow-right ms-2"></i></a> -->
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-7" id="services" container-xl="container-xl">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-3">
              <h5 class="text-danger">SERVICES</h5>
              <h2>Our services for you</h2>
            </div>
          </div>
          <div class="row h-100 justify-content-center">
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/services-1.svg" alt="..." />
                    <h5 class="my-4">Business Services</h5>
                  </div>
                  <p>Offering home delivery around the city, where your products will be at your doorstep within 48-72 hours.</p>
                  <ul class="list-unstyled">
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Corporate goods
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Shipment
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Accesories
                    </li>
                  </ul>
                  <div class="text-center my-5">
                    <div class="d-grid">
                      <!-- <button class="btn btn-outline-danger" type="submit">Learn more </button> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/services-2.svg" alt="..." />
                    <h5 class="my-4">Statewide Services</h5>
                  </div>
                  <p>Offering home delivery around the city, where your products will be at your doorstep within 48-72 hours.</p>
                  <ul class="list-unstyled">
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Unlimited Bandwidth
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Encrypted Connection
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Yes Traffic Logs
                    </li>
                  </ul>
                  <div class="text-center my-5">
                    <div class="d-grid">
                      <!-- <button class="btn btn-danger hover-top btn-glow border-0" type="submit">Learn more</button> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card h-100 px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center pt-5"><img class="img-fluid" src="assets/img/icons/services-3.svg" alt="..." />
                    <h5 class="my-4">Personal Services</h5>
                  </div>
                  <p>You can trust us to safely deliver your most sensitive documents to the specific area in a short time.</p>
                  <ul class="list-unstyled">
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Unlimited Bandwidth
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Encrypted Connection
                    </li>
                    <li class="mb-2"><span class="me-2"><i class="fas fa-circle text-primary" style="font-size:.5rem"></i></span>Yes Traffic Logs
                    </li>
                  </ul>
                  <div class="text-center my-5">
                    <div class="d-grid">
                      <!-- <button class="btn btn-outline-danger" type="submit">Learn more </button> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-7 pb-0">

        <div class="container">
          <div class="row">
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="assets/img/icons/awards.png" alt="..." />
                <h1 class="text-primary mt-4">26+</h1>
                <h5 class="text-800">Awards won</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="assets/img/icons/states.png" alt="..." />
                <h1 class="text-primary mt-4">65+</h1>
                <h5 class="text-800">States covered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="assets/img/icons/clients.png" alt="..." />
                <h1 class="text-primary mt-4">689K+</h1>
                <h5 class="text-800">Happy clients</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="assets/img/icons/goods.png" alt="..." />
                <h1 class="text-primary mt-4">130M+</h1>
                <h5 class="text-800">Goods delivered</h5>
              </div>
            </div>
            <div class="col-6 col-lg mb-5">
              <div class="text-center"><img src="assets/img/icons/business.png" alt="..." />
                <h1 class="text-primary mt-4">130M+</h1>
                <h5 class="text-800">Business hours</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>

        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="card bg-dark text-white py-4 py-sm-0"><img class="w-100" src="assets/img/gallery/video.png" alt="video" />
                <div class="card-img-overlay bg-dark-gradient d-flex flex-column flex-center"><img src="assets/img/icons/play.png" width="80" alt="play" />
                  <h5 class="text-primary">FASTEST DELIVERY</h5>
                  <p class="text-center">You can get your valuable item in the fastest period of<br class="d-none d-sm-block" />time with safety. Because your emergency<br class="d-none d-sm-block" />is our first priority.</p><a class="stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"></a>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                      <div class="modal-content overflow-hidden">
                        <div class="modal-header p-0">
                          <div class="ratio ratio-16x9" id="exampleModalLabel">
                            <iframe src="https://www.youtube.com/embed/TlcP2aTOp-Q" title="YouTube video" allowfullscreen="allowfullscreen"></iframe>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-7">

        <div class="container-fluid">
          <div class="row flex-center">
            <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/quote.png);background-position:top;background-size:auto;margin-left:-270px;margin-top:-45px;">
            </div>
            <!--/.bg-holder-->

            <div class="col-md-8 col-lg-5 text-center">
              <h5 class="text-danger">TESTIMONIAL</h5>
              <h2>Our Awesome Clients</h2>
            </div>
          </div>
          <div class="carousel slide pt-6" id="carouselExampleDark" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">"I am extremely impressed with the quick and reliable service. My package arrived in perfect condition. Thank you!" </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="../images/img5.png" alt="" id="pic"/>
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Alice Thompson</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3"> "The customer support team went above and beyond to help me track my parcel. Great communication and service!"</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="../images/boy2.jpeg" alt="" id="pic" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">David Rodriguez</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">"Efficient delivery and the real-time tracking feature made it easy to plan my day. Will definitely use your service again."</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="../images/img1.png" alt="" id="pic" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium"> Emily Chen</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3"> "The courier was friendly and professional. My sensitive items were handled with care. Appreciate the attention to detail!"</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="../images/boy3.jpeg" alt="" id="pic" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">James Anderson</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3"> "Your sustainable packaging practices are commendable. It's great to see a courier service taking steps to reduce environmental impact."</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="../images/img2.png" alt="" id="pic" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Sophia Patel</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">"Had an urgent delivery, and your team ensured it reached the destination on time. Thank you for the excellent service!"</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="../images/boy4.jpg" alt="" id="pic" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium"> Daniel Brown</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row h-100">
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">"The website is user-friendly, making it easy to schedule and track deliveries. Impressed with the overall experience." </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="../images/img3.jpeg" alt="" id="pic" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium">Olivia Smith</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3">"I appreciate the flexibility in delivery options. Your service accommodated my schedule, making the process convenient." </p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="../images/img4.png" alt="" id="pic" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium"> Mia Kim</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card h-100 card-span p-3">
                      <div class="card-body">
                        <h5 class="mb-0 text-primary">Fantastic service!</h5>
                        <p class="card-text pt-3"> "Competitive pricing and reliable delivery. You've earned a repeat customer. Keep up the good work!"</p>
                        <div class="d-xl-flex justify-content-between align-items-center">
                          <div class="d-flex align-items-center mb-3"><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i><i class="fas fa-star text-primary me-1"></i></div>
                          <div class="d-flex align-items-center"><img class="img-fluid" src="../images/boy1.jpeg" alt="" id="pic" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-0 fs--1 text-1000 fw-medium"> Liam Johnson</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row px-3 px-md-0 mt-6">
              <div class="col-12 position-relative">
                <ol class="carousel-indicators">
                  <li class="active" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="contact">

        <div class="container">
        <h5 class="text-danger text-center mb-5">Contact US</h5>
          <div class="row justify-content-center">
          
            <div class="col-md-6 col-lg-5 col-xl-4 text-center">
           
              <img src="assets/img/illustrations/callback.png" alt="..." />
              <h5 class="text-danger">REQUEST A CALLBACK</h5>
              <h2>We will contact in the shortest time.</h2>
              <p class="text-muted">Monday to Friday, 9am-5pm.</p>
            </div>




            <div class="col-md-6 col-lg-5 col-xl-4">
              <form class="row" action="" method="POST">
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputName">Name</label>
                  <input class="form-control form-quriar-control" require id="inputName" name="name" type="text" placeholder="Name" />
                </div>
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputName">Subject</label>
                  <input class="form-control form-quriar-control" require id="inputSubject" name="subject" type="text" placeholder="Subject" />
                </div>
                <div class="mb-3">
                  <label class="form-label visually-hidden" for="inputEmail">Another label</label>
                  <input class="form-control form-quriar-control" require id="inputEmail" name="email" type="email" placeholder="Email" />
                </div>
                <div class="mb-5">
                  <label class="form-label visually-hidden" for="validationTextarea">Message</label>
                  <textarea class="form-control form-quriar-control is-invalid border-400" require id="validationTextarea"  name="msg"  placeholder="Message" style="height: 150px" required="required"></textarea>
                </div>
                <div class="d-grid">
                  <input class="btn btn-primary" type="submit" value="Send" name="send"> <br><br>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php
         
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send']))
{
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$msg = $_POST['msg'];



//Load Composer's autoloader
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mishalfazal947@gmail.com';                     //SMTP username
    $mail->Password   = 'qoad rdtw wdtz uenp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mishalfazal947@gmail.com', 'Contact Form');
    $mail->addAddress('sadiajamil70@gmail.com', 'Courier Management system');     //Add a recipient


    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Form';
    $mail->Body    = "Sender Name - $name <br> Sender Subject - $subject <br> Sender Email - $email <br> Message - $msg";
    

    $mail->send();
    echo "<div class='success'>Message has been sent!</div>";
}   catch (Exception $e) {
    echo "<div class='alert'>Message Could't sent!</div>: {$mail->ErrorInfo}";
}
  }

        ?>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section id="findUs">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 mb-6 text-center">
              <h5 class="text-danger">FIND US</h5>
              <h2>Access us easily</h2>
            </div>
            <div class="col-12">
              <div class="card card-span rounded-2 mb-3">
                <div class="row">
                  <div class="col-md-6 col-lg-7 d-flex"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d115729.09424912727!2d67.065264!3d24.981958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb340e584b891c3%3A0x29b2cbc198ba2dbd!2sAptech%20Computer%20Education%20North%20Karachi%20Center!5e0!3m2!1sen!2sus!4v1706967395498!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                  <div class="col-md-6 col-lg-5 d-flex flex-center">
                    <div class="card-body">
                      <h5>Contact with us</h5>
                      <p class="text-700 my-4"> <i class="fas fa-map-marker-alt text-warning me-3"></i><span>A 563, Main Shahrah-e-Usman, Sector 11-A Sector 11 A North Karachi Twp, Karachi, Karachi City, Sindh 75850, Pakistan</span></p>
                      <p><i class="fas fa-phone-alt text-warning me-3"></i><span class="text-700">Monday - Friday: 10 am - 10pm<br/><span class="ps-4">Sunday: 11 am - 9pm  </span></span></p>
                      <p><i class="fas fa-envelope text-warning me-3"> </i><a class="text-700" href="mailto:vctung@outlook.com"> info@swiftshipcourierservice.com</a></p>
                      <ul class="list-unstyled list-inline mt-5">
                        <li class="list-inline-item"><a class="text-decoration-none" href="https://www.facebook.com/APTECH.Pakistan"><i class="fab fa-facebook-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter-square fs-2"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-primary px-5" type="submit"><i class="fas fa-phone-alt me-2"></i><a class="text-light" href="tel:123-456789">Call us to delivery 123-456789</a></button>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <!-- <section class="bg-1000">

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="fw-bold text-white">Get an update every week</h2>
              <p class="text-300">We ensure that your product is delivered in the safest possible<br />manner, at the correct location, at the right time.</p>
            </div>
            <div class="col-lg-6">
              <h5 class="text-primary mb-3">SUBSCRIBE TO NEWSLETTER </h5>
              <form class="row gx-2 gy-2 align-items-center">
                <div class="col">
                  <div class="input-group-icon">
                    <label class="visually-hidden" for="inputEmailCta">Address</label>
                    <input class="form-control input-box form-quriar-control text-light" id="inputEmailCta" type="email" placeholder="Enter your mail" />
                  </div>
                </div>
                <div class="d-grid gap-3 col-sm-auto">
                  <button class="btn btn-danger" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section> -->
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-900 pb-0 pt-5">

        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none" href="#"><img src="assets/img/gallery/Swiftship courier service.png" height="100" width="100" alt="" /></a>
              <p class="text-500 my-4">The most trusted Courier<br />company in your area.</p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Other links </h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-500" href="login.php">Admin Login</a></li>
                <li class="lh-lg"><a class="text-500" href="blogs.php">Blogs</a></li>
                <li class="lh-lg"><a class="text-500" href="about_us.php">About Us</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0 bg-1000">

        <div class="container">
          <div class="row justify-content-md-between justify-content-evenly py-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Your Company, 2021</p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 my-2 text-center text-md-end text-200"> Made with&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#F95C19" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a class="fw-bold text-primary" href="https://aptech-education.com.pk/" target="_blank">Aptech North Karachi </a>
              </p>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  </body>

</html>