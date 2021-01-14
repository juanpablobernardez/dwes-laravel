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
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form-group">
                <label for="pass">Contraseña</label>
                <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass">
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</div>
@stop
