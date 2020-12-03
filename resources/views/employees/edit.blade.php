@extends('layout.layout')

@section('title', 'Editar Empleado')
@section('content')

<div class="row">
<div class="col-sm-10"><h1>Editar empleado</h1></div>
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
<form method="post" action="{{ route('employees.update', $employee->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label for="">Nombre</label>
        <input class="form-control" type="text" value="{{ $employee->name }}" name="name" id="" required maxlength="50">
    </div>
    <div>
        <label for="">Apellidos</label>
        <input class="form-control" type="text" value="{{ $employee->lastname }}" name="lastname" id="" required maxlength="50">
    </div>
    <div>
        <label for="">Salario</label>
        <input class="form-control" type="number" value="{{ $employee->salary }}" name="salary" id="" required >
    </div>
    <div>
        <label for="">Puesto</label>
        <input class="form-control" type="text" value="{{ $employee->stall }}" name="stall" id="" required maxlength="50">
    </div>
    <div>
        <label for="">CURP</label>
        <input class="form-control" type="text" value="{{ $employee->CURP }}" name="CURP" id="" required maxlength="20">
    </div>
    <div>
        <label for="">¿Cuenta con seguro social?</label>
        <select class="form-control" name="available" id="" required>
            <option value="">Seleccione una opción</option>
            <option value="1">Sí</option>
            <option value="0">No</option>
        </select>
    </div>
    <br><br>
    <input class="btn btn-primary" type="submit" value="Guardar cambios">
</form>
</div>

@endsection