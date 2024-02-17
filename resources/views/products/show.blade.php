<!-- resources/views/products/show.blade.php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Product Details</h1>
    <div style="max-width: 400px; margin: 0 auto;">
        <p><strong>Name:</strong> {{ $product->name }}</p>
        <p><strong>Price:</strong> ${{ $product->price }}</p>
        <p><strong>Description:</strong> {{ $product->description }}</p>
    </div>
    <div style="text-align: center; margin-top: 10px;">
        <a href="{{ url('/products') }}" style="background-color: #4caf50; color: white; padding: 10px; text-decoration: none;">Back to Products</a>
    </div>
</body>
</html>