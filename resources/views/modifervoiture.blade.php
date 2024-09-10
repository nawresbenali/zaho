@extends('theme')

@section('content')

<!doctype html>
<html lang="en">


<head>


    </head>

    <body data-layout="horizontal" data-topbar="dark">

        <div id="layout-wrapper">



            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                           <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h4 class="mb-0">modifier Admin</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <div class="card-body">
                                    <form action="/modifervoiture" method="post"enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id"value="{{$data->id}}">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">num</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="placeholder" placeholder="nom" id="example-text-input " value="{{$data->num}}" name="num">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">nom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="placeholder" placeholder="prenom" id="example-text-input" value="{{$data->nom}}" name="nom">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">Description</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text"  placeholder="password" id="example-search-input" value="{{$data->Description}}" name="Description">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">image</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" placeholder="Email" id="example-email-input" value="{{$data->image}}" name="image">
                                            </div>
                                        </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary">modif</button>

                                        </div>

                                        </form>










                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>


    </body>

</html>
@endsection
