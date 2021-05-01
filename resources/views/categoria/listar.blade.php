<h1>Lista Categoria</h1>

<a href="/categoria/crear">Nueva Categoria</a>

<form action="/categoria" method="get">
    <input type="text" name="buscar">
     <input type="submit" value="buscar">
</form>
<table border=1>
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
            <a href="/categoria/{{ $cat->id }}">Mostrar</a>
            <a href="/categoria/{{ $cat->id }}/editar">Editar</a>

            <form action="/categoria/{{ $cat->id }}" method="post">
                @csrf
                @method("DELETE")
                <input type="submit" value="eliminar">
            </form>
        </td>
    </tr>
@endforeach
</table>