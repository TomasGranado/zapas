@extends('layouts.app')
@section('content')
<h2><strong>Lista Productos</strong></h2>
<a href="{{route('newProduct')}}" class="text-right">Agregar Productos</a> 
<br>
<br>
@foreach($products as $product)
<ul class="list-group">   
    <li class="list-group-item list-group-item-action">
        <img src="{{$product->featured_img}}" alt="">
        {{$product->name}}
        <a href="#" class="d-flex justify-content-end">Editar</a>
        <a href="#" class="d-flex justify-content-end">Eliminar</a>
    </li>
</ul>    
@endforeach
@endsection