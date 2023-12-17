@extends('layout.layout')
@section('content')
    <h1>Create a Product</h1>
    <div class="w-50">
        <form action="{{ route('product.store') }}" method="post">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="helpId" placeholder="name" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">qty</label>
                <input type="text" class="form-control" name="qty" aria-describedby="helpId" placeholder="qty" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" aria-describedby="helpId" placeholder="price" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="">
            </div>

            <input type="submit" class="form-control w-25 text-primary" value="Submit">

        </form>
    @endsection
