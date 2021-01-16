@extends('home')

@section('content')
<div class="col-md-10">
<br><br><br>
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
                            <th>curso</th>
                            <th>usuario</th>
                            <th>nombre</th>
                            <th>apellidos</th>
                            <th>activo</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($alumnos as $alumno)
                            @if($alumno->activo)
                                <tr style="background-color: #f05454;">
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
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
$('#example').DataTable();
</script>
@stop
