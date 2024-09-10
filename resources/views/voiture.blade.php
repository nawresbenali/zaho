@extends('theme2')

@section('abc')

        <!-- Theme Switcher Start -->
        <div class="switch-theme-mode">
            <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
            </label>
        </div>
        <!-- Theme Switcher End -->


        <div class="sidebar-popup">
            <div class="sidebar-popup-wrap">
                <button type="button" class="close-popup"> <i class="ri-close-fill"></i> </button>
                <div class="comp-logo">
                    <a href="index.html">
                        <img src="assets/img/logo-white.webp" alt="Image">
                    </a>
                </div>
                <p class="comp-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut.</p>
                <ul class="contact-box list-style">
                    <li>
                        <b>Address:</b>
                        <p>23 Bakery Street, London, UK</p>
                    </li>
                    <li>
                        <b>Phone:</b>
                        <a href="tel:87896744455">878-9674-4455</a>
                    </li>
                    <li>
                        <b>Email:</b>
                        <a href="https://templates.hibotheme.com/cdn-cgi/l/email-protection#9af2fff6f6f5daf7f5eef5e0b4f9f5f7"><span class="__cf_email__" data-cfemail="9df5f8f1f1f2ddf0f2e9f2e7b3fef2f0">[email&#160;protected]</span></a>
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
        <!-- Header Section End -->

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-15 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>voiture disponible</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{url('/')}}">Acceuil </a></li>
                        <li>voiture</li>
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
                                <h3 class="sidebar-widget-one-title">Recherche voiture</h3>
                                <form action="{{ url('/search4') }}" method="post">
@csrf
                                    <div class="form-group">
                                        <input type="number" placeholder="num de serie"name="num">
                                    </div>
                                    <button type="submit"class="btn-two">Recherche</button>
                                </form>
                            <br>
                            @if(session()->has("result"))
                                @if(count(session()->get("result")) == 0)
                                    voiture non trouvé
                                @else
                                    @foreach(session()->get("result") as $data)
                                        {{$data->num}}
                                    @endforeach
                                @endif

                            @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-lg-8 order-xl-2 order-lg-1 order-md-1 order-1">
                        <div class="search-result-wrap">
                            <div class="row align-items-center">

                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="product-card-two">
                                    <div class="product-img">
                                        @foreach ($donnee as $donnee)


                                        <ul class="product-option list-style">
                                            <li><a href="wishlist.html"><i class="flaticon-heart"></i></a></li>
                                            <li><a href="compare-2.html"><i class="flaticon-compare"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-info">

                                        <a href="listings.html" class="product-category">{{$donnee->nom}}</a></h3>
                                        <div class="product-price">Num:{{$donnee->num}} </div>
                                        <img src="storage/{{$donnee->image}}" >
                                        <h3><a href="listing-details.html">{{$donnee->Description}}</a></h3>


                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>






                        </div>

                    </div>
                </div>
            </div>
        </div>



@endsection
