<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        body{
            width: auto;
            background-image: url('images/bag2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            text-align: center;
            color: green;
        }
        form{
            display: inline;
            margin-left: 80px;
            
        }
        form button{
            background-color: green;
            color: white;
            width: 150px;
            margin-top: 100px;
            padding: 20px 15px;
            box-shadow: black;
        }
        form button:hover{
            background-color: white;
            color: black;
            box-shadow: green;
        }

        
        
    </style>
</head>
<body>
      <h1>Welcome Admin</h1>
      <form  method="get" action="{{route('show')}}">
           @csrf
           <button type="submit">Show All Users</button>
      </form>
      <form  method="get" action="{{route('show_products')}}">
           @csrf
           <button type="submit">Show All Products</button>
      </form>
      <form  method="get" action="{{route('show_order')}}">
           @csrf
           <button type="submit" >Show All Orders</button>
      </form>
      <form  method="get" action="{{route('show_carts')}}">
           @csrf
           <button type="submit">Show All Carts</button>
      </form>
      <form  method="get" action="{{route('notes_user')}}">
           @csrf
           <button type="submit">Show Notes_user</button>
      </form>
</body>
</html>