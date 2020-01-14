@extends('layouts.app')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Carga de articulo') }}</div>
                <div class="card-body">
                    <form method="POST" action="/crudProduct">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('slug') }}</label>
                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required autocomplete="slug" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Detalle') }}</label>
                            <div class="col-md-6">
                                <input id="details" type="text" class="form-control @error('details') is-invalid @enderror" name="details" value="{{ old('details') }}" required autocomplete="details">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>
                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="featured_img" class="col-md-4 col-form-label text-md-right">{{ __('featured_img URL') }}</label>
                            <div class="col-md-6">
                                <input id="featured_img" type="file" class="form-control @error('featured_img') is-invalid @enderror" name="featured_img" value="{{ old('featured_img') }}" required autocomplete="featured_img">
                            </div>
                        </div> 

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cargar') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection