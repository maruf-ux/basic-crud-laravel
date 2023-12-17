@extends('layout.layout')
@section('content')
    <div class="d-flex justify-content-between my-2">
        <h1>Product</h1>
        <div class="create">
            <a href="{{ route('product.create') }}"> Create a new product</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="">

                        <td scope="row">{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('product.edit', ['product' => $product]) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                                edit
                            </a>
                            <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                                @csrf
                                <i class="fa-solid fa-trash"></i>
                                <input type="submit" value="delete" class="bg-danger px-3 py-1">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        @endsection
