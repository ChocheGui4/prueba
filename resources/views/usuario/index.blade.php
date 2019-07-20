@extends('layouts.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Registro de usuarios CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('usuario.create') }}"> Nuevo usuario</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Contraseña</th>
            
        </tr>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $usuario->name }}</td>
            <td>{{ $usuario->apellidos }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->password }}</td>
            <td>
                <form action="{{ route('usuario.destroy',$usuario->id) }}" method="POST">
   
                    
    
                    <a class="btn btn-primary" href="{{ route('usuario.edit',$usuario->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  
    {!! $usuarios->links() !!}
      
@endsection