@extends('theme')

@section('content')


                        <div class="row">
                           <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                  <h4 class="mb-0">modifier Admin</h4>

                                    

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                    <div class="card-body">
                                    <form action="/modifadmin" method="post">
            @csrf
            <input type="hidden" name="id"value="{{$data->id}}">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">nom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="placeholder" placeholder="nom" id="example-text-input " value="{{$data->nom}}" name="nom">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">prenom</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="placeholder" placeholder="prenom" id="example-text-input" value="{{$data->prenom}}" name="prenom">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-search-input" class="col-md-2 col-form-label">password</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="password"  placeholder="password" id="example-search-input" value="{{$data->password}}" name="password">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">Email</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="email" placeholder="Email" id="example-email-input" value="{{$data->email}}" name="email">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">tel</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="tel" placeholder="tel" id="example-email-input"name="tel"value="{{$data->tel}}" >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-email-input" class="col-md-2 col-form-label">adresse</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" placeholder="adresse" id="example-email-input"name="adresse"value="{{$data->adresse}}">
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
                      

   
@endsection