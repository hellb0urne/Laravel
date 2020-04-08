@extends('plantilla')

@section('contenido')

<p>
    ID: {{$producto->id}} <br><br>
    Producto: {{$producto->nombre_producto}}
</p>


@stop
