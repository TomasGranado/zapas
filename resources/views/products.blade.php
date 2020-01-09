@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categorias</h1>
        <form action="" method="get"></form>
          @csrf
          <div class="btn-group dropright">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropright
            </button>
          <div class="dropdown-menu">
            <a href="#" class="list-group-item">Talle</a>
            <a href="#" class="list-group-item">Color</a>
            <a href="#" class="list-group-item">Marca</a>
          </div>
          </div>
        </form>
      </div>
    <div class="col-lg-9">

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src=https://lorempixel.com/300/300/?22667 width="400" height="300" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src=https://lorempixel.com/300/300/?22667 width="400" height="300" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src=https://lorempixel.com/300/300/?22667 width="400" height="300" class="d-block w-100" alt="...">
        </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
    </div>
<br>
        
      <form method="GET" action="{{ route('prod2') }}"> 
        @csrf

        <div class="row">
            @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src=https://lorempixel.com/300/300/?22667 alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$product->name}}</a>
                </h4>
                <h5>{{$product->price}}</h5>
                <p class="card-text"><strong>{{$product->details}}</strong></p>
                <p class="card-text">{{$product->description}}</p>
              </div>
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Comprar') }}
                </button>
            </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
            

          </div>
            @endforeach
        </div>
      </form>

      </div>
    

    </div>

  </div>
  
@endsection