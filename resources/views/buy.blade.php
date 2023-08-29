<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:cadetblue;
            
        }
        form{
            border: 1px solid;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            width: 250px;
            height: 500px;
            background-color: white;
            margin-left: 450px;
            margin-top:150px;
            padding: 20px 30px;
        }
    </style>
</head>
<body>
    <form action="{{route('add_cart')}}" method="get">
        @csrf
        <label>Your Name</label><br>
        <input type="text" name="name"><br><br>
        <label>Your Email</label><br>
        <input type="email" name="email"><br><br>
        <label>Your Phone</label><br>
        <input type="text" name="phone"><br><br>
        <label>Your Address</label><br>
        <input type="address" name="address"><br><br>
        <label>Product Name</label><br>
        <input type="text" name="product"><br><br>
        <label>Quantity</label><br>
        <input type="text" name="quantity"><br><br>
        <label>Price</label><br>
        <input type="text" name="price"><br><br>
        <label>Credit Card</label><br>
        <input type="pass" name="credit"><br><br>
        <input type="submit" value="Buy">

    </form>
</body>
</html>