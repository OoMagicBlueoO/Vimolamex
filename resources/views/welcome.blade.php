{{-- Extendiendo plantilla --}}
@extends('layouts.app')
{{-- Extendiendo Titulo --}}
@section('title','Inicio |')
{{-- Extendiendo indice en el menu --}}
@section('selected-inicio','active-menu')
{{-- Contenido de la pagina --}}
@section('define')
  @include('landing.header',['selected'=>'inicio'])
  @include('landing.cards')
  @include('landing.info')
  @include('landing.action')
  @include('landing.footer')
@endsection
