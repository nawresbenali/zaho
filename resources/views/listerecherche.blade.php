
@extends('theme2')

@section('abc')

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <h1 class="page-title"></h1>
                                <div>
                                   <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"></li>
                                    </ol>
                                </div>

                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- Row --><br>
                            <br>
                            <br>
                            <form class="app-search d-none d-lg-block" action="/searchtt">
                                <div class="position-relative">
                                     <span class="bx bx-search"></span>
                                    <input type="text"  name="name" class="form-control" placeholder="Search...">
                                    <button hidden type="submit"><span class="bx bx-search"></span></button>

                                </div>
                            </form>
                            <div class="row row-sm">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <br>
                                            <br>
<br>
<br>
<br>
                                            <h3 class="card-title">Liste de trajet</h3>
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
                                        <div class="hero-btn">
                                            <a href="{{url('/ajoutrecherche')}}" class="btn-two" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="500">ajout trajet</a>
                                        </div>
                                            <div class="table-responsive">
                                                <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                                    <thead>
                                                        <tr>
                                                            <th class="wd-15p border-bottom-0">addepart</th>
                                                            <th class="wd-15p border-bottom-0">addarrivee</th>
                                                            <th class="wd-20p border-bottom-0">date</th>

                                                           <th class="wd-25p border-bottom-0">action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($donnee as $data)
                                                        <tr>


                                                          <td> {{$data->addepart}}</td>
                                                            <td> {{$data->addarrivee}}</td>



                                                            <td>{{$data->date}}</td>






<td>

<a href ="modeftrajet/{{$data->id}}" class="btn btn-success">modifier</a>
            <a href ="supptrajet/{{$data->id}}" class="btn btn-danger">supprimer</a>


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

