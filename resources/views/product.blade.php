<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    .header{
        background-color: gray;
        width: 100%;
        position: relative;
        display:grid;
        opacity: 0.9;

    }
    .header:hover{
        opacity: 0.6;
    }
    a{
        color: #fff;
    }
        .header h1{
            text-align: center;
            font-weight: 500px;
            color: white;
        }
        p{
            text-align: center;
            font-weight: 50px;
            font-style: italic;
            color: black;
            
        }
        .index {
               padding: 20px;
               width: 100%;
               height: 100%;
               
               display: inline;
               flex-wrap: wrap;
              }
        .card{
            background: #fff;
            border-radius: 5px;
            padding: 35px 20px;
            min-width: 225;
            height: 600px;
            width: 25%;
            margin-left: 20px;
            display: inline-block;
            
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
        button{
            background-color: black;
            color: white;
            width: 120px;
            height: 50px;
            border-radius: 20px;
            margin-left: 25px;
            margin-top: 20px;
           
        }
        button a{
            color: #fff;
            text-decoration: none;
            font-size: 20px;
            justify-items: center;
        }
        div p,h1{
            text-align: center;
            margin-bottom: 10px;
        }
        div #stars{
            margin-left: 25px;
            margin-top: 15px;
            margin-bottom: 10px;
        }
        .inp_search{
            width: 55%;
            height: 55px;
            padding: 10px;
            font-size: 17px;
            margin-left: 180px;
            margin-top: 70px;
            margin-bottom: 70px;
            border: 1px solid grey;
            float: left;
        }
        .but_search{
            float: left;
            cursor: pointer;
            width: 100px;
            height: 85px;
            margin-left:0px;
            margin-top: 65px;
        }
        

    </style>
</head>
<body>
      
        <div class="header">
            <h1>Skin Care</h1>
            <p>Our products are different of another that are orignal  to know more go to <a href="{{route('about')}}">about us</a></p>
            <div>
                <form action="{{route('showsingle_product')}}" method="get">
                    @csrf
                    <input type="text" placeholder="Search Product...." name ="search" class="inp_search">
                    <button  type="submit" class="but_search"><i class='bx bx-search'></i></button> 
                </form>
            </div>

        </div>
           
             @foreach($myproducts as $product)
             <div class="index">
                <div class="card">
                    <div class="container">
                        <img src="images/{{$product->image}}" width="70px" height="70px">
                        <h1>{{$product->name}}</h1>
                        <p>{{$product->price}}</p>
                        <p>({{$product->comments}} COMMENTS)</p>
                       <i class='bx bxs-star' id="stars"></i>
                       <i class='bx bxs-star'id="stars"></i>
                       <i class='bx bx-star' id="stars"></i>
                       <i class='bx bx-star' id="stars"></i><br><br>
                       <form  action="{{route('buy')}}" method="get">
                            @csrf
                           <input type="number" name="num" value="1">
                           <button type="submit">Add To Cart</a></button>
                       </form>
                    </div>
                </div> 
             @endforeach
              </div> 
</body>
</html>