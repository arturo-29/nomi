@extends('layout.layout')

@section('title', 'Login')
@section('content')
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Iniciar sesión</h5>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-label-group">
                <input  id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" placeholder="Usuario" autofocus>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="inputEmail">Usuario</label>
              </div>

              <div class="form-label-group">
                <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password" id="inputPassword"  placeholder="Contraseña">
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <label for="inputPassword">Contraseña</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">Recordar contraseña</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Ingresar</button>
              <hr class="my-4">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>