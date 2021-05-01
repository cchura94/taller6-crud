<h1>Editar Categoria</h1>

<form action="/categoria/{{ $cat->id }}" method="post">
    @csrf
    @method("PUT")
    <label for="">NOMBRE de CATEGORIA</label>
    <input type="text" name="nombre" value="{{ $cat->nombre }}">
    <br>

    <label for="">DETALLE de CATEGORIA</label>
    <input type="text" name="detalle" value="{{ $cat->detalle }}">
    
    <br>
    <input type="submit" value="MODIFICAR">
</form>