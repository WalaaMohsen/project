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
<h1>Show All Products</h1>
              <form  action="{{route('show_form_add_product')}}" class="add">
                             <button>Add New Product</button>
              </form>
<table>

<tr>
  <th>Name_product</th>
  <th>Price_product</th>
  <th>Image</th>
  <th>Comments</th>
  <th>Actions</th>
 </tr>
 @foreach($data as $data) 
     <tr>
         <td>{{$data->name}}</td>
         <td>{{$data->price}}</td>
         <td><img src="{{$data->image}}" style="width: 100px;height:100px"></td>
         <td>{{$data->comments}}</td>
         <td>
              
              <form action="{{route('destroy_product',$data->id)}}" method="post">
                          @method('DELETE')
                          @csrf
                     <button type="submit">Delete</button>
              </form>
              <form  action="{{route('update_product',$data->id)}}">
                             <button>Update</button>
              </form>
         </td>
     </tr>  
  @endforeach
</table> 

    
</body>
</html>