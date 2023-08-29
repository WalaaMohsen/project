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

          
    </style>
</head>
<body>
    <h1>Show All Users</h1>
<table>

<tr>
  <th>User_name</th>
  <th>User_email</th>
  <th>User_password</th>
  <th>Actions</th>
 </tr>
 @foreach($data as $data) 
     <tr>
         <td>{{$data->name}}</td>
         <td>{{$data->email}}</td>
         <td>{{$data->password}}</td>
         <td>
              <form  action="{{route('register_form')}}">
                             <button>Add</button>
              </form>
              <form action="{{route('destroy',$data->id)}}" method="post">
                          @method('DELETE')
                          @csrf
                     <button type="submit">Delete</button>
              </form>
              <form  action="{{route('update',$data->id)}}">
                             <button>Update</button>
              </form>
         </td>
     </tr>  
  @endforeach
</table> 
</body>
</html>