@extends('layouts.base')

@section('content')
<div class="row mt-3">
    <div class="col">
        <form action="{{ route('auth') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="usuario">Nombre</label>
                <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario">
            </div>
            @error('usuario')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass">
            </div>
            @error('pass')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('login')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</div>
@stop
