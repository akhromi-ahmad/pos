<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <p>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </p>
        <p>
            <label for="price">Price</label>
            <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" min="0" required>
        </p>
        <p>
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" value="{{ old('stock') }}" min="0" required>
        </p>
        <button type="submit">Save</button>
    </form>

    <p><a href="{{ route('products.index') }}">Back</a></p>
</body>
</html>
