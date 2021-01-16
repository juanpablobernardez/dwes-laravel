@extends('layouts.base')

@section('navbar')
    @if(session()->get('rol')=='alumno')
        @include('includes.alumno.navbar')
    @endif

    @if(session()->get('rol')=='profesor')
        @include('includes.profesor.navbar')
    @endif
@stop


