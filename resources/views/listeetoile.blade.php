
@extends('theme')

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Liste passager</h1>
                                <div>
                                   <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Liste passager</li>
                                    </ol>
                                </div>

                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- Row -->
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Liste contact</h3>
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
                                      
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">nombreetoile</th>
                                                            <th class="wd-15p border-bottom-0">nom</th>
                                                            <th class="wd-20p border-bottom-0">email</th>
                                                            <th class="wd-20p border-bottom-0">message</th>

                                                           <th class="wd-25p border-bottom-0">action</th>
                                                       
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($donnee as $data)
                                                        <tr>
                                                            

                                                          <td> {{$data->nombreetoile}}</td>
                                                            <td> {{$data->nom}}</td>
                                                         
                                                            
                                                            
                                                            <td>{{$data->email}}</td>
                                                            <td>{{$data->message}}</td>



                                                          
<td>

<a href ="suppcontact/{{$data->id}}" class="btn btn-danger">supprimer</a>

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

                      