<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="container">
    <h1>Edit a Product</h1>
    <div class="w-50">
        <form action="{{ route('product.update', ['product' => $product]) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $product->name }}"
                    aria-describedby="helpId" placeholder="name" />
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

    </div>

</body>

</html>
