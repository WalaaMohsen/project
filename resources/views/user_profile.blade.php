<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: coral;
        }
        .data_user{
            border:1px solid ;
            width: 30%;
            height: 30%;
            border-radius:50%;
            background-color: white;
            margin-left: 380px;
            margin-top: 100px;
        }
        .data_user p{
            text-align: center;
            padding:10px 10px;      
        }
        .data_product{
            width: 200px;
            height: 200px;
            box-shadow: black;
            margin-left: 450px;
            margin-top: 100px;
            padding: 20px 20px;
            background-color: white;
            color: black;
        }
        .data_product p{
            display: inline;
        }

        
        
    </style>
</head>
<body>
     
@foreach($profile as $post)
    <div class="data_user">
        <p>{{$post->name}}</p><br>
        <p>{{$post->email}}</p><br>
        <p>{{$post->address}}</p><br>
        <p>{{$post->phone}}</p><br>
    </div>
@endforeach

@foreach($profile as $post)
    <div class="data_product">
       product: <p>{{$post->product_name}}</p><br><br>
       Quantity: <p>{{$post->quantity}}</p><br><br>
       Price: <p>{{$post->price}}</p>
    </div>
@endforeach

    
 
    
    
</body>
</html>