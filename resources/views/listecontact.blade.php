
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
                            <form class="app-search d-none d-lg-block" action="/searchcontact">
                                <div class="position-relative">
                                     <span class="bx bx-search"></span>
                                    <input type="text"  name="name" class="form-control" placeholder="Search...">
                                    <button hidden type="submit"><span class="bx bx-search"></span></button>

                                </div>
                            </form>
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <a href="imprimcontact" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">imprimer cette page</a>

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
                                                            <th class="wd-15p border-bottom-0">name</th>
                                                            <th class="wd-15p border-bottom-0">email</th>
                                                            <th class="wd-20p border-bottom-0">tel</th>

                                                           <th class="wd-25p border-bottom-0">action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if(empty($donnee))

                                                        <tr>
                                                            <td colspan="7">No contact with this name</td>
                                                        </tr>

                                                    @else
                                                    @foreach($donnee as $data)
                                                        <tr>


                                                          <td> {{$data->name}}</td>
                                                            <td> {{$data->email}}</td>



                                                            <td>{{$data->tel}}</td>




<td>

<a href ="suppcontact/{{$data->id}}" class="btn btn-danger">supprimer</a>


<a href ="detailMessage/{{$data->id}}" class="btn btn-info">Afficher</a>

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

