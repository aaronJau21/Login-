@extends('layouts.app')
@section('content')
<div class="container">
@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<a href="{{url('producto/create')}}">Registrar nuevo Producto</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->precio}}</td>
            <td>{{$producto->stock}}</td>
            <td>
            <a href="{{url('/producto/'.$producto->id.'/edit')}}">
                Editar
                </a> 
                |
                <form action="{{url('/producto/'.$producto->id)}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('Quieres borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection