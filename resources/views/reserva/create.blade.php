@extends('layouts.app')

@section('content')

<div class="container">
    <div id='date'>
        Calendario
    </div>
</div>

<form action="">
    {{ csrf_field() }}
    <!-- Modal -->
    <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reservar </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <div class="col-sm-10">
            <div class="form-group">
                <label for="subject">Inicio</label>
                <input name="start" type="text" class="form-control" id="start">
            </div>
        </div>
        <div class="col-sm-10">
            <div class="form-group">
                <label for="subject">Final</label>
                <input name="end" type="text" class="form-control" id="end">
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
            <button type="button" class="btn btn-warning" id="btnEditar">Editar</button>
            <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
    </div>
    </div>

</form>

@endsection