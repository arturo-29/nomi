@extends('layout.layout')

@section('title', 'Agregar Horario')
@section('content')

<div class="row">
<div class="col-sm-10"><h1>Horario</h1></div>
<div class="col-sm-2">
<!-- Button trigger modal -->

<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Cancelar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancelar operación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Está seguro de cancelar esta operación?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a href="{{ route('employees.index') }}"><button type="button" class="btn btn-danger">Continuar</button></a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="jumbotron">
<form method="post" action="{{ route('schedules.store') }}">
    @csrf

    <div>
      <label for="">Identificador de Empleado</label>
      <input class="form-control" type="number"  name="empleado_id" id="" required maxlength="50">
    </div>
    <div>
        <label for="">Fecha</label>
        <input class="form-control" type="date" name="fecha" id="" required maxlength="50">
    </div>
    <div>
        <label for="">Hora de entrada</label>
        <input class="form-control" type="time" name="hora_entrada" id="" required >
    </div>
    <div>
        <label for="">Hora de salida</label>
        <input class="form-control" type="time" name="hora_salida" id="" required >
    </div>
    
    <br><br>
    <input class="btn btn-primary" type="submit" value="Guardar">
        
</form>
</div>

@endsection