@extends('theme')

@section('content')

<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/symox-laravel/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jul 2022 11:26:57 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>modifier conducteur| Symox - Admin & Dashboard Template</title>
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

                        <!-- start page title -->
                        <div class="row">
                           <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h4 class="mb-0">modifier covoiturage</h4>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                    <div class="card-body">
                                    <form action="/modifiercovoiturage" method="post">
@csrf
            <input type="hidden" name="id" value="{{$data->id}}">
        
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">nom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="placeholder" placeholder="nom" id="example-text-input"name="nom" value="{{$data->nom}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">prenom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="placeholder" placeholder="prenom" id="example-text-input"name="prenom" value="{{$data->prenom}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password"  placeholder="password" id="example-search-input"name="password" value="{{$data->password}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" placeholder="Email" id="example-email-input"name="email" value="{{$data->email}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">tel</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="tel" placeholder="tel" id="example-email-input"name="tel" value="{{$data->tel}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">adresse</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="adresse" id="example-email-input"name="adresse" value="{{$data->adresse}}">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">modifier</button>
                                       
                         
                                        </div>
                                       
                                        
                                       
                                        
                                       
                                      
                                       
                                        
                                      

                                        
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                       
                        <!-- End Form Layout -->

                        
                        <!-- End Form Sizing -->

                      
                       
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Symox.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
      
    </body>

</html>
@endsection
