<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {box-sizing: border-box}

/* Add padding to containers */
        .container {
                 padding: 16px;
                 width: 500px;
                 margin-left: 400px;
              }

input[type=text], input[type=password],input[type="number"] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
}
#pass{
width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1; 
}

input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}

/* Overwrite default styles of hr */
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
background-color: #04AA6D;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}

.registerbtn:hover {
opacity:1;
}

/* Add a blue text color to links */
a {
color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
background-color: #f1f1f1;
text-align: center;
}

    </style>
</head>
<body>
<form action="{{route('add_order')}}">
    @csrf
  <div class="container">
    <h1>Add New Order</h1>
    <hr>
    <label for="name"><b>Order_status</b></label>
    <input type="text" placeholder="Enter Order_status" name="order_status" id="order_status" >
    <label for="Quantity"><b>Quantity</b></label>
    <input type="number" placeholder="Enter Quantity" name="quantity" id="quantity" ><br><br>

    <label for="total"><b>Total</b></label>
    <input type="text" placeholder="Enter Total" name="total" id="total"><br><br>

    <label for="register_id"><b>Register_id</b></label>
    <input type="text" placeholder="Enter Register_id" name="register_id" id="register_id">
    <hr>
    <button type="submit" class="registerbtn">Add</button>
  </div>
</form>
</body>
</html>