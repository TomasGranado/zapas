@extends('layouts.app')
@section('content')
<h2><strong>Lista Productos</strong></h2>
<a href="{{route('addProduct')}}" class="text-right">Agregar Productos</a> 
<br>
<br>
<ul class="list-group">  
@foreach($products as $product) 
    <li class="list-group-item list-group-item-action">
        <div class="card h-100 cambioCaja">
              <img class="card-img-top" style="width:20%; height:10%;" src="/img/{{$product->featured_img}}" alt="">
              <div class="card-body">
        {{$product->name}}
        <a href="{{route('editP', $product->id)}}" class="d-flex justify-content-end iconEdit"><i class="fas fa-edit"></i></a>
        <a href="{{route('deleteP',$product->id)}}" class="d-flex justify-content-end iconDelete"><i class="far fa-trash-alt"></i></a>
    </li>
@endforeach
</ul>
@endsection