@extends('plantilla')

@section('contenido')

<p>
<h4>Nuevo Producto</h4>
    
<form action="{{route('producto.store')}}" method="post">
    {!! csrf_field() !!}
    <input type="text" name="nombre" placeholder="nombre">
    <button type="submit">
        Crear
    </button>
    
    
</form>
<br><br>
@if(session()->has("msg"))
{{session("msg")}}
@endif


</p>
@stop
