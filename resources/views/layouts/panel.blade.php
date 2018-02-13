{{-- Extendiendo plantilla --}}
@extends('layouts.app')
@section('define')
  <section>
    <div class="container-fluid">
      <div class="row container-menu-dashboard">
        <div class="col-3 container-menu">
          <div class="menu-dashboard">
            <h6 class="text-center"><i class="fa fa-globe"></i> Comercializadora Vimolamex</h6>
            <ul class="list-group">
              <li class="list-group-item @yield('selected-dashboard')"><a href="/Admin"><i class="fa fa-briefcase">&nbsp;</i> Panel de Control</a></li>
              <li class="list-group-item @yield('selected-siniestros')"><a href="/Admin/Siniestros"><i class="fa fa-wrench">&nbsp;</i> Siniestros</a></li>
              <li class="list-group-item @yield('selected-calendario')"><a href="/Admin/Calendario"><i class="fa fa-calendar">&nbsp;</i> Calendario</a></li>
              <li class="list-group-item @yield('selected-mensajes')"><a href="/Admin/Mensajes"><i class="fa fa-comments-o">&nbsp;</i> Mensajes</a></li>
              <li class="list-group-item @yield('selected-archivos')"><a href="/Admin/Archivos"><i class="fa fa-archive">&nbsp;</i> Archivos</a></li>
              <li class="list-group-item @yield('selected-estadisticas')"><a href="/Admin/Estadisticas"><i class="fa fa-bar-chart">&nbsp;</i> Estadisticas</a></li>
              <li class="list-group-item"><a href="/Logout"><i class="fa fa-lock">&nbsp;</i> Cerrar Sesión</a></li>
            </ul>
          </div>
        </div>
        <div class="col-9 container-bar">
          <nav class="navbar sticky-top navbar-light top-nav-panel">
            <form class="form-inline d-flex align-items-center">
              <i class="fa fa-search"></i>
              <input class="mr-sm-2 top-bar-input" type="text" placeholder="Buscar Siniestro...">
              <ul class="nav right-top-bar justify-content-end">
                <li class="nav-link"><i class="fa fa-bell">&nbsp;</i></li>
                <li class="nav-link"><i class="fa fa-comments-o">&nbsp;</i></li>
                <li class="nav-link">{{$user->username}}</li>
                <li class="nav-link">|
                  <img src="{{asset('/img/avatar-img.png')}}" alt="Avatar" class="avatar-img" />
                </li>
              </ul>
            </form>
          </nav>
          <article class="">
            @yield('content')
          </article>
        </div>
      </div>
    </div>
  </section>
@endsection
