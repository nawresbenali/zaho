@extends('theme2')

@section('abc')
<!DOCTYPE html>
<html lang="zxx">

    
<!-- Mirrored from templates.hibotheme.com/motoz/default/listing-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 13:16:49 GMT -->
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/flaticon_motoz.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
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

       
       
        <!-- Header Section End -->  

        <!-- Listing Details Start -->
        <div class="single-listing-header bg-f">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-8 col-lg-9">
                        <div class="single-listing-info">
                            <a href="listings.html" class="single-listing-category"><span><i class="flaticon-drive"></i></span>Sedan</a>
                            <h1>Covoiturage</h1>
                            <div class="product-ratings">
                                <ul class="list-style">
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                    <li><i class="ri-star-fill"></i></li>
                                </ul>
                                <span>(6k+ rating)</span>
                            </div>
                            <div class="single-listing-address-wrap">
                                <a href="tel:3202791456" class="btn-two"><i class="flaticon-phone-call"></i>(+216) 20428645</a>
                                <div class="single-listing-address">
                                    <img src="assets/img/icon/clock.svg" alt="Image">
                                    <div class="single-listing-address-info">
                                        <h6>overture</h6>
                                        <p>09:00 am - 06:00 pm</p>
                                    </div>
                                </div>
                                <div class="single-listing-address">
                                    <i class="flaticon-placeholder"></i>
                                    <div class="single-listing-address-info">
                                        <h6>localisation</h6>
                                        <p>Lac1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 text-lg-end">
                        <div class="single-listing-action">
                            <a href="www.facebook.html"><img src="assets/img/icon/share.svg" alt="Image">Share</a>
                            <a href="www.facebook.html"><img src="assets/img/icon/save.svg" alt="Image">Save</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-listing-details ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-listing-desc">
                            <div class="single-listing-img">
                                <img src="assets/img/listing/single-listiing-1.webp" alt="Image">
                            </div>
                            <h2>Description</h2>
                            <p><b>Le chauffeur est un conducteur professionnel qui fournit un service « à la demande » de transport de passagers dans son véhicule. Sa tâche principale consiste à chercher et accompagner les passagers à la destination indiquée de manière rapide et efficace..</b></p>
                            <ul class="single-listing-features feature-list-one list-style">
                                <li>Faisabilité et études économiques</li>
                                <li>UN MOYEN FIABLE DE VOYAGER</li>
                                <li>CONDUCTEURS BIEN FORMÉS EN SERVICE</li>
                            
                            </ul>
                       
                            <h2>Location</h2>
                            <div class="comp-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd">
                                </iframe>
                            </div>
                          
                        
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget-one author-widget">
                                <h3 class="sidebar-widget-one-title">Rencontrez notre équipe</h3>
                                <div class="author-profile-wrap">
                                    <div class="author-avatar">
                                        <img src="assets/img/listing/author-1.webp" alt="Image">
                                    </div>
                                    <div class="author-profile-info">
                                        <h4>    Ahmed ben ali</h4>
                                        <span>chauffeur</span>
                                    </div>
                                </div>
                                <div class="author-social-link">
                                    <a href="listing-details.html">Profil</a>
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
                            <div class="sidebar-widget-one contact-widget">
                                <h3 class="sidebar-widget-one-title">Contact</h3>
                                <form id="contactForm">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" id="name"
                                            required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required
                                            placeholder="Email" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group v1">
                                        <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <button type="submit" class="btn-two w-100 d-block">Send Now</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Follow Us On Instagram</h3>
                                <div class="instagram-widget">
                                    <a class="instagram-card" href="https://www.instagram.com/" target="blank">
       
                                    <img src="assets/img/instagram/insta-1.webp" alt="Image">
                                        <span><i class="flaticon-instagram"></i></span>
                                    </a>
                                    <a class="instagram-card" href="https://www.instagram.com/" target="blank">
                                        <img src="assets/img/instagram/insta-2.webp" alt="Image">
                                        <span><i class="flaticon-instagram"></i></span>
                                    </a>
                                    <a class="instagram-card" href="https://www.instagram.com/" target="blank">
                                        <img src="assets/img/instagram/insta-3.webp" alt="Image">
                                        <span><i class="flaticon-instagram"></i></span>
                                    </a>
                                    <a class="instagram-card" href="https://www.instagram.com/" target="blank">
                                        <img src="assets/img/instagram/insta-4.webp" alt="Image">
                                        <span><i class="flaticon-instagram"></i></span>
                                    </a>
                                    <a class="instagram-card" href="https://www.instagram.com/" target="blank">
                                        <img src="assets/img/instagram/insta-5.webp" alt="Image">
                                        <span><i class="flaticon-instagram"></i></span>
                                    </a>
                                    <a class="instagram-card" href="https://www.instagram.com/" target="blank">
                                        <img src="assets/img/instagram/insta-6.webp" alt="Image">
                                        <span><i class="flaticon-instagram"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Listing Details End -->

        <!-- Product Section Start -->
       
        <!-- Product Section End -->

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


<!-- Mirrored from templates.hibotheme.com/motoz/default/listing-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 13:17:00 GMT -->
</html>
@endsection