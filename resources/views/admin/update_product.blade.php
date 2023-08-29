<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           h1{
            color: gray;
            text-align: center;
           }
           form{
            margin-left: 400px;
            margin-top: 100px;
           }
           input[type="text"]{
            width: 50%;
            height: 50%;
            padding: 15px 15px;
            background-color:darkgray;
            color: white;
    
           }
           input[type="submit"]{
            width: 53%;
            height: 50%;
            padding: 15px 15px;
            background-color: green;
            color: white;
           }
           input[type="submit"]:hover{
               opacity: 0.7;
           }
    </style>
</head>
<body>
    <h1>Update Product</h1>
<form action="{{route('edit_product',$data->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$data->name}}"><br><br><br>
        <input type="text" name="price" value="{{$data->price}}"><br><br><br>
        <input type="file" name="image" value="{{$data->image}}"><br><br><br>
        <input type="text" name="comments" value="{{$data->comments}}"><br><br><br>
        <input type="submit"> 
  
    </form>
</body>
</html>