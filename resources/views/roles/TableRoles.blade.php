@extends('layouts.app')

@section("libros")
    active
@endsection
@section("content")
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center">Roles Existentes<br></h1>
        </div>
      </div>
        <div class="col-md-12 text-center">
          @can('crear-rol')
          <a href="{{route('roles.create')}}" class="btn btn-success mb-3" href="libros/create">Nuevo registro</a>
              @endcan  
        </div>
      <div class="row d-flex justify-content-center">
         <div class="col-6 d-flex justify-content-center">
            <table class="table table-bordered ">
              <thead class="thead-dark">
                <tr>
                  <th>ID</th>
                  <th>Rol</th>
                  <th>Opciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($roles as $datos)
                <tr>
                  <th>{{$loop->index+1}}</th>
                  <td>{{$datos->name}}</td>
                  <td>
                    @can('editar-rol')
                      <a class="btn btn-warning text-capitalize" href="{{route('roles.edit',$datos->id)}}"> Editar </a>
                      @endcan
                      @can('borrar-rol')
                      <form action="{{route('roles.destroy',$datos->id)}}" method="post">
                        @csrf
                        @method('delete') 
                        <button class="btn btn-danger text-capitalize border border-left border-right border-top border-bottom border-light rounded-lg active text-decoration-none py-1"
                         type="submit"> Borrar
                      </button>
                      </form>
                      @endcan
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
         </div>
      </div>
    </div>
  </div>
@endsection
