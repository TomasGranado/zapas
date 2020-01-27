@extends('layouts.app')
@section('content')
<h2><strong>Lista Productos</strong></h2>
<a href="{{route('newProduct')}}" class="text-right">Agregar Productos</a> 
<br>
<br>
<ul class="list-group">  
@foreach($products as $product) 
    <li class="list-group-item list-group-item-action">
        <img src="https://via.placeholder.com/150" alt="">
        {{$product->name}}
        <a href="#" class="d-flex justify-content-end iconEdit"><i class="fas fa-edit"></i></a>
        <a href="#" class="d-flex justify-content-end iconDelete"><i class="far fa-trash-alt"></i></a>
    </li>
@endforeach
</ul>
@endsection