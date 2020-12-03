@extends('layout.layout')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card text-white bg-secondary mb-3">
              <div class="card-body text-center">
              <h1>Ingresar</h1>
              <p >Control de acceso al sistema</p>
              <div class="form-group mb-3">
                <input type="text" value="" name="" id="" class="form-control" placeholder="Usuario">
              </div>
              <div class="form-group mb-4">
                <input type="password" name="" id="" class="form-control" placeholder="Password">
              </div>
              <div class="row">
                <div class="col">
                  <a href="{{route('employees.index')}}"><button type="submit" class="btn btn-primary form-control ">Acceder</button></a>
                </div>
              </div>
          </div>
        </div>
      </div>

@endsection
