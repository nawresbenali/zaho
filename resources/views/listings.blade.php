@extends('theme2')

@section('abc')
<!DOCTYPE html>
<html lang="zxx">

    
<!-- Mirrored from templates.hibotheme.com/motoz/default/listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 13:16:47 GMT -->
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
     

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-15 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Car Listings</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li>Listings</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog Details Section Start -->
        <div class="blog-details-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 order-xl-1 order-lg-1 order-md-2 order-2">
                        <div class="sidebar-two">
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">ahmed ben ali</h3>
                                <form action="#" class="filter-search">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Keyword">
                                    </div>
                                    <div class="form-group">
                                        <select >
                                            <option value="0">Condition</option>
                                            <option value="1">Nouvelle</option>
                                            <option value="2">Refubrishe</option>
                                            <option value="3">Revente</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <select name="car_make" id="car_make">
                                            <option value="0">confort</option>
                                            <option value="1">climatiseur</option>
                                            <option value="2">chauffage</option>
                                            <option value="3">aucun</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="car_model" id="car_model">
                                            <option value="0">type de chauffeur</option>
                                            <option value="1">experience</option>
                                            <option value="2">débutant</option>
                                        </select>
                                    </div>
                                 
                                </form>
                            </div>
                          
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">bagage</h3>
                                <div class="filter-radio-group">
                                    <div class="form-group">
                                        <input type="radio" id="test9" name="radio-group_three">
                                        <label for="test9">bagage</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" id="test10" name="radio-group_three">
                                        <label for="test10">sans bagage</label>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Save Search</h3>
                                <form action="#" class="save-search-form">
                                    <div class="form-group">
                                        <input type="text" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Email Frequency">
                                    </div>
                                    <button class="btn-two">Save Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-lg-8 order-xl-2 order-lg-1 order-md-1 order-1">
                        <div class="search-result-wrap">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-7">
                                    <p>Showing 1-13 of 23 Results</p>
                                </div>
                                <div class="col-lg-4 col-md-5">
                                    <select >
                                        <option value="1">Sort By Price: Low To High</option>
                                        <option value="2">Sort By Price: High To Low</option>
                                        <option value="3">Sort By Ratings: High To Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="assets/img/product/product-9.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h3><a href="listing-details.html">nouvelle voiture</a></h3>
                                        <ul class="product-amenity list-style">
                                            <li>confort</li>
                                            <li>rapide </li>
                                            <li>sécurisée</li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>ahmed ben ali</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="assets/img/product/product-10.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <h3><a href="listing-details.html"> Refubrishe</a></h3>
                                        <ul class="product-amenity list-style">
                                            <li>confort</li>
                                            <li>rapide</li>
                                            <li>sécurisée</li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>ahmed ben ali</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        <img src="assets/img/product/product-11.webp" alt="Image">
                                         <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">
                                        <ul class="product-amenity list-style">
                                            <li>confort</li>
                                            <li>rapide </li>
                                            <li>sécurisée</li>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-style">
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                                <li><i class="ri-star-fill"></i></li>
                                            </ul>
                                        </div>
                                        <a href="listing-details.html" class="btn-one">View Details</a>
                                        <p class="product-listed-by">Listed By: <span>The Auto Hospital</span></p>
                                    </div>
                                </div>
                            </div>
                          
                           
                           
                            
                        </div>
                        <ul class="page-nav list-style">
                            <li><a href="listings.html"><i class="flaticon-left-arrow"></i></a></li>
                            <li><a class="active" href="listings.html">1</a></li>
                            <li><a href="listings.html">2</a></li>
                            <li><a href="listings.html">3</a></li>
                            <li><a href="listings.html"><i class="flaticon-next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Listing Section End -->

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

        <!-- Footer Section Start -->

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


<!-- Mirrored from templates.hibotheme.com/motoz/default/listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Feb 2023 13:16:49 GMT -->
</html>
@endsection

