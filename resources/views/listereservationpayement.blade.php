
@extends('theme2')

@section('abc')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Liste Demande</h1>
                                <div>
                                   <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li>
                                        <li class="breadcrumb-item active" aria-current="page"></li>
                                    </ol>
                                </div>

                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- Row -->
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <h3 class="card-title">Liste demande</h3>
                                        </div>


                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">nom</th>
                                                            <th class="wd-20p border-bottom-0">email</th>
                                                            <th class="wd-20p border-bottom-0">départ</th>
                                                            <th class="wd-20p border-bottom-0">arivée</th>


                                                            <th class="wd-20p border-bottom-0">date</th>
                                                            <th class="wd-20p border-bottom-0">tel</th>

                                                            <th class="wd-20p border-bottom-0">nombredeplace</th>
                                                            <th class="wd-20p border-bottom-0">position</th>
                                                            <th class="wd-20p border-bottom-0">nomdechauuffeur</th>




                                                           <th class="wd-25p border-bottom-0">action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($donnee as $data)
                                                        <tr>


                                                          <td> {{$data->nom}}</td>
                                                            <td> {{$data->email}}</td>



                                                            <td>{{$data->départ}}</td>
                                                            <td>{{$data->arivée}}</td>
                                                            <td>{{$data->date}}</td>
                                                            <td>{{$data->tel}}</td>
                                                            <td>{{$data->nombredeplace}}</td>
                                                            <td>{{$data->position}}</td>
                                                            <td>{{$data->nomdechauufeur}}</td>




                                                        <td>
                                                            @if($data->accepter == 1)
                                                            accepter
                                                            @if($data->payer == null)
                                                            <a href ="{{url('/pay')}}"  class="btn btn-danger">payement</a>

                                                            @endif
                                                            @elseif($data->refuser == 2)
                                                            refuse
                                                            @else
                                                            encour
                                                            @endif
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

