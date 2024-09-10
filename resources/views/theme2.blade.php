<!DOCTYPE html>
<html lang="zxx">


<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon_motoz.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fancybox.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/dark-theme.css')}}">

        <title></title>
        <link rel="icon" type="image/png" href="aidesets/img/favicon.webp">
    </head>

    <body>

    <div class="body_overlay"></div>

<!--Preloader starts-->
<div class="loader js-preloader">
    <svg class="car" width="102" height="40" xmlns="http://www.w3.org/2000/svg">
    <g transform="translate(2 1)" stroke="#E70D3D" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
        <path class="car__body" d="M47.293 2.375C52.927.792 54.017.805 54.017.805c2.613-.445 6.838-.337 9.42.237l8.381 1.863c2.59.576 6.164 2.606 7.98 4.531l6.348 6.732 6.245 1.877c3.098.508 5.609 3.431 5.609 6.507v4.206c0 .29-2.536 4.189-5.687 4.189H36.808c-2.655 0-4.34-2.1-3.688-4.67 0 0 3.71-19.944 14.173-23.902zM36.5 15.5h54.01" stroke-width="2"/>
        <ellipse class="car__wheel--left" stroke-width="2.2" fill="#FFF" cx="83.493" cy="30.25" rx="6.922" ry="6.808"/>
        <ellipse class="car__wheel--right" stroke-width="2.2" fill="#FFF" cx="46.511" cy="30.25" rx="6.922" ry="6.808"/>
        <path class="car__line car__line--top" d="M22.5 16.5H2.475" stroke-width="2"/>
        <path class="car__line car__line--middle" d="M20.5 23.5H.4755" stroke-width="2"/>
        <path class="car__line car__line--bottom" d="M25.5 9.5h-19" stroke-width="2"/>
    </g>
    </svg>
</div>
<!--Preloader ends-->

<!-- Theme Switcher Start -->
<div class="switch-theme-mode">
    <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
    </label>
</div>
<!-- Theme Switcher End -->

<!-- Header Section Start -->
<header class="header-wrap header-one">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="header-top-left">
                        <ul class="contact-info list-style">
                            <li>
                                <span>Phone:</span><a href="tel:87896744455">+216 99 655 495
                                </a>
                            </li>
                            <li>
                               <span> Opening Hours:</span>Mon to Fri : 9:00am to 6:00pm
                            </li>
                            <li>
                                <span>Location:</span>

                                Rue du lac d'Annecy Lac 1
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3">
                    <div class="header-top-right">
                        @auth

                        <div class="user-menu">
                            <i class="flaticon-user-1"></i>
                            <a href="{{url('/my_account')}}">{{Auth::user()->name}}</a>
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>

                        @else

                        <div class="user-menu">
                            <i class="flaticon-user-1"></i>
                            <a href="{{url('/my_account')}}">Login</a>
                            <a href="{{url('/my_account')}}">Register</a>
                        </div>
                        @endif

                        <div class="social-link">
                            <span></span>
                            <ul class="social-profile list-style">
                                <li>
                                    <a href="https://facebook.com/">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/">
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img class="logo-light" src="{{asset('assets/img/city/logo.png')}}" width="60" height="30"  alt="logo">
                </a>
                <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                    <div class="menu-close d-lg-none">
                        <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                    </div>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item has-child">
                            <a href="#" class="nav-link active">
                                Accueil
                                <i class="flaticon-down-arrow"></i>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="nav-item">
                                    <a href="{{url('/')}}" class="nav-link active">Accueil</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-child">
                            <a href="#" class="nav-link">
                                Pages
                                <i class="flaticon-down-arrow"></i>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="nav-item">
                                    <a href="{{url('/about')}}" class="nav-link">About </a>
                                </li>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{url('/chauffeur')}}" class="nav-link">chaufffeur</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/voiture')}}"class="nav-link">voiture</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/trajet')}}" class="nav-link">trajet</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/recherche')}}" class="nav-link">Detail</a>
                                        </li>
                                        @if(auth()->user()?->role == 'passager')
                                        <li class="nav-item">
                                            <a href="{{url('/reclamation')}}" class="nav-link">Reclamation</a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/service')}}" class="nav-link"> Services</a>                                                Services
                                        <i class="flaticon-down-arrow"></i>
                                    </a>

                                </li>







                            </ul>
                        </li>


                        </li>
                        <li class="nav-item">
                            <a href="{{url('/contact')}}" class="nav-link">Contact</a>
                        </li>

                    </ul>



                        <div class="option-item">
                            <button class="sidebar-btn"><i class="flaticon-menu"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="mobile-bar-wrap">
                <a href="compare-2.html" class="compare-btn d-lg-none"><i class="flaticon-compare"></i><span class="cart-count">10</span></a>
                <a class="shopcart  d-lg-none" href="cart.html"><i class="flaticon-shopping-bag-1"></i><span class="cart-count">1</span></a>
                <button class="sidebar-btn  d-lg-none"><i class="flaticon-menu"></i></button>
                <div class="mobile-menu d-lg-none">
                    <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('abc')
