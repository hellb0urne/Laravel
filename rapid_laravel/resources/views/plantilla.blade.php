<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

OTRAS VISTAS USARAN ESTA PLANTILLA 
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          
        <a href="{{route('producto.create')}}">Nuevo</a>
        <a href="{{route('producto.index')}}">Productos</a>

        @yield('contenido')  


    </body>
</html>
