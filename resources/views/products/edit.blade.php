@extends('layout.layout')
@section('content')
    <h1>Edit a Product</h1>
    <div class="w-50">
        <form action="{{ route('product.update', ['product' => $product]) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}" aria-describedby="helpId"
                    placeholder="name" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">qty</label>
                <input type="text" class="form-control" name="qty" value="{{ $product->qty }}"
                    aria-describedby="helpId" placeholder="qty" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{ $product->price }}"
                    aria-describedby="helpId" placeholder="price" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" value="{{ $product->description }}"
                    id="">
            </div>

            <input type="submit" class="form-control w-25 text-primary" value="Submit">

        </form>
    @endsection
