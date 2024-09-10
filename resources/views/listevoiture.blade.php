
@extends('theme2')

@section('abc')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title"></h1>
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
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <a href="imprimvoiture" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">imprimer cette page</a>

                                        <div class="card-header">
                                            <h3 class="card-title">Liste voiture</h3>
                                        </div>
                                        <form class="app-search d-none d-lg-block" action="/searchvoiture">
                                            <div class="position-relative">
                                                 <span class="bx bx-search"></span>
                                                <input type="text"  name="num" class="form-control" placeholder="Search...">
                                                <button hidden type="submit"><span class="bx bx-search"></span></button>

                                            </div>
                                        </form>
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
                                                            <th class="wd-15p border-bottom-0">num</th>
                                                            <th class="wd-15p border-bottom-0">nom</th>
                                                            <th class="wd-20p border-bottom-0">Description</th>
                                                            <th class="wd-20p border-bottom-0">image</th>

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


                                                          <td> {{$data->num}}</td>
                                                            <td> {{$data->nom}}</td>



                                                            <td>{{$data->Description}}</td>
                                                            <td><img src="storage/{{$data->image}}" alt="Item Image" width="100" height="100"></td>



                                                           <td><a href ="modefvoiture/{{$data->id}}" class="btn btn-success">modifier</a>
                                                            <a href ="supvoiture/{{$data->id}}" class="btn btn-success">supprimer</a>


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

