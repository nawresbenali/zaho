@extends('theme2')

@section('abc')
<!DOCTYPE html>
<html lang="zxx">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-8  bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2> Services</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{url('/')}}">Acceuil </a></li>
                        <li>Service</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Service Section Start -->
        <div class="testimonial-wrap ptb-100 bg_ash">
            <div class="container">
                <div class="section-title-two text-center mb-30">
                    <span>NOS SERVICES
                    </span>
                    <h2>CE QUE NOUS FAISONS
                    </h2>
                </div>
                <div class="container">
                    <!-- Section Header -->
                    <div class="what-do-boxes">
                        <!-- Row -->
                        <div class="row">
                            <div class="col-md-6 what-do-box">
                                <div class="icon-content-box">
                                    <i><img src="assets/img/icon/what-do-icon-1.png" alt="Icon" /></i>
                                    <h3>Vous éte passager </h3>
                                    <p>Grâce à Zahou tech.tn vous pouvez se déplacer moins cher et avoir des nouveaux amis.</p>
                                </div>
                            </div>
                            <div class="col-md-6 what-do-box">
                                <div class="icon-content-box">
                                    <i><img src="assets/img/icon/what-do-icon-2.png" alt="Icon" /></i>
                                    <h3>Service</h3>
                                    <p>La réduction du trafic routier permet de fluidifier la circulation et réduire les émissions, et également de pouvoir voyager à n'importe quel moment et lieu.</p>
                                </div>
                            </div>
                            <div class="col-md-6 what-do-box">
                                <div class="icon-content-box">
                                    <i><img src="assets/img/icon/what-do-icon-3.png" alt="Icon" /></i>
                                    <h3> confiance</h3>
                                    <p>Nous prenons le temps qu’il faut pour connaître nos membres et nos compagnies de bus partenaires. Nous vérifions les avis, les profils et les pièces d’identité..</p>
                                </div>
                            </div>
                            <div class="col-md-6 what-do-box">
                                <div class="icon-content-box">
                                    <i><img src="assets/img/icon/what-do-icon-4.png" alt="Icon" /></i>
                                    <h3>Recherchez, cliquez et réservez </h3>
                                    <p>Réserver un trajet devient encore plus simple ! Facile d'utilisation et dotée de technologies avancées, notre appli vous permet de réserver un trajet à proximité en un rien de temps..</p>
                                </div>
                            </div>

                        </div><!-- Row /- -->

                    </div>
                </div>
            </div>
            </div>
        <!-- Service Section End -->

        <!-- App Section Start -->
        <div class="app-wrap">
            <div class="container">
                <div class="app-box bg_ash">
                    <img src="assets/img/app/app-shape-1.webp" alt="Image" class="app-shape-one">
                    <img src="assets/img/app/app-shape-2.webp" alt="Image" class="app-shape-two">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="app-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- App Section End -->


        <!-- Back-to-top button Start -->
        <div class="paginacontainer">
            <div class="progress-wrap bounce">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
                </svg>
            </div>
        </div>

@endsection
