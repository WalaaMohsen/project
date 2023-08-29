<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:white;
        }
        h1{
            color:green;
        }
        form{
            box-shadow: 0 8px 16px 0 green;
            background-color: black;
            border:1px solid gray;
            color:white;
            width:500px;
            height:600px;
            margin-top:100px;
            margin-left:350px;
            text-align:center;
        }
        input[type="text"],input[type="pass"],input[type="email"]{
            width:400px;
            padding:12px 20px;
            border:1px solid #ccc;
        }
        button{
            background-color:green;
            padding:14px 20px;
            margin-top:40px;
            margin-bottom:20px;
            margin-left:100px;
            border:none;
            cursor:pointer;
        }
        a{
            width:50%;
            color:white;
            text-decoration: none;
        }
    </style>
</head>
<body>
        @if(Session::has('error'))
              <div>
                  {{Session::get('error')}}
              </div>
        @endif
    
    <form method="post" action="{{route('sign_user')}}">
        @csrf
        <h1>Sign</h1>
        <label>Your Name</label><br><br>
        <input type="text" name="name" ><br><br>
        <label>Your Gmail</label><br><br>
        <input type="email" name="email" ><br><br>
        <label>Your password</label><br><br>
        <input type="pass" name="pass" ><br><br>
        <label>Your Confirm_pass</label><br><br>
        <input type="pass" name="pass" ><br><br>
        <input type="checkbox"> Reminder Me Later<br><br>
        <button type="submit">Go</button>&nbsp&nbsp&nbsp&nbsp
        <a href="">Forget Password</a>

    </form>
</body>
</html>