<h1>Nueva Categoria</h1>

<form action="/categoria" method="post">
    @csrf
    <label for="">NOMBRE de CATEGORIA</label>
    <input type="text" name="nombre">
    <br>

    <label for="">DETALLE de CATEGORIA</label>
    <input type="text" name="detalle">
    
    <br>
    <input type="submit">
</form>