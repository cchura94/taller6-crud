@extends("layouts.base")

@section("contenido")
<h1>Lista Cursos</h1>

{{ $listacursos }}

<a href="/curso/create" class="btn btn-info">Nuevo Curso</a> | 
<a href="{{ route('curso.create') }}" class="btn btn-info">Nuevo Curso 2</a> |
<a href="{{ url('/curso/create') }}" class="btn btn-info"> Nuevo Curso 3</a>

@auth
    // verdad
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>CATEGORIA</th>
            <th>ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listacursos as $curso)        
        <tr>
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->nombre }}</td>
            <td>{{ $curso->precio }}</td>
            <td>{{ $curso->categoria->nombre }}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>

</table>

@else
   <h1>No puedes ver los datos (Inicia sesion)</h1>
@endauth
@endsection