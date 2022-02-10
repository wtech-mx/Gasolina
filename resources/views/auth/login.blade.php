@extends('layouts.app')
@section('css-custom')
<link rel="stylesheet" href="{{ asset('assets/css/forms.css') }}">
@endsection
@section('content')

    <div class="box">
        <div class="row limit-content">
            <div class="col-12 d-flex justify-content-center mt-5">
                <img src="assets/img/gas-statia.png" style="width: 200px;">
            </div>

            <div class="col-12 d-flex justify-content-start text-white">
                <h1 class="p-3">Iniciar sesion</h1>
            </div>

            <div class="col-12">
                <form class="p-3" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group" style="position: relative;">
                        <i class="fa fa-star fa-envelope icon-style"></i>
                        <label class="form-label label-custom-yellow">Correo</label>
                        <input class="form-control  @error('email') is-invalid @enderror input-style" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="form-group mt-5" style="position: relative;">
                            <i class="fa fa-star fa-lock icon-style"></i>
                            <label class="form-label label-custom-yellow">Contraseña</label>
                            <input class="form-control @error('password') is-invalid @enderror input-style" type="password" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <button type="submit" class="add">Iniciar Sesion</button>
                </form>
            </div>

            <div class="col-12 offset-0 text-center">
                 @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-white" style="font-size: 13px;color: #ffd60a!important;margin-bottom: 3rem;" >
                        Se te olvido la contraseña?
                    </a>
                @endif
            </div>
        </div>
    </div>



@endsection
