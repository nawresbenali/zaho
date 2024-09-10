@extends('theme')

@section('content')


     

            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                           <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h4 class="mb-0">Ajout conducteur</h4>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                    <div class="card-body">
                                    <form action="/addcomposition" method="post"enctype="multipart/form-data">
            @csrf
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">nomdechauufeur</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="placeholder" placeholder="nom" id="example-text-input"name="nom">
                                            </div>
                                        </div>
                                      
                                      
                                        
                                      
                    <div class="col-lg-4">
                        <h2>image</h2>
                    </div>
                   
                                        <div class="add-listing-box">
                    <div class="form-group photo-upload">
                        <div class="add-listing__input-file-box">
                            <input class="" type="file" name="image">
                           
                        </div>
                    </div>
                </div>
                                        <button type="submit" class="btn btn-primary">Ajout</button>
                         
                                        </div>
                                       
                                        </form>
   
                                       
                                        
                                   
                                        
                                       
                                        
                                       
                                      
                                       
                                        
                                      

                                        
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        

                        
                    

                      
                       
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
          
            </div>

        </div>
       

@endsection
