<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        .container{
            float: right;
            width: 50%;
            height: 100%;
            display: inline;
            background-color:blueviolet;
        }
        footer{
            
            width: 50%;
            height: 100%;
            text-align: center;
            display: block;
            float: left;
            background-color: white;
            color: black;
            margin-top: 100px;
        }
        .social i{
           display: inline;
           justify-content: center;
           margin-left: 20px; 
           
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
        h1{
            color:black;
            
        }
        form{
            box-shadow: 0 8px 16px 0 black;
            border:1px solid gray;
            color:white;
            text-align:center;
        }
        input[type="email"],input[type="text"]{
            width:400px;
            padding:12px 20px;
            border:1px solid #ccc;
        }
        .notes{
            width:400px;
            padding:12px 20px;
            border:1px solid #ccc;

        }
        .go{
            background-color:white;
            padding:14px 20px;
            margin-top:40px;
            margin-bottom:20px;
            margin-left:50px;
            border:none;
            cursor:pointer;
        }
        a{
            width:50%;
            color:black;
            text-decoration: none;
        }
        .back{
            float: left;
            background-color:white;
            margin-left: 20px;
            margin-top:40px;
            padding:14px 20px;
            border:none;
            cursor:pointer;
        }


    </style>
</head>
<body>
       
<div class="container">
<form method="get" action="{{route('notes')}}">
        
        <button class="back"><a href="{{route('home')}}"><i class='bx bx-arrow-back'></i></a></button><br>
        <h1>Contact Us</h1>
        <label>Your Name</label><br><br>
        <input type="text" name="name" ><br><br>
        <label>Your Email</label><br><br>
        <input type="email" name="email" ><br><br>
        <label>Your Phone</label><br><br>
        <input type="text" name="phone" ><br><br>
        <label>Enter Your Notes</label><br><br>
        <textarea class="notes" name="notes">Enter Your Notes</textarea><br><br>
        <input type="submit" class="go" value="Send">        
    </form>
</div>

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