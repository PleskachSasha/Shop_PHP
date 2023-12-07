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
                <p class="card-text"><small class="text-body-secondary">Ціна: $фіавфіа{{ $product->price }}</small></p>
                <a href="#"class="btn btn-danger">Купити</a>
            </div>
            </div>
        </div>
    </div>

     <!-- Форма для оновлення даних -->
     <div>
    <form method="post" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="new_imagePath" class="form-label">Новий foto</label>
            <input type="text" class="form-control" id="new_imagePath" name="new_imagePath">
        </div>

        <div class="mb-3">
            <label for="new_title" class="form-label">Новий заголовок</label>
            <input type="text" class="form-control" id="new_title" name="new_title">
        </div>

        <div class="mb-3">
            <label for="new_description" class="form-label">Новий опис</label>
            <textarea class="form-control" id="new_description" name="new_description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="new_price" class="form-label">Нова ціна</label>
            <input type="number" class="form-control" id="new_price" name="new_price">
        </div>

        <button type="submit" class="btn btn-primary">Оновити дані</button>
    </form>
    <a href="#" class="btn btn-danger">Купити</a>
</div>
@endsection