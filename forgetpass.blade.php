<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passward reset</title>
    <style>
    *{
     margin:0px;
    padding:0px;
    box-sizing: border-box;
    }
    h1{
        color:#00b4d8;
        margin: 20px;
    }
    #main{
    height:80vh;
    width: 40vw;
    border:black 2px solid;
    border-radius:5%;
    position:absolute;
    top:50%;
    left:50%;
    background-color:#e9ecef;
    transform:translate(-50%,-50%);
    display:flex;
    justify-content:center;
    align-items:center;
    }
    #mail{
        margin:20px 0px 0px 20px;
        height:5vh;
        width:30vw;
        padding:5px;

    }
    #submit{
        margin:20px 20px 20px 20px;
        height:5vh;
        width:8vw;
        background-color:#90e0ef;
        font-weight:400;
        font-size:2vh;
        border:2px solid white;
        border-radius:8%;
        transform:translateX(20vw);
    }
    #submit:hover{
         background-color:#caf0f8;
         border: 2px solid #90e0ef;
        }
    </style>
</head>
<body>
<div id="main">
        <form action="/verify">
           <h1>Email Verification</h1>
            <input required id="mail" class="box" type="email" placeholder="email address">
           <br>
                <input id="submit" type="submit">
         </form>
    </div>
</body>
</html>