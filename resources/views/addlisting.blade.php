@extends('theme2')

@section('abc')

        <div class="switch-theme-mode">
            <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
            </label>
        </div>


        <div class="breadcrumb-wrap br-15 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>ajout voiture</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{url('/')}}">Acceuil </a></li>

                        <li>Ajout voiture</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="add-listing-wrap ptb-100">
            <div class="container">
                <h2>Ajout voiture</h2>
                <div class="add-listing-box">

                <form action="/addvoiture" method="post"enctype="multipart/form-data">
            @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="listing_title"> num</label>
                                    <input type="text" placeholder="Enter numéro de série" name="num">
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                    <label for="listing_title"> nom</label>
                                    <input type="text" placeholder="Enter numéro de série" name="nom">
                                </div>
                            </div>

                            <div class="col-md-4">











                            <div class="col-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="Description" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                        </div>

                </div>
                <div class="row mb-40 align-items-center">
                    <div class="col-lg-4">
                        <h2>image</h2>
                    </div>

                </div>
                <div class="add-listing-box">
                    <div class="form-group photo-upload">
                        <div class="add-listing__input-file-box">
                            <input class="" type="file" name="image">

                        </div>
                    </div>
                </div>





                <button type="submit" class="btn-two">Ajout voiture</button>

                </form>
            </div>
        </div>

@endsection
