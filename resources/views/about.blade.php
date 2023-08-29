<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }
        footer{

            width: 100%;
            height: 100%;
            text-align: center;
            display: block;
            float: left;
            background-color: white;
            color: black;
            margin-top: 100px;
        }
        footer a{
            text-decoration: none;
            font-family: 'Poppins',sans-serif;
            font-size: 15px;
            margin-left: 50px;
            color: black;
            opacity: 0.7;
            display: inline;
            justify-content: center;
        }
        footer a:hover{
            background-color: black;
            color: white;
        }
        footer p{
            color: black;
            margin-left: 100px;
        }
        
        h1{
            text-align:center;
            font-family: 'Poppins',sans-serif;
            font-size: 40px;
            margin-top: 100px;
            color:deeppink;
        }
        p{
            font-family: 'Poppins',sans-serif;
            font-size: 20px;
            margin-left:40px;
            color: #f1f1f1;
            display: inline-block;
        }
        img{
            width:50%;
            height: 50%;
            border-radius: 50%;
            display: inline-block;
            margin-left: 600px;

        }
        

    </style>
</head>
<body>
     
             <h1>About Us</h1>
             <p>We have most products and ordinary that there are not in another any website ,you can buy online,<br><br>
             you can create acount through <a href="{{route('register_form')}}">create acount</a>,<br><br>
             you can send reviewes through <a href="{{route('contact')}}">Contact us</a> </p>
             <img src="images/bag1.jpg">
        
     
        <footer>
             
             <h5>Follow Us</h5>
             <div class="social">
                <i class='bx bxl-facebook-circle'></i>
                <i class='bx bxl-instagram'></i>
                <i class='bx bxl-twitter'></i>
                <i class='bx bxl-gmail'></i>
             </div><br><br>
             <a href="{{route('home')}}">Home</a>
             <a href="{{route('show_product')}}">Products</a>
             <a href="{{route('about')}}">About Us</a>
             <a href="{{route('contact')}}">Contact Us</a><br><br><br>
             <p>Copyright @2023,Designed by Walaa Mohsen</p>
        </footer>
    
</body>
</html>