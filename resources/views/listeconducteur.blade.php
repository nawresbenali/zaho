
@extends('theme')

@section('content')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title">Liste conducteur</h1>
                                <div>
                                   <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Liste conducteur</li>
                                    </ol>
                                </div>

                            </div>
                            <!-- PAGE-HEADER END -->
  <!-- Search -->
  <form class="app-search d-none d-lg-block" action="/search0">
                            <div class="position-relative">
                                 <span class="bx bx-search"></span>
                                <input type="text"  name="name" class="form-control" placeholder="Search...">
                                <button hidden type="submit"><span class="bx bx-search"></span></button>

                            </div>
                        </form>
                            <!-- Row -->
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <a href="imprimconducteur" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">imprimer cette page</a>

                                        <div class="card-header">

                                            <h3 class="card-title">Liste conducteur</h3>
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
                                                            <th class="wd-15p border-bottom-0">nomdechauufeur</th>
                                                            <th class="wd-15p border-bottom-0">prenom</th>
                                                            <th class="wd-20p border-bottom-0">email</th>
                                                            <th class="wd-20p border-bottom-0">tel</th>
                                                            <th class="wd-20p border-bottom-0">adresse</th>
                                                            <th class="wd-20p border-bottom-0">image</th>

                                                            <th class="wd-20p border-bottom-0">status</th>

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


                                                          <td> {{$data->nomdechauufeur}}</td>
                                                            <td> {{$data->prenom}}</td>



                                                            <td>{{$data->email}}</td>
                                                            <td>{{$data->tel}}</td>
                                                            <td>{{$data->adresse}}</td>
                                                            <td><img src="storage/{{$data->image}}" alt="Item Image" width="100" height="100"></td>
                                                            <td>
                                                                @if($data->status == 0)
                                                                  <span class="text-danger">Bloquer</span>
                                                                @elseif($data->status == 1)
                                                                <span class="text-success">activé</span>
                                                                @else
                                                                <span class="text-primary">reclamé</span>
                                                                @endif
                                                            </td>



<td>                                                           <a href ="modifcond/{{$data->id}}" class="btn btn-success">modifier</a>

                                                           <a href ="suppconducteur/{{$data->id}}" class="btn btn-danger">supprimer</a>
                                                           <a href ="bloquerconducteur/{{$data->id}}" class="btn btn-info">bloque</a>
                                                           <a href ="activerconducteur/{{$data->id}}" class="btn btn-info">activer</a>


                                                            </td>
                                                        </tr>
                                                        @endforeach
@endif
                                                    </tbody>
                                                </table>

                                                {!! $donnee->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Row -->

                            @endsection

