@extends('layouts.base')

@section('navbar')
    @if($rol=='alumno')
        @include('includes.alumno.navbar')
    @endif

    @if($rol=='profesor')
        @include('includes.profesor.navbar')
    @endif
@stop


