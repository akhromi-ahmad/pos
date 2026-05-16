<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
</head>
<body>
    <h1>Product Detail</h1>

    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Price:</strong> {{ number_format($product->price, 2) }}</p>
    <p><strong>Stock:</strong> {{ $product->stock }}</p>

    <p>
        <a href="{{ route('products.edit', $product) }}">Edit</a>
        <a href="{{ route('products.index') }}">Back</a>
    </p>
</body>
</html>
