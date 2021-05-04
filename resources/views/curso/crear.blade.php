@extends("layouts.base")

@section("contenido")
<h1>Nuevo Curso</h1>

<form action="{{ route('curso.store') }}" method="post">
    @csrf
    <label for="">Nombre Curso</label>
    <input type="text" name="nombre" class="form-control">
    <br>
    <label for="">Capacidad:</label>
    <input type="number" name="capacidad" class="form-control">
    <br>
    <label for="">Precio</label>
    <input type="number" step="0.01" name="precio" class="form-control">
    <br>

    <label for="">Categoria</label>
    <select name="categoria_id" id="" class="form-control">
        @foreach ($categorias as $cat)        
        <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
        @endforeach
    </select>
    
    <br>
    <label for="">Detalle</label>
    <input type="text" name="detalle" class="form-control">
    <br>
    <input type="submit" value="Guardar Curso">   
    
</form>
    
@endsection