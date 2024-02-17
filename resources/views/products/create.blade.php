<!-- resources/views/products/create.blade.php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Create New Product</h1>
    <form action="{{ url('/products') }}" method="post" style="max-width: 400px; margin: 0 auto;">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label for="price">Price:</label>
        <input type="number" name="price" required style="width: 100%; padding: 8px; margin-bottom: 10px;">
        
        <label for="description">Description:</label>
        <textarea name="description" style="width: 100%; padding: 8px; margin-bottom: 10px;"></textarea>

        <button type="submit" style="background-color: #4caf50; color: white; padding: 10px; border: none; cursor: pointer;">Create Product</button>
    </form>
    <a href="{{ url('/products') }}" style="display: block; text-align: center; margin-top: 10px;">Back to Products</a>
</body>
</html>