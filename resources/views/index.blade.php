<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from templates.hibotheme.com/motoz/default/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 13:15:59 GMT -->
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
        <link rel="icon" type="image/png" href="assets/img/favicon.webp">
    </head>

    <body>

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
        <header class="header-wrap header-three">
            <div class="header-top">
                <div class="container">+216 99 655 495

                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-9">
                            <div class="header-top-left">
                                <ul class="contact-info list-style">
                                    <li>
                                        <span>Téléphone:</span><a href="tel:+216 99 655 495" >+216 99 655 495
                                        </a>
                                    </li>
                                    <li>
                                       <span> Horaires d'ouvertures::</span>Lun to Dim : 8:00am to 6:00pm
                                    </li>
                                    <li>
                                        <span>Emplacement
                                            :</span>Rue du lac d'Annecy Lac 1
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-3">
                            <div class="header-top-right">
                                @auth


                                <div class="user-menu">
                                    <i class="flaticon-user-1"></i>
                                    <a href="javascript:void(0)">{{Auth::user()->name}}</a>
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class='bx bx-log-out text-muted font-size-18 align-middle me-1'></i>
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

                                @endauth






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
                        <a class="navbar-brand" href="index.html">
                            <img class="logo-light" src="assets/img/city/logo.png" width="160" height="160"  alt="logo">

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
                                            <a href="index-3.html" class="nav-link active">Accueil</a>
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
                            <div class="other-options md-none">
                                @if(auth()->user()?->role == 'passager')
                                <div class="option-item">

                                    <a href= "{{url('/listereservationpa')}}"class="btn-two">demande </a>

                                        <a href="{{url('/res')}}" class="btn-two">Reservation</a>

                                </div>
                                @endif



                            </div>
                            <div class="other-options md-none">
                                @if(auth()->user()?->role == 'conducteur')
                                <div class="option-item">

                                    <a href= "{{url('/listereservation')}}"class="btn-two">listereservation </a>

                                        <a href="{{url('/listecontactconducteur')}}" class="btn-two">liste contact</a>
                                        <a href="{{url('/listerecherche')}}" class="btn-two">trajet</a>

                                </div>
                                @endif



                            </div>
                        </div>
                    </nav>
                    <div class="search-area">
                        <input type="search" placeholder="Search Here..">
                        <button type="submit"><i class="ri-search-line"></i></button>
                    </div>
                    <div class="mobile-bar-wrap">
                        <button class="searchbtn d-lg-none" type="button"><i class="flaticon-search-interface-symbol"></i></button>
                        <div class="mobile-menu d-lg-none">
                            <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Header Section End -->

        <!-- Hero Section Start -->
        <div class="hero-wrap hero-three bg-f">
            <img src="{{url('assets/img/hero/hero-shape-5.webp')}}" alt="Image" class="hero-shape-one moveHorizontal">
            <img src="{{url('assets/img/hero/hero-shape-6.webp')}}" alt="Image" class="hero-shape-two animationFramesTwo">
            <img src="assets/img/hero/hero-shape-7.webp" alt="Image" class="hero-shape-three bounce">
            <img src="assets/img/hero/hero-shape-8.webp" alt="Image" class="hero-shape-four bounce">
            <img src="assets/img/hero/hero-bg-shape.webp" alt="Image" class="hero-bg-shape">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="hero-content">
                            <span data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200"></span>
                            <h1 data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300"></h1>
                            <h1>
                            Fithneyti</h1>
                            <div class="hero-btn">
                                <a href="{{url('/voiture')}}" class="btn-two" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="500">Details voiture</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="hero-img-wrap">
                            <div class="hero-feature-box">
                                <img src="assets/img/hero/hero-feature-border-2.webp" alt="Image" class="hero-feature-border">
                                <div class="hero-feature-item">
                                    <div class="hero-feature-icon">
                                        <img src="assets/img/hero/hero-logo-1.webp" alt="Image">
                                    </div>
                                    <div class="hero-feature-info">
                                        <ul class="ratings list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                        <h4>Rentoor Car</h4>
                                    </div>
                                </div>
                                <div class="hero-feature-item">
                                    <div class="hero-feature-icon">
                                        <img src="assets/img/hero/hero-logo-2.webp" alt="Image">
                                    </div>
                                    <div class="hero-feature-info">
                                        <ul class="ratings list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                        <h4>Rentoor Car</h4>
                                    </div>
                                </div>
                                <div class="hero-feature-item">
                                    <div class="hero-feature-icon">
                                        <img src="assets/img/hero/hero-logo-3.webp" alt="Image">
                                    </div>
                                    <div class="hero-feature-info">
                                        <ul class="ratings list-style">
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                            <li><i class="ri-star-fill"></i></li>
                                        </ul>
                                        <h4>Rentoor Car</h4>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/img/hero/hero-img-5.webp" alt="Image" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section End -->



        <!-- Counter Section Start -->
        <div class="container pt-100 pb-75">
            <div class="counter-card-wrap">
                <div class="counter-card">
                    <div class="counter-icon">
                        <i class="flaticon-car"></i>
                    </div>
                    <div class="counter-info">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="150"></span><span class="target">+</span>
                        </h2>
                        <p>Travailleurs d'équipe
                        </p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="counter-icon">
                        <i class="flaticon-review"></i>
                    </div>
                    <div class="counter-info">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="600"></span><span class="target">+</span>
                        </h2>
                        <p>Clients de confiance
                        </p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="counter-icon">
                        <i class="flaticon-hand-gesture"></i>
                    </div>
                    <div class="counter-info">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="120"></span><span class="target">+</span>
                        </h2>
                        <p>Bureaux dans les pays</p>
                    </div>
                </div>
                <div class="counter-card">
                    <div class="counter-icon">
                        <i class="flaticon-drive-thru"></i>
                    </div>
                    <div class="counter-info">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="480"></span><span class="target">+</span>
                        </h2>
                        <p>Récompenses de l'entreprise</p>
                    </div>
                </div>
            </div>
        </div>

            <center>
            <span data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200"></span>

