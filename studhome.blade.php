<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student home page</title>
    <style>
        nav {
            background-color:rgb(177, 31, 31);
            overflow: hidden;
        }

        nav a {
            text-decoration: none;
            padding: 20px;
            text-align: center;
            float: left;
            color: white;
        }
        *{
    box-sizing: border-box;
}

body {
   margin: 0px;
   font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
            header h1{
            color: black;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-weight: 1000px;
            font-size: xx-large;
            text-overflow: hidden;
            text-align:center;
            position: absolute;
            top:10%;
            left:50%;
            transform: translateX(-50%);
            text-decoration: aliceblue;
            background-color: aliceblue;
   
        }
        header{
            
            background-repeat: no-repeat;
            background-color: aliceblue;
            background-origin: content-box;
            margin: 0%;
            padding: 220px;
            background-image: url(images/gehu.jpeg);
            background-position: center;
            
            
        }
        .box{
            width:150px;
            height:170px;
            border:4px solid black;
            margin:10px;
        }
        img{
            height:100%;
            width:100%;
            object-fit: fill;
        }
        .wrapper{
            background-color: beige;
            background-image: url(images/logo.png);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: right;
        }
        .vertical-menu {
  width: 200px; 
}

.vertical-menu a {
  background-color: #eee; 
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none; 
}

.vertical-menu a:hover {
  background-color: #ccc; 
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}

    
  


       
    </style>
</head>
<body>
    <header>
        <h1>graphic era hill university</h1>

    </header>
    <nav>
      
        <!-- # for bcoz for now we r not giving any link on these icons -->
        <a href="#">college review</a>
        <a href="#">courses </a>
        <a href="#">details </a>
        <a href="#">study materials </a>
        <a href="#">login/signup </a>
        <a href="#">events </a>
        <a href="#">companies</a>
        <div class="topnav">
          <input type="text" placeholder="Search..">

            </div>
            
    
</nav>
<section>
<div class="wrapper">
    <div class="box"><img src="images/stud.webp" alt="uv"></div>

</div>
</section>
<main>
    <section>
        <div class="vertical-menu">
            <a href="#" class="active">Home</a>
            <a href="#">name</a>
            <a href="#">batch</a>
            <a href="#">class roll no</a>
            <a href="#">university roll no</a>
            <a href="#">email</a>
            <a href="#">contact</a>
            <a href="#">permanent address</a>
            

        </div>
          
    </section>


     
    
</main>
</body>
</html>