@extends('layouts.app')
@section('content')
<h3>Productos comprados</h3>

<div class="row">
    @foreach($products as $product)
  <div class="col-lg-2 col-md-4 mb-2">
    <div class="card h-100">
      {{-- <img class="card-img-top" src="{{ asset("storage/app/$product->featured_img")}}" alt=""> --}}
      <img class="card-img-top" style="width:100%; height:30%;" src="/img/{{$product->featured_img}}" alt="">
      <div class="card-body">
        <h4 class="card-title">
        <a href="#">{{$product->name}}</a>
        </h4>
        <h5>{{$product->price}}</h5>
        <p class="card-text">{{$product->description}}</p>

      </div>
      <div class="col-md-4 offset-md-2">
       
    </div>
      <div class="card-footer">
        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
      </div>
    </div>
  </div>
    @endforeach
    
</div>
@endsection