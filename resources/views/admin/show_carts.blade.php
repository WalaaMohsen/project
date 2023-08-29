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
        table{
            width: 1000px;
            background-color:darkgreen;
            opacity: 0.8;
            margin-left: 150px;
            margin-top: 70px;
            box-shadow: darkgreen;
        }
        table th{
            background-color: white;
        }
        table button{
            border: none;
            width: 100px;
            padding:5px 5px;
            background-color: black;
            margin-top: 10px;
            margin-left: 80px;
            color: white;
        }
        table button:hover{
            opacity: 0.7;
        }
        table td{
            padding: 5px 5px;
        }
        table td:hover{
            background-color: white;
        }
        .add{
            margin-left: 100px;
            float: right;

        }
        .add button{
            padding: 15px 15px;
            background-color: green;
            width: 150px;
            color: white;
            margin-bottom: 50px;
            margin-right:30px ;
        }
        .add button:hover{
            opacity: 0.7;
        }

             
    </style>
</head>
<body>
<h1>Show All Carts</h1>
              
<table>

<tr>
  <th>Name_user</th>
  <th>Email</th>
  <th>Phone_Number</th>
  <th>Address</th>
  <th>Product_Name</th>
  <th>Quantity</th>
  <th>Product_Price</th>
 </tr>
 @foreach($data as $data) 
     <tr>
         <td>{{$data->name}}</td>
         <td>{{$data->email}}</td>
         <td>{{$data->phone}}</td>
         <td>{{$data->address}}</td>
         <td>{{$data->product_name}}</td>
         <td>{{$data->quantity}}</td>
         <td>{{$data->price}}</td>
     </tr>  
  @endforeach
</table> 
    
</body>
</html>