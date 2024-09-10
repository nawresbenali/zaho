@extends('theme2')
@section('abc')



        <div class="breadcrumb-wrap br-13 bg-f">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Mon compte</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{url('/')}}">Acceuil </a></li>
                        <li>Mon compte
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="Login-wrap pt-100 pb-75">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class="login-form-wrap">
                            <div class="login-header">

                                <h3>Connectez-vous à votre compte</h3>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe
') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Souviens-toi de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-two w-100 d-block">
                                    {{ __('connecter') }}
                                </button>


                                {{--@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif--}}
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login-form-wrap">
                            <div class="login-header">
                                <h3>Registre</h3>
                                <form class="login-form"method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="col-lg-12">
                                        <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                                        <div class="form-group">
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"placeholder="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                                        <div class="form-group">
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"placeholder="enter mod de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input  type="hidden" class="form-control" name="role" placeholder="role" value="passager">

                        <div class="col-lg-12">
                                        <div class="form-group">
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password-confirm">
                            </div>
                        </div>
                        <div class="col-lg-12">
                                        <div class="form-group">
                            <div class="col-md-6">
                        <input  type="hidden" name="role" value="passager">
</div>
</div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn-two w-100 d-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                            </div>
                            @yield('registerTheme')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href ="registreconducteur"><button  class="btn btn-danger">registre conducteur</button></a>


@endsection
