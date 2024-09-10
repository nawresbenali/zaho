
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
                                            <h3 class="card-title">Liste passager</h3>
                                        </div>
                                      
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">prix</th>
                                                            <th class="wd-15p border-bottom-0">type</th>
                                                            
                                                           <th class="wd-25p border-bottom-0">action</th>
                                                       
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($donnee as $data)
                                                        <tr>
                                                            

                                                          <td> {{$data->prix}}</td>
                                                            <td> {{$data->type}}</td>
                                                         
                                                         


                                                           <td><button type="button" class="btn btn-success">modifier</button>
                                                            <button type="button" class="btn btn-danger">supprimer</button>

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

                      