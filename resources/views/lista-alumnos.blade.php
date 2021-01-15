@extends('home')

@section('content')
<div class="col-md-10">
    <div class="row">
        <div class="col-md-8">
            <div class="content-box-large">
                <div class="panel-body">
                <legend>Listado de alumnos</legend>
                <br>
                <br>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="example">
                        <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Baja</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($alumnos as $alumno)
                            @if($alumno->activo)
                                <tr class="danger">
                            @else
                                <tr>
                            @endif
                                <td>{{ $alumno->curso }}</td>
                                <td>{{ $alumno->usuario }}</td>
                                <td>{{ $alumno->nombre }}</td>
                                <td>{{ $alumno->apellidos }}</td>
                            @if($alumno->activo)
                                <td>Baja</td>
                            @else
                                <td></td>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@stop
