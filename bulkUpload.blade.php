<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register students</title>
    <style>
         *{
            margin:0px;
            padding:0px;
            box-sizing: border-box;
        }
        body{
            background-image:url("images/geu.jpg");
            background-size:cover;
        }
       #heading{
        display:flex;
        justify-content:space-between;
        height:15vh;
        width:100vw;
        background-color: white;
        opacity:0.8;
       }
      
       #upload-box{
        height:55vh;
        width:35vw;
        background-color:white;
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
       }
       #div-head{
        height:20%;
        width:100%;
        background-color:#032241;
        color:white;
        padding:2%;
       }
       #main_box{
        height:60%;
        width:100%;
        background-color:white;
       }
       #temp{
        height:20%;
        width:100%;
        background-color:#032241;
        color:white;
        display:flex;
        justify-content:center;
        align-items:center;
        position:absolute;
        bottom:0px;
        flex-wrap:wrap;
       }
       .input{
        border:4px solid #032241;
        border-radius:50px;
        padding:2px;
        font-size:15px;
        position:absolute;
        top:40%;
        left:50%;
        transform:translate(-50%,-50%);
        
       }
       .input::-webkit-file-upload-button{
        background-color:#032241;
        color:white;
        cursor:pointer;
        border:none;
        border-radius:50px;
       }
       #upload_here{
           height:50px;
           width:50%;
           background-color:#032241;
           color:white;
       }
       input[type="submit"]{
        background-color:#032241;
        width:20%;
        height:10%;
        color:white;
        border:none;
        position:absolute;
        top:55%;
        left:50%;
        transform:translate(-50%,-50%);
        font-size:95%;
       }
       input[type="submit"]:hover{
        border:2px solid white;
        border-radius:15%;
       }
       #temp a{
        color:white;
       }
    </style>
</head>
<body>
<header>
    <div id="heading">
        <h1>Register Students</h1>
        <img id="logo" src="images/logo.png"/>
    </div>
</header>
<main>
    <div id="upload-box">
        <div id="div-head">
            <h1>Bulk uploading form</h1>
        </div>
            <form id="main_box">
                <label>
                    <input type="file" accept=".xls,.xlsx" placeholeder="Upload File" class="input"/>
                </label>
                <input type="submit" value="upload" id="submit"/>
            </form>
        <div id="temp">
                <p> <i class="fa-solid fa-circle-info"></i> Please download the sample template, before uploading. </p>
                <b><-<a href="images/TEMPLATE.xlsx" download>Download Sample Template</a>-></b>
        </div>
    </div>
</main>
<script src="https://kit.fontawesome.com/3cd1e0b213.js" crossorigin="anonymous"></script>
</body>
</html>