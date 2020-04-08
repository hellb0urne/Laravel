@extends('plantilla')

@section('contenido')

<h4>
    Mis Productos
</h4>

<table border = '1'>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Editar</th>

    </tr>
    @foreach($productos as $p)
    <tr>
        <td>{{$p->id}}</td>
        <td>{{$p->nombre_producto}}</td>
        <td>
            <a href="{{route('producto.edit',$p->id)}}">Editar</a>

            <form action="{{route('producto.destroy',$p->id)}}" method="post">
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>

    @endforeach
</table>

@stop