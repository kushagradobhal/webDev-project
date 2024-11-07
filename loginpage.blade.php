<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        *{
            margin:0px;
            padding:0px;
            box-sizing: border-box;
        }
        body{
            background-image:url("images/gehu.jpeg");
            background-size:cover;
            height:auto;
        }
        #main{
            height: 60vh;
            width:25vw;
            background-color:rgba(225,225,225,0.8);
            opacity:0.9;
            color:white;
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            padding:2px;
            box-shadow:1px 1px 20px 0px red;
        }
        #logo{
            height: 20%;
            width:100%;
            background-image:url("images/logo.png");
            background-size:cover;
            margin-top:3%;
            margin-bottom:12%;
            padding: 1px;
        }
        #form{
            height:80%;
            width:100%;
        }
        .box{
            height:100%;
            width:87%;
            padding:1%;
        }
        #heading{
            color:black;
            line-height:20%;
            margin:4%;
        }
        #fp{
            text-decoration:none;
            color:red;
            position:absolute;
            left:5%;
        }
        #submit{
            height:8%;
            width:18%;
            color:red;
            position:absolute;
            right:10%;
        }
        .input{
            height:12%;
            width:90%;
            display:flex;
            margin-left:4.5%;
        }
        #user{
            margin-top:8%;
        }
        .div{
            height:100%;
            width:13%;
            background-color:white;
            border:1px black solid;
            color:black;
            font-size:100%;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        #passBox{
            margin-top:1%;
        }
        #submit:hover{
         background-color:red;
         color:white;
         border:none;
        }
        @media (min-width:500px) and (max-width:1000px){
            body{
                background-size:auto;
                background-image:url("images/gehu.jpeg");
                background-repeat:no-repeat;
            }
            #main{
                height:55vh;
                width:65vw;
            }
        }
    </style>
</head>
<body>
    <div id="main">
        <div id="logo"></div>
        <form id="form" action="/adminPage">
            <div id="heading">
               <h1>Enter your Details</h1>
            </div>
            <div id="user" class="input">
                <input required id="uniroll" class="box" type="text" placeholder="User ID">
                <div id="user box" class="div"><i class="fa-solid fa-user"></i></div>
             </div>
           <br><br>
           <div id="passBox" class="input">
               <input required id="pass" class="box" type="password" placeholder="Password">
               <div id="seePass" class="div" ><i class="fa-solid fa-eye-slash"></i></div>
            </div>
             <br>
                <a href="/foregtpass" id="fp">forget passward?</a>
           <br>
            <button id="submit">login</button>
         </form>
    </div>
    <script>
        const btn=document.querySelector("#seePass");
        const pas=document.querySelector("#pass");
        let view=true;
        btn.addEventListener("click",()=>{
            if(view){
                pas.setAttribute("type","text");
                btn.innerHTML="<i class='fa-solid fa-eye'></i>";
                view=false;
            }else{
                pas.setAttribute("type","password");
                btn.innerHTML="<i class='fa-solid fa-eye-slash'></i>";
                view=true;
            }
        });
    </script>
    <script src="https://kit.fontawesome.com/3cd1e0b213.js" crossorigin="anonymous"></script>
</body>
</html>