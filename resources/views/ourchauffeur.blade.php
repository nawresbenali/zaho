<!DOCTYPE html>
<html lang="zxx">

    
<!-- Mirrored from templates.hibotheme.com/motoz/default/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 13:17:05 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/flaticon_motoz.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <link rel="stylesheet" href="assets/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/fancybox.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/dark-theme.css">
        <title>Motoz - Car Dealer & Automotive HTML Template</title>
        <link rel="icon" type="image/png" href="assets/img/favicon.webp">
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
       
     
        <!-- Header Section End -->  

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-12 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Our team Members</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li>Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Team Section Start -->
        <section class="team-wrap ptb-100">
            <div class="container">
                <div class="section-title-two text-center mb-30">
                    <span>Our Team</span>
                    <h2>Meet Our Team Members</h2>
                 </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                        @foreach ($donnee as $donnee)
                        <div class="team-card">
                        <img src="storage/{{$donnee->image}}" >
                            <div class="team-info">
                                <h3>{{$donnee->nomde}}</h3>
                                <span>CEO & Director</span>
                                <ul class="social-profile list-style">
                                    <li>
                                        <a target="_blank" href="https://facebook.com/">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://pinterest.com/">
                                            <i class="ri-pinterest-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://twitter.com/">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://instagram.com/">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                
                 
                </div>
                <ul class="page-nav list-style">
                    <li><a href="team.html"><i class="flaticon-left-arrow"></i></a></li>
                    <li><a class="active" href="team.html">1</a></li>
                    <li><a href="team.html">2</a></li>
                    <li><a href="team.html">3</a></li>
                    <li><a href="team.html"><i class="flaticon-next"></i></a></li>
                </ul>
            </div>
            @endforeach
        </section>
        <!-- Team Section End -->

        <!-- App Section Start -->
        <div class="app-wrap">
            <div class="container">
                <div class="app-box bg_ash">
                    <img src="assets/img/app/app-shape-1.webp" alt="Image" class="app-shape-one">
                    <img src="assets/img/app/app-shape-2.webp" alt="Image" class="app-shape-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="app-content">
                                <div class="content-title-two">
                                    <span>Our App</span>
                                    <h2>Download Motoz App For Free!</h2>
                                    <p>It is a long established fact that reader will be distracted by the dolore</p>
                                </div>
                                <div class="app-btn">
                                    <a href="index.html"><img src="assets/img/icon/google-play.webp" alt="Image">
                                        GET IT ON <span>Google Play</span></a>
                                    <a href="index.html"><img src="assets/img/icon/apple-store.webp" alt="Image">Download on The <span>App Store</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/app/app.webp" alt="Image" class="app-img">
                </div>
            </div>
        </div>
        <!-- App Section End -->

    
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


<!-- Mirrored from templates.hibotheme.com/motoz/default/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 13:17:14 GMT -->
</html>