{{-- Extendiendo plantilla --}}
@extends('layouts.panel')
{{-- Extendiendo Titulo --}}
@section('title','Iniciar Sesión |')
{{-- Extendiendo indice en el menu --}}
@section('selected-sesion','active-menu')
{{-- Contenido de la pagina --}}
@section('content')
  <section class="container-fluid">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6 fill-background-login">
        <div class="color-background" ></div>
        <div id="particles-js"></div>
      </div>
      <div class="col-1 hidden-sm-down"></div>
      <div class="col-12 col-lg-4 text-center">
        <article>
          <div class="title-general mb-2"><a href="/"><i class="fa fa-globe"></i> Comercializadora Vimolamex</a></div>
          <p class="text-muted mb-5">Bienvenido de regreso! Por favor inicie sesión en su cuenta.</p>

          <form @submit.prevent="submit" method="POST" id="form">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                <label for="email" class="col-12 form-control-label text-left"><i class="fa fa-user-circle"></i> Nombre de Usuario</label>
                <div class="col-12">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>
                  @if ($errors->has('email'))
                      <p class="form-control-feedback">
                          <strong>{{ $errors->first('email') }}</strong>
                      </p>
                  @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
              <label for="password" class="col-12 form-control-label text-left"><i class="fa fa-key"></i> Contraseña</label>
              <div class="col-12">
                  <input id="password" type="password" class="form-control" name="password" >
                  @if ($errors->has('password'))
                      <p class="form-control-feedback">
                          <strong>{{ $errors->first('password') }}</strong>
                      </p>
                  @endif
              </div>
            </div>
              <div class="form-group{{ $errors ? ' has-danger' : '' }}">
                  @if ($errors->has('failed'))
                    <div class="form-group text-center">
                      <div class="col-12">
                      <p class="form-control-feedback">
                          <strong>{{ $errors->first('failed') }}</strong>
                      </p>
                    </div>
                  </div>
                  @endif
            </div>
            <div class="form-group text-center">
              <div class="col-12">
                <a class="btn btn-link" href="#">¿Olvidaste tu Contraseña?</a>
              </div>
              <button type="submit" class="btn btn-primary handler">Entrar</button>
            </div>

            <div class="text-center">
            </div>
          </form>
        </article>
      </div>
      <div class="col-1 hidden-sm-down"></div>
    </div>
  </section>
@endsection
