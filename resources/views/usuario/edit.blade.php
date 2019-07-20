@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    
    <div class="row" >
      <div class="col-4">
        <div class="pull-left">
          <h2>
            Editar 
          </h2>    
        </div>
      </div>
      <div class="col-4">
        <div class="pull-right">
          <a class="btn btn-danger" href="{{ route('usuario.index') }}"> Back</a>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('usuario.update', $usuario->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Nombre:gyyggg:</label>
          <input type="text" class="form-control" name="name" value={{ $usuario->name }} />
        </div>
        <div class="form-group">
          <label for="price">Apellidos :</label>
          <input type="text" class="form-control" name="apellidos" value={{ $usuario->apellidos }} />
        </div>
        <div class="form-group">
          <label for="quantity">Correo:</label>
          <input type="text" class="form-control" name="email" value={{ $usuario->email }} />
        </div>
        <div class="form-group">
          <label for="quantity">Contraseña:</label>
          <input type="text" class="form-control" name="password" value={{ $usuario->password }} />
        </div>
            <div class="pull-left">
            <button type="submit" class="btn btn-primary">Modificar</button>
            </div>
         
      </form>
  </div>
</div>
@endsection