@extends('theme')

@section('content')

<!doctype html>
<html lang="en">

    
<head>
        
        <meta charset="utf-8" />
        <title>ajout conducteur| Symox - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal" data-topbar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
          
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                           <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h4 class="mb-0">Ajout covoiturage</h4>

                                    

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                    <div class="card-body">

        
                                           <form action="/addcovoiturage" method="post">
            @csrf
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">nom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="placeholder" placeholder="nom" id="example-text-input"name="nom">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">prenom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="placeholder" placeholder="prenom" id="example-text-input"name="prenom">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password"  placeholder="password" id="example-search-input"name="password">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" placeholder="Email" id="example-email-input"name="email">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">tel</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="tel" placeholder="tel" id="example-email-input"name="tel">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">adresse</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="adresse" id="example-email-input"name="adresse">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ajout</button>
                         
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
