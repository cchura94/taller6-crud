@extends("layouts.base")

@section("contenido")

<h1>Lista Categoria</h1>

<a href="/categoria/crear" class="btn btn-primary">Nueva Categoria</a>

<form action="/categoria" method="get">
<div class="row">
    <div class="col-md-8">
    <input type="text" name="buscar" class="form-control">
    </div>
    <div class="col-md-4">
    <input type="submit" value="buscar" class="btn btn-warning">
    </div>

</div>
    
     
</form>
<table class="table table-hover table-striped">
    <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>DETALLE</td>
        <td>ACCIONES</td>
    </tr>

@foreach ($categorias as $cat )    
    <tr>
        <td>{{ $cat->id }}</td>
        <td>{{ $cat->nombre }}</td>
        <td>{{ $cat->detalle }}</td>
        <td>
            <a href="/categoria/{{ $cat->id }}" class="btn btn-success">Mostrar</a>
            <a href="/categoria/{{ $cat->id }}/editar" class="btn btn-warning">Editar</a>

            

            <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal{{ $cat->id }}">
  eliminar
</button>

<!-- Modal -->
<div class="modal fade" id="Modal{{ $cat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR CATEGORIA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Está seguro de eliminar la categoria {{ $cat->nombre }}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <form action="/categoria/{{ $cat->id }}" method="post">
                @csrf
                @method("DELETE")
                <input type="submit" value="eliminar" class="btn btn-danger">
            </form>
      </div>
    </div>
  </div>
</div>
        </td>
    </tr>
@endforeach
</table>


@endsection