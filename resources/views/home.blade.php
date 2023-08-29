<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body{
            width: 100%;

        }
        .top button{
            display: inline;
            float: right;
            display: flex;
            margin-right: 30px; 
            margin-top: 30px;
            border: 1px lightskyblue solid;
            justify-content: center;
            background-color: lightskyblue;
            width: 50px;
            
        }
        .top button:hover{
            background-color: #fff;
            color: black;
            width: 40px;
            height: 20px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
       
        .logo{
            border-radius: 50%;
            width: 120px;
            padding: 40px 40px;
            
        }
        .top{
            background-color:lightskyblue;
        }
        nav{
            width: 100%;
            height:20vh;
            min-width: 600px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin: auto;
            float: left;
            background-color: lightskyblue;
            
            
        }
        nav button{
            width:150px;
            height: 50px;
            border: none;
            background-color: lightskyblue;
        
        }
        nav button:hover{
            background-color:aliceblue;
        }
        nav:hover{
            background-color:lightskyblue;
        }
        
        nav a{
            position:relative;
            text-decoration: none;
            font-family: 'Poppins',sans-serif;
            font-size: 20px;
            
            
        }
        .home{
            width: 100%;
            height: 100vh;
            background-image: url('images/bag_skin.jpeg');
            background-repeat: no-repeat;
            background-size: contain;
        }
        .index {
               padding: 20px;
               width: 100%;
               display: flex;
               flex-wrap: wrap;
              }
        .card{
            background: #fff;
            border-radius: 5px;
            padding: 35px 20px;
            min-width: 225;
            min-height: 260px;
            width: 25%;
            margin-left: 20px;
            
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
              }
        .card img{
            width: 80%;
            margin-left: 30px;
            margin-bottom: 5px;    
        }
        .card .container{
            font-weight: 900;
            text-transform: uppercase;
            margin: 50px;
            justify-content: space-between;

        }
        
        footer{
            
            width: 100%;
            height: 300px;
            text-align: center;
            display:block;
            float: left;
            background-color: black;
            color: white;
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
            color: white;
            opacity: 0.7;
            display: inline;
            justify-content: center;
        }
        h5{
            font-weight: bold;
            text-transform: uppercase;
            margin: 40px;
        }
        .buy{
            background-color: black;
            color: white;
            width: 150px;
            height: 50px;
            border-radius: 20px;
        }
        .buy a{
            color: #fff;
            text-decoration: none;
            font-size: 20px;
            justify-items: center;
        }
        input[type="number"]{
            margin-bottom: 30px;
            height: 25px;
        }
        



    </style>

</head>
<body>
    <div class="top">
        <img src="{{ asset('images/logo2.jpg')}}" alt=""  class="logo"/>
        <button><a href="{{route('buy')}}"><i class='bx bxs-cart-alt bx-tada' ></i></a></button>
        <button><a href="{{route('register_form')}}"><i class='bx bxs-registered'></i></a></button>
        <button><a href="{{route('sign')}}"><i class='bx bxs-user' ></i></a></button>
        <button><i class='bx bxs-heart bx-burst' ></i></button>


        </div>
    </div>

    <section class="home">
        <nav>
            <button><a href="{{route('home')}}">Home</a></button>
            <button><a href="{{route('show_product')}}">Our Products</a></button>
            <button><a href="{{route('about')}}">About Us</a></button>
            <button><a href="{{route('contact')}}">Contact Us</a></button>
            <button><a href="{{route('login_form')}}">Admin</a></button>
        </nav>
        
    </section>
       <section>
            <div class="index">
              <div class="card">
                    <img src="images/product2.jpg" alt="">
                    <div class="container">
                        <h1>Cerave</h1>
                        <p>Daily Moisturizing lotion</p>
                       <i class='bx bxs-star'></i>
                       <i class='bx bxs-star'></i>
                       <i class='bx bx-star' ></i>
                       <i class='bx bx-star' ></i><p>(44 COMMENTS)</p>
                       <form>
                           <input type="number" name="num">
                           <button class="buy"><a href="">Add To Cart</a></button>
                       </form>
                    </div>
              </div> 
              <div class="card">
                    <img src="images/product3.jpg" alt="">
                    <div class="container">
                        <h1>bliss</h1>
                        <h1>acid</h1>
                        <h1>ordinary</h1>
                       <i class='bx bxs-star'></i>
                       <i class='bx bxs-star'></i>
                       <i class='bx bx-star' ></i>
                       <i class='bx bx-star' ></i><p>(30 COMMENTS)</p>
                       <form>
                           <input type="number" name="num">
                           <button class="buy" type="submit">Add To Cart</button>
                       </form>
                    </div>
              </div> 
              <div class="card">
                    <img src="images/product7.jpg" alt="">
                    <div class="container">
                        <h1>dove</h1>
                        <h1>vetamins</h1>
                       <i class='bx bxs-star'></i>
                       <i class='bx bxs-star'></i>
                       <i class='bx bx-star' ></i>
                       <i class='bx bx-star' ></i><p>(50 COMMENTS)</p>
                       <form>
                           <input type="number" name="num">
                           <button class="buy" type="submit">Add To Cart</button>
                       </form>
                    </div>
              </div> 
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
    </section>
   
</body>
</html>