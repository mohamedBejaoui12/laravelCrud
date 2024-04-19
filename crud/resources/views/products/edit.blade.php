<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a Product</h1>

    <form method="post" action="{{route('product.update',['product'=>$product])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <div>
            <label for="Qty">Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}">
        </div>
        <div>
            <label for="Price">Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->qty}}">
        </div>
        <div>
            <label for="Description">Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}">
        </div>


        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>