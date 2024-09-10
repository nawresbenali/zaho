@extends('theme2')

@section('abc')
        <!-- Header Section End -->

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap br-16 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Chauffeur</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{url('/')}}">Acceuil </a></li>
                        <li>chauffeur</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Dealer Section Start -->
        <div class="Dealer-wrap ptb-100">
            <div class="container">
                <div class="row">
                <div class="col-xxl-3 col-xl-4 col-lg-4 order-xl-1 order-lg-1 order-md-2 order-2">
                        <div class="sidebar-two">
                            <div class="sidebar-widget-one">
                                <h3 class="sidebar-widget-one-title">Recherche conducteur</h3>
                                <form action="{{ url('/search2') }}" method="get">
                                    @csrf
    <input type="text" name="adresse" placeholder="Recherche conducteur">
    <button type="submit">Rechercher</button>
                                </form>
                                <br>
                                @if(session()->has("result"))
                                    @if(count(session()->get("result")) == 0)
                                        Chauffeur non trouvé
                                    @else
                                        @foreach(session()->get("result") as $data)
                                            {{$data->adresse}}
                                        @endforeach
                                    @endif

                                @endif
                            </div>




                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-8 col-lg-8 order-xl-2 order-lg-1 order-md-1 order-1">
                        <div class="search-result-wrap">

                        <div class="row justify-content-center">


                        @foreach ($donnee as $donnee)

                            <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                                <div class="dealer-card">

                                    <div class="dealer-info">
                                    <img src="storage/{{$donnee->image}}" >
                                        <h3>{{$donnee->nomdechauufeur}}</h3>
                                        <h3>{{$donnee->prenom}}</h3>

                                        <ul class="dealer-metainfo list-style">
                                            <li><i class="flaticon-placeholder"></i>{{$donnee->adresse}}</li>
                                           <li><i class="flaticon-survey"></i>{{$donnee->email}}</li>
                                            <li><i class="flaticon-phone-call"></i><a href="7553028572.html">{{$donnee->tel}}</a></li>
                                            <li>
                                                <button type="button" class="btn btn-sm btn-outline-danger" data-title="Delete"
                                                data-bs-toggle="modal" data-bs-target="#contact{{ $donnee->id }}">
                                                contacter
                                        </button>


                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="contact{{ $donnee->id }}" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                            <h4 class="modal-title custom_align" id="Heading">
                                                Contact: {{ $donnee->nomdechauufeur }}
                                                {{ $donnee->prenom }}
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <form   action="{{route('addcontactconducteur',$donnee->id)}}" method="post">

                                                @csrf
                                                @if(session()->has("success"))
                                                <p class = "text-success">{{session()->get("success")}}</p>
                                                @endif

                                                                                    <div class="form-group v1">
                                                                                        <input value="{{ $donnee->nomdechauufeur }}" name="nomconducteur" type="hidden">
                                                                                        <input value="{{ $donnee->prenom }}" name="nomconducteur" type="hidden">

                                                                                        <input value="{{ $donnee->email }}" name="emailconducteur" type="hidden">
                                                                                        <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                                                                    </div>
                                                                                    <button type="submit" class="btn btn-info">send message</button>

                                                                                </form>
                                        </div>
                                        <div class="modal-footer ">

                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach





                        </div>
                        <ul class="page-nav list-style">
                            <li><a href="dealers.html"><i class="flaticon-left-arrow"></i></a></li>
                            <li><a class="active" href="dealers.html">1</a></li>
                            <li><a href="dealers.html">2</a></li>
                            <li><a href="dealers.html">3</a></li>
                            <li><a href="dealers.html"><i class="flaticon-next"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dealer Section End -->

        <!-- App Section Start -->
        <div class="app-wrap">
            <div class="container">

            </div>
        </div>
        <!-- App Section End -->


@endsection
