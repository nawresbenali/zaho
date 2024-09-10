
@extends('theme')

@section('content')

                           
                            <!-- PAGE-HEADER END -->

                            <!-- Row -->
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Liste admin</h3>
                                        </div>
                                        <div class="card-body">
                                            @if(session('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('message')}}
                                        </div>
                                        @endif
                                        @if(session('messag'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('messag')}}
                                        </div>
                                        @endif
                                        
                                            @if(session('mesg'))
                                        <div class="alert alert-danger" role="alert">
                                        {{session('mesg')}}
</div>
                                        @endif
                                      <p>liste admin</p>
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">nom</th>
                                                            <th class="wd-15p border-bottom-0">image</th>
                                                            

                                                           <th class="wd-25p border-bottom-0">action</th>
                                                       
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                
                                                    @foreach($donnee as $data)
                                                        <tr>
                                                            

                                                          <td> {{$data->nom}}</td>
                                                          <td><img src="storage/{{$data->image}}" alt="Item Image" width="100" height="100"></td>




                                                           <td> <a href ="modifieradmin/{{$data->id}}" class="btn btn-success">modifier</a>
                                                         <a href ="suppAdmin/{{$data->id}}" class="btn btn-danger">supprimer</a>

                                                            </td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            @endsection

                      