</center>            </div><!-- Section Header -->

<div class="row" style=

			background-image: url("assets/img/blog/bg_03.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		>
<center>
</center>
        <!-- Counter Section End -->

        <!-- Product Section Start -->
        <div class="product-wrap pb-70">
            <video width="1500" height="1000" controls>
                <source src=”http://techslides.com/demos/sample-videos/small.ogv” type=video/ogg> <source src="assets/img/about/aa.mp4">type=video/mp4>
              </video>
          </center>
        </div>
        <!-- Product Section End -->

        <!-- About Section Start -->
        <section class="about-wrap ptb-100 bg_ash">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                        <div class="about-img-wrap">
                            <img src="assets/img/about/about-shape-1.webp" alt="Image" class="about-shape-one bounce">
                            <img src="assets/img/about/about-img-1.webp" alt="Image" class="about-img-one">
                            <img src="assets/img/about/about-img-2.webp" alt="Image" class="about-img-two">
                            <div class="about-promo-box">
                                <img src="assets/img/icon/about-icon.svg" alt="Image">
                                <h2><span>30+</span>Années d'expérience</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                        <div class="about-content">
                            <div class="content-title-two">
                                <h2>Voyagez en toute confiance</h2>
                                <p>Nous prenons le temps qu’il faut pour connaître nos membres et nos compagnies de bus partenaires. Nous vérifions les avis, les profils et les pièces d’identité. Vous savez donc avec qui vous allez voyager pour réserver en toute confiance sur notre plateforme sécurisée..</p>
                            </div>
                            <div class="progressbar-wrap">
                                <div class="progress-bar" data-percentage="85%">
                                    <h4 class="progress-title-holder clearfix">
                                        <span class="progress-title">Sécurisé
                                        </span>
                                        <span class="progress-number-wrapper">
                                            <span class="progress-number-mark">
                                                <span class="percent"></span>
                                            </span>
                                        </span>
                                    </h4>
                                    <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div>
                                </div>
                                <div class="progress-bar" data-percentage="72%">
                                    <h4 class="progress-title-holder clearfix">
                                        <span class="progress-title">Agents de confiance
                                        </span>
                                        <span class="progress-number-wrapper">
                                            <span class="progress-number-mark">
                                                <span class="percent"></span>
                                            </span>
                                        </span>
                                    </h4>
                                    <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div>
                                </div>
                                <div class="progress-bar" data-percentage="80%">
                                    <h4 class="progress-title-holder clearfix">
                                        <span class="progress-title">Assistance gratuite
                                        </span>
                                        <span class="progress-number-wrapper">
                                            <span class="progress-number-mark">
                                                <span class="percent"></span>
                                            </span>
                                        </span>
                                    </h4>
                                    <div class="progress-content-outter">
                                        <div class="progress-content"></div>
                                    </div>
                                </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <!-- Category Section Start -->
        <div class="category-wrap ptb-100">
            <div class="container">
                <div class="section-title-two text-center mb-30">
                    <span>Category</span>
                    <h2>
                        Trouvez la meilleure voiture pour vous</h2>
                </div>
                <div class="category-slider-one owl-carousel">
                    <div class="category-card-three">
                        <div class="cat-img">
                            <img src="assets/img/category/cat-17.webp" alt="Image">
                        </div>
                    </div>
                    <div class="category-card-three">
                        <div class="cat-img">
                            <img src="assets/img/category/cat-16.webp" alt="Image">
                        </div>
                    </div>
                    <div class="category-card-three">
                        <div class="cat-img">
                            <img src="assets/img/category/cat-15.webp" alt="Image">
                        </div>
                    </div>
                    <div class="category-card-three">
                        <div class="cat-img">
                            <img src="assets/img/category/cat-18.webp" alt="Image">
                        </div>
                    </div>
                    <div class="category-card-three">
                        <div class="cat-img">
                            <img src="assets/img/category/cat-20.webp" alt="Image">
                        </div>
                    </div>
                    <div class="category-card-three">
                        <div class="cat-img">
                            <img src="assets/img/category/cat-19.webp" alt="Image">
                        </div>
                    </div>
                    <div class="category-card-three">
                        <div class="cat-img">
                            <img src="assets/img/category/cat-21.webp" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category Section End -->

        <!-- Partner Section Start -->
        <div class="bg_ash ptb-100">
            <div class="container">
                <div class="partner-slider owl-carousel">
                <div class="partner-logo">
                    <img src="assets/img/partners/partner-1.webp" alt="Image">
                </div>
                <div class="partner-logo">
                    <img src="assets/img/partners/partner-2.webp" alt="Image">
                </div>
                <div class="partner-logo">
                    <img src="assets/img/partners/partner-3.webp" alt="Image">
                </div>
                <div class="partner-logo">
                    <img src="assets/img/partners/partner-4.webp" alt="Image">
                </div>
                <div class="partner-logo">
                    <img src="assets/img/partners/partner-5.webp" alt="Image">
                </div>
                <div class="partner-logo">
                    <img src="assets/img/partners/partner-6.webp" alt="Image">
                </div>
                </div>
            </div>
        </div>
        <!-- Partner Section End -->

        <!-- Call To Action Section Start -->
        <div class="cta-wrap-three bg-f ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 col-md-8 order-xl-1 order-lg-1 order-md-1 order-2">
                        <div class="cta-content">
                            <div class="section-title-two">
                                <h2>Nous simplifions la recherche de la bonne voiture
                                </h2>

                            </div>
                            <div class="cta-btn">


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-4 order-xl-2 order-lg-2 order-md-2 order-1">
                        <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=BJoVxpAZb_E">
                            <ion-icon name="play"></ion-icon>
                            <span class="ripple"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action Section End -->

        <!-- Service Section Start -->
        <div class="service-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="section-title-two text-center mb-40">
                        <h2>Services associés
                            Services que nous offrons pour vous</h2>
                    </div>
                </div>
                <div class="service-slider owl-carousel">
                    <div class="service-card">
                        <div class="service-img">
                            <img src="assets/img/services/service-1.webp" alt="Image">
                        </div>
                        <div class="service-info">
                            <span class="service-icon">
                                <i class="flaticon-van"></i>
                            </span>
                            <h3><a href="service-details.html">Vos trajets préférés à petits prix</a></h3>
                            <p>

                                Où que vous alliez, en bus ou en covoiturage, trouvez le trajet idéal parmi notre large choix de destinations à petits prix..</p>
                            <a href="service-details.html" class="link-one">Read More</a>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-img">
                            <img src="assets/img/services/service-2.webp" alt="Image">
                        </div>
                        <div class="service-info">
                            <span class="service-icon">
                                <i class="flaticon-hand-gesture"></i>
                            </span>
                            <h3><a href="service-details.html">
                                Accompagnement
                                personnalisé
                               </a></h3>
                            <p> Déployez et pérennisez la
                                pratique du covoiturage..</p>
                            <a href="service-details.html" class="link-one">en savoir plus</a>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-img">
                            <img src="assets/img/services/service-3.webp" alt="Image">
                        </div>
                        <div class="service-info">
                            <span class="service-icon">
                                <i class="flaticon-technical-support"></i>
                            </span>
                            <h3><a href="service-details.html">                                Accès Premium
                            </a></h3>
                            <p>
                                Offrez à vos collaborateurs une
                                expérience de covoiturage
                                optimale.</p>
                            <a href="service-details.html" class="link-one">en savoir plus</a>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-img">
                            <img src="assets/img/services/service-4.webp" alt="Image">
                        </div>
                        <div class="service-info">
                            <span class="service-icon">
                                <i class="flaticon-drive-thru"></i>
                            </span>
                            <h3><a href="service-details.html">Brake Checkup</a></h3>
                            <p>Lorem Ipsum has been the industry sta dummy text ever since the dolor when an unknown printer took a galley of type dolore magna aliqua.</p>
                            <a href="service-details.html" class="link-one">en savoir plus</a>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-img">
                            <img src="assets/img/services/service-5.webp" alt="Image">
                        </div>
                        <div class="service-info">
                            <span class="service-icon">
                                <i class="flaticon-car"></i>
                            </span>
                            <h3><a href="service-details.html">Securiy Inspection</a></h3>
                            <p>Lorem Ipsum has been the industry sta dummy text ever since the dolor when an unknown printer took a galley of type dolore magna aliqua.</p>
                            <a href="service-details.html" class="link-one">Read More</a>
                        </div>
                    </div>
                    <div class="service-card">
                        <div class="service-img">
                            <img src="assets/img/services/service-6.webp" alt="Image">
                        </div>
                        <div class="service-info">
                            <span class="service-icon">
                                <i class="flaticon-gear-1"></i>
                            </span>
                            <h3><a href="service-details.html">Engine Upgrades</a></h3>
                            <p>Lorem Ipsum has been the industry sta dummy text ever since the dolor when an unknown printer took a galley of type dolore magna aliqua.</p>
                            <a href="service-details.html" class="link-one">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Section End -->

        <!-- Filter Product Section Start -->

        </div>
        <!-- Filter Product Section End -->

        <!-- Listing Place Section Start -->
        <div class="listing-wrap pt-100 pb-75 bg_ash">
            <div class="container">
                <div class="section-title-two text-center mb-40">
                    <h2>DES IDÉES DE DESTINATIONS ?</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="listing-card-one">
                            <img src="assets/img/city/332.jpg" alt="Image"width="1000" height="200">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="listing-card-one">
                            <img src="assets/img/city/332.jpg" alt="Image"width="1000" height="200">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="listing-card-one">
                            <img src="assets/img/city/nh.jpg" alt="Image" width="1000" height="200">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="listing-card-one">
                            <img src="assets/img/city/65.jpg" alt="Image" width="1000" height="200">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="listing-card-one">
                            <img src="assets/img/city/10.jpg" alt="Image" width="1000" height="2000">

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="listing-card-one">
                            <img src="assets/img/city/88.jpg" alt="Image" width="1000" height="200">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Listing Place Section End -->

        <!-- Testimonial Section Start -->
        <div class="testimonial-wrap ptb-100">
            <div class="container">
                <div class="section-title-two text-center mb-30">
                    <h2>Profitez pleinement des avantages du covoiturage</h2>
                </div>
                <div class="testimonial-slider-three owl-carousel">
                    <div class="testimonial-card-three">
                        <div class="client-info-wrap">
                            <div >
                                <img src="assets/img/clients/v.jpg" alt="Image">
                            </div>
                            <div class="client-info">
                                <h3>Solution économique</h3>
                            </div>
                        </div>
                        <p class="client-quote">“Le partage des frais de voyage permet de voyager à petit prix.”</p>
                        <ul class="ratings list-style">
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                            <li><i class="ri-star-fill"></i></li>
                        </ul>
                    </div>
                    <div class="testimonial-card-three">
                        <div class="client-info-area">
                            <div class="client-info-wrap">
                                <div class>
                                    <img src="assets/img/clients/22.png" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>Solution écologique et pratique</h3>
                                </div>
                            </div>
                            <p class="client-quote">“
                                La réduction du trafic routier permet de fluidifier la circulation et réduire les émissions de CO2, et également de pouvoir voyager à n'importe quel moment et lieu.”</p>
                            <ul class="ratings list-style">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="testimonial-card-three">
                        <div class="client-info-area">
                            <div class="client-info-wrap">
                                <div >
                                    <img src="assets/img/clients/7.jpg" alt="Image">
                                </div>
                                <div class="client-info">
                                    <h3>sécurisée</h3>
                                </div>
                            </div>
                            <p class="client-quote">“
                                Le site propose une connexion fiable et sécurisée et respecte la confidentialité des utilisateurs.”</p>
                            <ul class="ratings list-style">
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                                <li><i class="ri-star-fill"></i></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Testimonial Section End -->

        <!-- FAQ Section start -->
        <section class="faq-wrap ptb-100 bg_ash">
            <img src="assets/img/faq-shape-1.webp" alt="Image" class="faq-shape-one bounce">
            <img src="assets/img/faq-shape-2.webp" alt="Image" class="faq-shape-two animationFramesTwo">
            <div class="container">
                <div class="row align-items-center gx-5">
                    <div class="col-lg-6">
                        <div class="faq-img-wrap">
                            <img src="assets/img/city/faq-img-1.webp" alt="Image" class="faq-img-one">
                            <img src="assets/img/city/faq-img-2.webp" alt="Image" class="faq-img-two">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="content-title-two mb-30">

                                <h2>COMMENT ÇA MARCHE ?</h2>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">


                                            <img src="assets/img/city/images.png" alt="Image" class="faq-img-two" height="100" width="90">
                                            Créer votre profil
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">

                                            <img src="assets/img/city/2.png" alt="Image" class="faq-img-two" height="100" width="90">
                                            Cherche un covoiturage
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse "
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">

                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">

                                            <img src="assets/img/city/11.png" alt="Image" class="faq-img-two" height="100" width="90">
                                            Le covoiturage en toute liberté
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">

                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingfour">
                                        <img src="assets/img/city/112.png" alt="Image" class="faq-img-two"  height="100" width="90">
                                            Partager les frais du voyage

                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse "
                                        aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ Section End -->

        <!-- Blog Section Start -->

        <!-- Blog Section End -->

        <!-- App Section Start -->
        <div class="app-wrap">

        <footer class="footer-wrap">
            <div class="container">
                <div class="row pt-100 pb-75">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <a href="index.html" class="footer-logo">
                                <img src="assets/img/city/logo.png" alt="Image">
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

                                <li>

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
                            <h3 class="footer-widget-title">Inscription
                            <p>Abonnez-vous à notre pour obtenir nos dernières mises à jour et nouvelles !</p>
                            <form action="#" class="newsletter-form">
                                <div class="form-group">
                                    <input type="email" placeholder="Enter Email Address">
                                    <button type="submit"><ion-icon name="paper-plane-outline"></ion-icon></button>
                                </div>
                            </form>
                            <div class="social-link">
                                <h6>Suivez-nous:</h6>
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
        <!-- Footer Section End -->

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







        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src='../../../unpkg.com/ionicons%405.0.0/dist/ionicons.js'></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/fancybox.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/tweenmax.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>


</html>
