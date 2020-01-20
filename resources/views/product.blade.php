@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="col-lg-9 mx-auto">
        <div class="card mt-4 border-light">
          <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
          <div class="card-body">
            <h3 class="card-title">{{$product->name}}</h3>
            <h4>{{$product->price}}</h4>
            <p class="card-text">{{$product->description}}!</p>
            <div class="text-right ">
                <a href="{{route('addCart',$product->id)}}"><img class="img-fluid" src="/img/carrito2.png" alt=""></a>
                <br>
            </div>
        </div>
    </div>
</div>        
@endsection