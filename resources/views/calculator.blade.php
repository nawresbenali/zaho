@extends('theme2')
@section('abc')
<!DOCTYPE html>
<html lang="zxx">




        <!-- Header Section Start -->


        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-18 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Calculator</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li>Calculator</li>
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
                            <h3>Calculer les prix de reservation</h3>
                            <form action="{{ route('create') }}" class="finance-calculator" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                            <p>Adresse de depart</p>

<select name="adrdep" id="pet-select" class="form-control">
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
                                    </div>
                                    <div class="col-md-6">
                                        <p>Adresse d'arrivée</p>

                                            <select name="adrarv" id="pet-select" class="form-control">
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
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="number" placeholder="kilométrage" name="kil">
                                        </div>
                                    </div>
                                    <div>
                                    <input type="hidden" name="nom" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="col-12">
                                        <button class="btn-two" type="submit">Calcul</button>
                                    </div>
                                </div>
                            </form>


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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- App Section End -->


        <!--
@endsection
