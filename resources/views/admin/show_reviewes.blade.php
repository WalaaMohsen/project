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
<h1>Show All Reviewes</h1>
             
<table>

<tr>
  <th>User_Name</th>
  <th>User_Email</th>
  <th>User_Phone</th>
  <th>User_Notes</th>
  <th>Action</th>
 </tr>
 @foreach($data as $data) 
     <tr>
         <td>{{$data->name}}</td>
         <td>{{$data->email}}</td>
         <td>{{$data->phone}}</td>
         <td>{{$data->notes}}</td>

         <td>
              
              <form action="{{route('destroy_notes',$data->id)}}" method="post">
                          @method('DELETE')
                          @csrf
                     <button type="submit">Delete</button>
              </form>
         </td>
     </tr>  
  @endforeach
</table> 

    
</body>
</html>