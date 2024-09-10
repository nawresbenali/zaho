@extends('theme2')

@section('abc')


            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <br>
                            <br>
                            <br>
                           <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h4 class="mb-0">Modifier trajet</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
<br>
<br>
<br>
<br>
                                    <div class="card-body">

                                    <form action="/modifiertrajet" method="post">
@csrf
            <input type="hidden" name="id" value="{{$data->id}}">                  <div class="mb-3 row">
                                            <div class="col-md-10">
                                            <span class="form-label">Adresse de départ</span>

<select name="addepart" id="pet-select" class="form-control"value="{{$data->addepart}}">
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

</select>                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-md-10">
                                            <span class="form-label">Adresse d'arrivée</span>

<select name="addarrivee" id="pet-select" class="form-control"value="{{$data->addarrivee}}">
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
                                        </div>
                                        <div class="col-md-4">
<div class="form-group">
<span class="form-label">Date DD/MM/YYYY</span>
<input type="date" placeholder="DD/MM/YYYY" class="form-control" name = "date" value="{{$data->date}}">


</div>
</div>
                                           <input type="hidden" name="nomdechauufeur" value="{{Auth::user()->id}}" id="">


                                        <button type="submit" class="btn btn-primary">trajet</button>

                                        </div>

                                        </form>














                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div> <!-- container-fluid -->
                </div>

            </div>

        </div>






@endsection
