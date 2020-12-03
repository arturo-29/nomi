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
<div class="col-sm-10"><h2>Nóminas</h2></div>
</div>



<div class="jumbotron">
    <div class="col-md-12">
        <table id="example1" class="table table-bordered table-hover">
            <thead class="bg-primary">
                <tr>
                    <th>Id</th>
                    <th>Id Empleado</th>
                    <th>Id Horario</th>
                    <th>Calculado</th>
                    
                </tr>
            </thead>
            
            <tbody>
              @forelse($payrolls as $payroll)
                <tr>
                    <td>{{ $payroll->id }}</td>
                    <td>{{ $payroll->empleado_id }}</td>
                    <td>{{ $payroll->horario_id }}</td>
                </tr>
                @empty
                    <div><h3>No hay nóminas generadas</h3></div>
                @endforelse
            </tbody>
        </table>
    </div>
</div>



{{ $payrolls->links() }}

@endsection