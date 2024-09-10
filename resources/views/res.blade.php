@extends('theme2')
@section('abc')
<!DOCTYPE html>
<html lang="zxx">




        <!-- Header Section Start -->


        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-18 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2 >Reservée</h2>
                    <ul class="breadcrumb-menu list-style">
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Calculator Section start -->
        <div class="calculator-wrap ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="calculator-box">
                            <h3>Reservée</h3>



<form action="/addreserver" method="post">
    @csrf

    <div class="form-group">
        @if(session()->has("erreur"))
        <p class = "text-danger">{{session()->get("erreur")}}</p>
        @endif

        @if(session()->has("success"))
        <p class = "text-success">{{session()->get("success")}}</p>
        @endif
        </div>
<div class="form-group">
<b><p>Nom</p>
            <input placeholder="enter nom" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome" name="nom">


</div>

<div class="form-group">
<b><p >Email</p>
            <input placeholder="enter email"  type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome" name="email">


</div>







<div class="form-group">
<p>adresse de départ</p>

    <select name="départ" id="pet-select" class="form-control">
        <option value="Ariana">Ariana</option>
        <option value="Béja">Béja</option>
        <option value="Ben Arous">Ben Arous	</option>
        <option value="Bizerte">Bizerte</option>
        <option value="Gabès">Gabès</option>
        <option value="Gafsa">Gafsa</option>
        <option value="Jendouba">Jendouba</option>
        <option value="Kairouan">Kairouan</option>
        <option value="Kasserine">Kasserine</option>
        <option value="Kébili">Kébili</option>
        <option value="Le Kef">Le Kef</option>
        <option value="Mahdia">Mahdia</option>
        <option value="La Manouba">La Manouba</option>
        <option value="Médenine">Médenine</option>
        <option value="Monastir">Monastir</option>
        <option value="Nabeul">Nabeul</option>
        <option value="Sfax">Sfax</option>
        <option value="Sidi Bouzid">Sidi Bouzid</option>
        <option value="Siliana">Siliana</option>
        <option value="Sousse">Sousse</option>
        <option value="Tataouine">Tataouine</option>
        <option value="Tozeur">Tozeur</option>
        <option value="Tunis">Tunis</option>
        <option value="Zaghouane">Zaghouane</option>

    </select>

<div class="form-group">
<p>Adresse d'arrivée</p>

<select name="arivée" id="pet-select" class="form-control">
    <option value="Ariana">Ariana</option>
    <option value="Béja">Béja</option>
    <option value="Ben Arous">Ben Arous	</option>
    <option value="Bizerte">Bizerte</option>
    <option value="Gabès">Gabès</option>
    <option value="Gafsa">Gafsa</option>
    <option value="Jendouba">Jendouba</option>
    <option value="Kairouan">Kairouan</option>
    <option value="Kasserine">Kasserine</option>
    <option value="Kébili">Kébili</option>
    <option value="Le Kef">Le Kef</option>
    <option value="Mahdia">Mahdia</option>
    <option value="La Manouba">La Manouba</option>
    <option value="Médenine">Médenine</option>
    <option value="Monastir">Monastir</option>
    <option value="Nabeul">Nabeul</option>
    <option value="Sfax">Sfax</option>
    <option value="Sidi Bouzid">Sidi Bouzid</option>
    <option value="Siliana">Siliana</option>
    <option value="Sousse">Sousse</option>
    <option value="Tataouine">Tataouine</option>
    <option value="Tozeur">Tozeur</option>
    <option value="Tunis">Tunis</option>
    <option value="Zaghouane">Zaghouane</option>

</select></div>




<!--Fourth Row-->
<div class="form-group">

<p>Date</p>
        <input placeholder="date" type="date" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"name="date" >
<p>numero</p>
                        <input placeholder="numero de téléphone" type="" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome"name="tel" >

</div>











<div class="form-group">
    <div class="col-sm-4">
        <p>nombre de place : 1</p>
        <input placeholder="nombre de place" type="hidden" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome" name="nombredeplace" max="4" value="1">

    </div>
<div class="form-group">
<p>position</p>
                        <input placeholder="position" type="number" max="4" min="1" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome" name="position">

</div>







<center><button type="submit" class="btn-two" >reserver</button></center>
</div>
</div></from>

</div>
</div>
<div class="col-xl-4 col-lg-5">
    <div class="calculator-bg">
        <img src="assets/img/bg-2.webp" alt="Image">
        <a class="play-now" data-fancybox="" href="https://www.youtube.com/watch?v=BJoVxpAZb_E">
            <ion-icon name="play"></ion-icon>
            <span class="ripple"></span>
        </a>
    </div>
</div>
</div>
</div>
</div>
<!-- Calculator Section End -->

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

        </div>
    </div>
</div>
<img src="assets/img/app/app.webp" alt="Image" class="app-img">
</div>
</div>
</div>
<!-- App Section End -->


<!--
@endsection

