@extends('layout.layout')

@section('title', 'Horarios')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Nomi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('employees.index')}}">Empleados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('schedules.index')}}">Horarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('payrolls.index')}}">Nóminas</a>
      </li>
      
    </ul>
  
  <li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
  </li>
</div>
</nav>

<div class="row">
<div class="col-sm-10"><h2>Horarios</h2></div>
    
</div>



<div class="jumbotron">
    <div class="col-md-12">
        <table id="example1" class="table table-bordered table-hover">
            <thead class="bg-primary">
                <tr>
                    <th>Id</th>
                    <th>Fecha</th>
                    <th>Hora Entrada</th>
                    <th>Hora Salida</th>
                    <th>ID Empleado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            
            <tbody>
            @forelse($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->id }}</td>
                    <td>{{ $schedule->fecha }}</td>
                    <td>{{ $schedule->hora_entrada }}</td>
                    <td>{{ $schedule->hora_salida }}</td>
                    <td>{{ $schedule->empleado_id }}</td>
                    <td> 
                    <a class="btn btn-secondary" href="{{route('schedules.edit', $schedule->id)}}">Editar</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                      Eliminar
                    </button>
                      <form action="{{route('schedules.destroy', $schedule->id)}}" method='post'>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar horario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                ¿Está seguro de eliminar este horario?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </td>
                </tr>
                @empty
                    <div><h3>No hay horarios registrados</h3></div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>



{{ $schedules->links() }}

@endsection