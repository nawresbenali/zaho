
@extends('theme2')

@section('abc')

                            <div class="page-header">
                                <h1 class="page-title">Liste reservation</h1>


                            </div>

                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <a href="imprimreservation" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">imprimer cette page</a>
<br>
<br>
                                        <div class="card-header">
                                            <h3 class="card-title">Liste reservation</h3>
                                        </div>

                                        <form class="app-search d-none d-lg-block" action="/searchreservation">
                                            <div class="position-relative">
                                                 <span class="bx bx-search"></span>
                                                <input type="text"  name="nom" class="form-control" placeholder="Search...">
                                                <button hidden type="submit"><span class="bx bx-search"></span></button>

                                            </div>
                                        </form>
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
                                                        @if(empty($donnee))

                                                        <tr>
                                                            <td colspan="7">No chauffeur with this name</td>
                                                        </tr>

                                                    @else
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








                                                        <td>   <a href ="suppreservation/{{$data->id}}" class="btn btn-danger">supprimer</a>
                                                          @if($data->accepter == null && $data->refuser == null)
                                                            <a href ="accepter/{{$data->id}}" class="btn btn-danger">accepter</a>
                                                            <a href ="refuse/{{$data->id}}" class="btn btn-danger">refuse</a>

                                                            @endif

                                                            </td>
                                                        </tr>
                                                        @endforeach
@endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            @endsection

