<!DOCTYPE html>
<html lang="en">

<head>
    <title>Health Coach</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href=" {{ asset('assetes/css/animate.css') }} ">

    <link rel="stylesheet" href="{{ asset('assetes/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetes/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assetes/css/magnific-popup.css"') }}">

    <link rel="stylesheet" href="{{ asset('assetes/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assetes/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('assetes/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assetes/css/style.css') }}">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col d-flex align-items-center">
                    <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="tel:+4733378901">+93
                            3004755515</a> or <span class="mailus">email us:</span> <a
                            href="mailto:emailsample@email.com">emailsample@email.com</a></p>
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Health<span>Hive<i class="fa fa-leaf"></i></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('coach') }}" class="nav-link">Dietitian</a></li>
                    <li class="nav-item"><a href="{{ route('pricing') }}" class="nav-link">Pricing</a></li>
                    <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="{{ route('success') }}" class="nav-link">Stories</a></li>
                    <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <!-- END nav -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assetes/images/bg_2.jpg') }}');"        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{ route('home') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>About us <i
                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-0 bread">About Us</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0"
                    style="background-image: url('{{ asset('assetes/images/coach-1.jpg') }}');">
                </div>
                <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                    <div class="heading-section mb-5">
                        <div class="pl-md-5">
                            <span class="subheading mb-2">Welcome to Healthcare</span>
                            <h2 class="mb-2">Hello! Health Care is a natural way of improving your health</h2>
                        </div>
                    </div>
                    <div class="pl-md-5">
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even
                            the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic life One day however a small line of blind text by the name of Lorem Ipsum
                            decided to leave for the far World of Grammar.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <div class="founder d-flex align-items-center mt-5">
                            <div class="img" style=" background-image: url('{{ asset('assetes/images/coach-1.jpg') }}');"></div>
                            <div class="text pl-3">
                                <h3 class="mb-0">Cythia Hunter</h3>
                                <span class="position">Personal Dietitian</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="consultation w-100 text-center px-4 px-md-5">
                        <h3 class="mb-4">Healthcare Services</h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <a href="#" class="btn-custom">See Services</a>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                    <div class="consultation consul w-100 px-4 px-md-5">
                        <div class="text-center">
                            <h3 class="mb-4">Free Consultation</h3>
                        </div>
                        <form action="#" class="appointment-form">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Services</option>
                                                    <option value="">Services 1</option>
                                                    <option value="">Services 2</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <div class="icon"><span class="ion-md-calendar"></span></div>
                                            <input type="text" class="form-control appointment_date"
                                                placeholder="Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <div class="icon"><span class="ion-ios-clock"></span></div>
                                            <input type="text" class="form-control appointment_time"
                                                placeholder="Time">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-4">
                                    <div class="form-group">
                                        <input type="submit" value="Appointment" class="btn btn-white py-2 px-4">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch">
                    <div class="consultation w-100 text-center px-4 px-md-5">
                        <h3 class="mb-4">Find A Health Expert</h3>
                        <p>A small river named Duden flows by their place and supplies</p>
                        <a href="#" class="btn-custom">Meet our health coach</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading mb-3">Testimonies</span>
                    <h2>Happy Clients &amp; Feedbacks</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url('{{ asset('assetes/images/person_1.jpg') }}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Racky Henderson</p>
                                    <span class="position">Father</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url('{{ asset('assetes/images/person_2.jpg') }}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Henry Dee</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url('{{ asset('assetes/images/person_3.jpg') }}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Mark Huff</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url('{{ asset('assetes/images/person_4.jpg') }}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Rodel Golez</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img" style="background-image: url('{{ asset('assetes/images/person_1.jpg')}}');">
                                </div>
                                <div class="text pl-4">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fa fa-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Ken Bosh</p>
                                    <span class="position">Businesswoman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-intro" style="background-image: url('{{ asset('assetes/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2>We Provide Free Health Care Consultation</h2>
                    <p class="mb-0">Your Health is Our Top Priority with Comprehensive, Affordable Health.</p>
                    <p></p>
                </div>
                <div class="col-md-3 d-flex align-items-center">
                    <p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Free Consutation</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="50">0</strong>
                        </div>
                        <div class="text">
                            <span>Years of Experienced</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="8500">0</strong>
                        </div>
                        <div class="text">
                            <span>Successful Entrepreneurs</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="378">0</strong>
                        </div>
                        <div class="text">
                            <span>Companies Founded</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="1200">0</strong>
                        </div>
                        <div class="text">
                            <span>Book, DVD's and Podcasts</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="container">

            <div class="row">
                <div class="col-md-4 col-lg-5">
                    <div class="row">
                        <div class="col-md-12 col-lg-8 mb-md-0 mb-4">
                            <h2 class="footer-heading"><a href="#" class="logo">Health<span>care</span></a>
                            </h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary
                                regelialia.</p>
                            <a href="#">read more <span class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-7">
                    <div class="row">
                        <div class="col-md-3 mb-md-0 mb-4 border-left">
                            <h2 class="footer-heading">Services</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-1 d-block">Balance Body</a></li>
                                <li><a href="#" class="py-1 d-block">Physical Activity</a></li>
                                <li><a href="#" class="py-1 d-block">Fitness Program</a></li>
                                <li><a href="#" class="py-1 d-block">Healthy Food</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-4 border-left">
                            <h2 class="footer-heading">About</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-1 d-block">Staff</a></li>
                                <li><a href="#" class="py-1 d-block">Team</a></li>
                                <li><a href="#" class="py-1 d-block">Careers</a></li>
                                <li><a href="#" class="py-1 d-block">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-4 border-left">
                            <h2 class="footer-heading">Resources</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-1 d-block">Security</a></li>
                                <li><a href="#" class="py-1 d-block">Global</a></li>
                                <li><a href="#" class="py-1 d-block">Charts</a></li>
                                <li><a href="#" class="py-1 d-block">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 mb-md-0 mb-4 border-left">
                            <h2 class="footer-heading">Social</h2>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-1 d-block">Facebook</a></li>
                                <li><a href="#" class="py-1 d-block">Twitter</a></li>
                                <li><a href="#" class="py-1 d-block">Instagram</a></li>
                                <li><a href="#" class="py-1 d-block">Google</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 col-lg-8">

                    <p class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved <i class="fa fa-heart"
                            aria-hidden="true"></i><a>Ahsan and
                            Haseeb</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
                <div class="col-md-6 col-lg-4 text-md-right">
                    <p class="mb-0 list-unstyled">
                        <a class="mr-md-3" href="#">Terms</a>
                        <a class="mr-md-3" href="#">Privacy</a>
                        <a class="mr-md-3" href="#">Compliances</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
{{-- {{ asset('assetes/css/style.css') }}" --}}

    <script src="{{ asset('assetes/js/jquery.min.js') }}" ></script>
    <script src="{{ asset('assetes/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('assetes/js/popper.min.js')}}"></script>
    <script src="{{ asset('assetes/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assetes/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('assetes/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assetes/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('assetes/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('assetes/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('assetes/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{ asset('assetes/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assetes/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assetes/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assetes/js/google-map.js')}}"></script>
    <script src="{{ asset('assetes/js/main.js')}}"></script>



</body>

</html>
