<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="index">
                <div class="card">
                    <div class="container">
                        <h1>{{$single_product->name}}</h1>
                        <p>{{$single_product->price}}</p>
                        <p>({{$single_product->comments}} COMMENTS)</p>
                       <i class='bx bxs-star' id="stars"></i>
                       <i class='bx bxs-star'id="stars"></i>
                       <i class='bx bx-star' id="stars"></i>
                       <i class='bx bx-star' id="stars"></i><br><br>
                       <button><a href="{{route('buy')}}">Buy Now</a></button>
                    </div>
                </div> 
</body>
</html>