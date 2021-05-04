
@extends("layouts.base")

@section("contenido")

<h1>Nueva Categoria</h1>

<form action="/categoria" method="post">
    @csrf
    <label for="">NOMBRE de CATEGORIA</label>
    <input type="text" name="nombre" class="form-control">
    <br>

    <label for="">DETALLE de CATEGORIA</label>
    <input type="text" name="detalle" class="form-control">
    
    <br>
    <input type="submit" class="btn btn-success">
</form>
@endsection