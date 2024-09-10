
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
                            <form class="app-search d-none d-lg-block" action="/search">
                            <div class="position-relative">
                                 <span class="bx bx-search"></span>
                                <input type="text"  name="name" class="form-control" placeholder="Search...">
                                <button hidden type="submit"><span class="bx bx-search"></span></button>

                            </div>
                        </form>
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <a href="imprimepassager" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">imprimer cette page</a>

                                        <div class="card-header">
                                            <h3 class="card-title">Liste passager</h3>
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
                                                            <th class="wd-15p border-bottom-0">nom</th>
                                                            <th class="wd-15p border-bottom-0">prenom</th>
                                                            <th class="wd-20p border-bottom-0">email</th>
                                                            <th class="wd-20p border-bottom-0">tel</th>
                                                            <th class="wd-20p border-bottom-0">adresse</th>

                                                           <th class="wd-25p border-bottom-0">action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if(empty($donnee))

    <tr>
        <td colspan="7">No admin with this name</td>
    </tr>

@else
                                                    @foreach($donnee as $data)
                                                        <tr>


                                                          <td> {{$data->nom}}</td>
                                                            <td> {{$data->prenom}}</td>



                                                            <td>{{$data->email}}</td>
                                                            <td>{{$data->tel}}</td>
                                                            <td>{{$data->adresse}}</td>



                                                           <td><a href ="modefpass/{{$data->id}}" class="btn btn-success">modifier</a>
                                                           <a href ="supppassager/{{$data->id}}" class="btn btn-danger">supprimer</a>

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

