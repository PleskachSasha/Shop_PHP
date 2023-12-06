@extends('layouts.master')

@section('content')
    <div class="card mb-3" style="max-width: 2000px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/{{$product->imagePath}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{$product->title}}</h5>
                <p class="card-text">{{ $product->description }} </p>
                <p class="card-text"><small class="text-body-secondary">Ціна: ${{ $product->price }}</small></p>
                <a href="#"class="btn btn-danger">Купити</a>
            </div>
            </div>
        </div>
    </div>
@endsection