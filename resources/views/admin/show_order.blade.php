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
<h1>Show All Users</h1>
              <form  action="{{route('show_form_add_order')}}" class="add">
                             <button>Add New Order</button>
              </form>
<table>

<tr>
  <th>Order_status</th>
  <th>Quantity</th>
  <th>Total</th>
  <th>Register_id</th>
  <th>Actions</th>
 </tr>
 @foreach($data as $data) 
     <tr>
         <td>{{$data->order_status}}</td>
         <td>{{$data->quantity}}</td>
         <td>{{$data->total}}</td>
         <td>{{$data->register_id}}</td>
         <td>
              
              <form action="{{route('destroy_order',$data->id)}}" method="post">
                          @method('DELETE')
                          @csrf
                     <button type="submit">Delete</button>
              </form>
              <form  action="{{route('update_order',$data->id)}}">
                             <button>Update</button>
              </form>
         </td>
     </tr>  
  @endforeach
</table> 
    
</body>
</html>