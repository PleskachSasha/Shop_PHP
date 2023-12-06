@extends('layouts.master')

@section('content')
    <div class="row"> 
        @foreach($products->chunk(3) as $productChunk)
            @foreach($productChunk as $product)
                <div class="card" style="width: 25rem;" data-product-id="{{ $product->id }}" onclick="goToProduct(this)"> 
                    <div class="test">
                        <img src="/{{$product->imagePath}}" class="card-img-top img-size" alt="..."class="img-responsive"> 
                    </div>
                    <div class="card-body" >
                        <h5 class="card-title">{{$product->title}}</h5> 
                        <div class="pull-left price">{{$product->price}}$</div> 
                        <a href="#"class="btn btn-danger pull-right">Купити</a> 
                    </div> 
                </div>   
            @endforeach
        @endforeach  
    </div>

    <script>
        function goToProduct(element) {
            var productId = element.getAttribute("data-product-id");
            window.location.href = "/admin/product/" + productId;
        }
    </script>

@endsection
