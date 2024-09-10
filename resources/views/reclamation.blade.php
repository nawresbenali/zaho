@extends('theme2')

@section('abc')


        <!-- Theme Switcher End -->

        <!-- Header Section Start -->

        <!-- Header Section End -->

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-10 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>reclamation</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href={{'/'}}>acceuil </a></li>
                        <li>reclamation</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

         <!-- Contact Us section Start -->
         <section class="contact-us-wrap ptb-100">
            <div class="container">
                <div class="section-title-two text-center mb-30">
                    <span>reclamation
                    </span>
                    <h2>N'hésitez pas pour reclamation</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="contact-item-wrap">
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <ion-icon name="location"></ion-icon>
                                </span>
                                <div class="contact-info">
                                    <h3>Notre emplacement
                                    </h3>
                                    <p>
                                        Appartement 1-2 block C immeuble Xerox
                                        Rue du lac d'Annecy Lac 1
                                    </p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <ion-icon name="mail"></ion-icon>
                                </span>
                                <div class="contact-info">
                                    <h3>S Email</h3>
<p>contact@zahou-tech.com</p>                                </div>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon">
                                    <ion-icon name="call"></ion-icon>
                                </span>
                                <div class="contact-info">
                                    <h3>Téléphone
                                    </h3>
                                    <a href="tel:88098787868">
                                        +216 99 655 495</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="contact-form">
                        <form action="/addreclamation" method="post">

                            @csrf
                            @if(session()->has("success"))
                            <p class = "text-success">{{session()->get("success")}}</p>
                            @endif
                            <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name*" id="name"
                                                required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" required
                                                placeholder="Email*" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="tel" id="phone_number" required
                                                placeholder="Phone Number*" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group v1">
                                            <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="form-check checkbox">
                                            <input
                                                name="gridCheck"
                                                value="I agree to the terms and privacy policy."
                                                class="form-check-input"
                                                type="checkbox"
                                                id="gridCheck"
                                                required
                                            >
                                            <label class="form-check-label" for="gridCheck">
                                                je suis d'accord avec le <a class="link style2" href="terms-of-service.html">conditions &amp; conditions</a> et <a class="link style2" href="privacy-policy.html">politique de confidentialité</a>
                                            </label>
                                            <div class="help-block with-errors gridCheck-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">


                                        <p>nomdechaufeur</p>

                                        <select  style="background-color: rgb(19, 18, 18); color: white;" name="nomdechauufeur" id="">
                                        @foreach($donnee as $data)
                                        <option style="background-color: blue; color: white;" value="{{$data->id}}"> {{$data->nomdechauufeur}} </option>
                                        @endforeach
                                        </select>


                                                </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn-two">Reclamer</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                            <input type="hidden" name="nom" value="{{Auth::user()->name}}">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="app-wrap">
            <div class="container">
                <div class="app-box bg_ash">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="app-content">


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back-to-top button Start -->
        <div class="paginacontainer">

        </div>

@endsection
