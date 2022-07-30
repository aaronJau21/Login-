@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{url('/producto')}}" method="POST">
@csrf
@include('producto.form',['modo'=>'Crear']);

</form>
</div>
@endsection