<div class="sidebar-popup">
            <div class="sidebar-popup-wrap">
                <button type="button" class="close-popup"> <i class="ri-close-fill"></i> </button>
                <div class="comp-logo">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('assets/img/blog/blog-13.webp')}}" alt="Image">
                    </a>
                </div>
                <p class="comp-desc">Le covoiturage est l'utilisation conjointe et organisée d'une voiture automobile, par un conducteur non professionnel et un ou plusieurs tiers passagers, dans le but d'effectuer un trajet commun..</p>
                <ul class="contact-box list-style">
                    <li>
                        <b>Addresse:</b>
                        <p>
                            Appartement 1-2 block C immeuble Xerox
                            Rue du lac d'Annecy Lac 1</p>
                    </li>
                    <li>
                        <b>Téléphone:</b>
                        <a href="tel:87896744455">+216 99 655 495</a>
                    </li>
                    <li>
                        <b>Email:</b>
                        <p>
                            contact@zahou-tech.com</p>
                    </li>
                </ul>
                <ul class="social-profile list-style">
                    <li>
                        <a target="_blank" href="https://facebook.com/">
                            <i class="ri-facebook-line"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com/">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://linkedin.com/">
                            <i class="ri-linkedin-line"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://instagram.com/">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>
                </ul>
                <div class="comp-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd"></iframe>
                </div>
            </div>
        </div>
        <footer class="footer-wrap">
            <div class="container">
                <div class="row pt-100 pb-75">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <a href="{{asset('/')}}" class="footer-logo">
                                <img src="{{ asset('assets/img/city/logo.png')}}" alt="Image">
                            </a>
                            <ul class="contact-info list-style">
                                <li>
                                    <ion-icon name="location"></ion-icon>
                                    <h6>Location</h6>
                                    <p>Appartement 1-2 block C immeuble Xerox
                                        Rue du lac d'Annecy Lac 1</p>
                                </li>
                                <li>
                                    <ion-icon name="mail"></ion-icon>
                                    <h6>Email</h6>
<p>contact@zahou-tech.com</p>                                </li>
                                <li>
                                    <ion-icon name="call"></ion-icon>
                                    <h6>Télephone</h6>
                                    <a href="tel:098765432150">
                                        +216 99 655 495</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Liens clients
                            </h3>
                            <ul class="footer-menu list-style">




                                <li class="nav-item">
                                    <a href="{{url('/service')}}" class="nav-link">service</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('/about')}}" class="nav-link">about</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Liens rapides
                            </h3>
                            <ul class="footer-menu list-style">

                                <li class="nav-item">
                                    <a href="{{url('/voiture')}}" class="nav-link">voiture</a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{url('/chauffeur')}}" class="nav-link">chauffeur</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Inscription</h3>
                            <p>Abonnez-vous à notre pour obtenir nos dernières mises à jour et nouvelles !</p>
                            <form action="#" class="newsletter-form">
                                <div class="form-group">
                                    <input type="email" placeholder="Enter Email Address">
                                    <button type="submit"><ion-icon name="paper-plane-outline"></ion-icon></button>
                                </div>
                            </form>
                            <div class="social-link">
                                <h6></h6>
                                <ul class="social-profile style1 list-style">
                                    <li>
                                        <a href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://instagram.com/">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Back-to-top button Start -->
        <div class="paginacontainer">
            <div class="progress-wrap bounce">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
                </svg>
            </div>
        </div>
        <!-- Back-to-top button End -->

        <!-- Link of JS files -->

        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/form-validator.min.js')}}"></script>

        <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src='../../../unpkg.com/ionicons%405.0.0/dist/ionicons.js'></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/odometer.min.js')}}"></script>
        <script src="{{asset('assets/js/fancybox.js')}}"></script>
        <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
        <script src="{{asset('assets/js/tweenmax.min.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>


</html>
