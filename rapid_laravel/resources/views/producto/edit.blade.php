@extends('plantilla')

@section('contenido')

<p>
<h4>Editar Producto</h4>
    
<form action="{{route('producto.update', $producto->id)}}" method="post">
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
    <input type="text" name="nombre" value="{{$producto->nombre_producto}}"/>
    <button type="submit">
        Edit
    </button>
    
    
</form>

</p>
@stop
