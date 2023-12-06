@extends('layouts.master')

@section('title')
    Shopping Cart
@endsection

@section('content')
    <div class="dropdown mt-2 mx-2">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Сортувати за
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('product.index', ['sort' => 'default']) }}">за популярністю</a></li>
            <li><a class="dropdown-item" href="{{ route('product.index', ['sort' => 'price_asc']) }}">від дешевих</a></li>
            <li><a class="dropdown-item" href="{{ route('product.index', ['sort' => 'price_desc']) }}">від дорогих</a></li>
            <li><a class="dropdown-item" href="{{ route('product.index', ['sort' => 'date']) }}">новинки</a></li>

        </ul>
    </div>

    <div class="row"> 
        @foreach($products->chunk(3) as $productChunk)
            @foreach($productChunk as $product)
                <div class="card" style="width: 25rem;" data-product-id="{{ $product->id }}" onclick="goToProduct(this)"> 
                    <div class="test">
                        <img src="{{$product->imagePath}}" class="card-img-top img-size" alt="..."class="img-responsive"> 
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
            window.location.href = "/product/" + productId;
        }
    </script>

@endsection
