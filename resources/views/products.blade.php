@extends('layouts.app')
@section('content')
<div class="container-fluid">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Categorias</h1>
        <form action="" method="get"></form>
          @csrf
          <div class="btn-group dropright">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Filtros
            </button>
          <div class="dropdown-menu">
            <a href="#" class="list-group-item">Talle</a>
            <a href="#" class="list-group-item">Color</a>
            <a href="#" class="list-group-item">Marca</a>
          </div>
          </div>
        </form>
      </div>
    <div class="col-lg-9 col-md-6">

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
<br>
        
      
        <div class="row">
            @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top" style="width:100%; height:30%;" src="/img/{{$product->featured_img}}" alt="">
              <div class="card-body">
                <h4 class="card-title">
                <a href="{{route('product.show',$product->slug)}}">{{$product->name}}</a>
                </h4>
                <h5>{{$product->price}}</h5>
                <p class="card-text"><strong>{{$product->details}}</strong></p>
                <p class="card-text">{{$product->description}}</p>
                  </div>
              <div class="col-lg-4 col-md-6 mb-4">
            </div>
              <div class="card-footer text-center ">
                <small class="text-muted"><a href="{{route('addCart',$product->id)}}"><img class="img-fluid" src="/img/carrito2.png" alt=""></a><br></small>
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