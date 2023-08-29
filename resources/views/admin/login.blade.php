<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        body{
            background-color:white;
        }
        h1{
            color:deepskyblue;
            
        }
        form{
            box-shadow: 0 8px 16px 0 deepskyblue;
            background-color: blue;
            border:1px solid gray;
            color:white;
            width:500px;
            height:450px;
            margin-top:100px;
            margin-left:350px;
            text-align:center;
        }
        input[type="email"],input[type="pass"]{
            width:400px;
            padding:12px 20px;
            border:1px solid #ccc;
        }
        .go{
            background-color:deepskyblue;
            padding:14px 20px;
            margin-top:40px;
            margin-bottom:20px;
            margin-left:50px;
            border:none;
            cursor:pointer;
        }
        a{
            width:50%;
            color:white;
            text-decoration: none;
        }
        .back{
            float: left;
            background-color:deepskyblue;
            margin-left: 20px;
            margin-top:40px;
            padding:14px 20px;
            border:none;
            cursor:pointer;
        }
        .back i{
            color: #ccc;
        }
    </style>
</head>
<body>
    <form method="get" action="{{route('admin_login')}}">
        @csrf
        <button class="back"><a href="{{route('home')}}"><i class='bx bx-arrow-back'></i></a></button><br>
        <h1>Sign Admin</h1>
        <label>Your Email</label><br><br>
        <input type="email" name="gmail" ><br><br>
        <label>Your password</label><br><br>
        <input type="pass" name="pass" ><br><br>
        <input type="checkbox"> Reminder Me Later<br><br>
        <input type="submit" class="go" value="Login">        
    </form>
</body>
</html>