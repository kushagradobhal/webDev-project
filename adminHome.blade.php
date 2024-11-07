<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Portal Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        nav {
            background-color: #333;
            overflow: hidden;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            float: left;
        }

        nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #4CAF50;
        }

        nav form {
            float: right;
        }

        nav input[type="text"] {
            padding: 6px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        nav button[type="submit"] {
            padding: 6px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        :root {
            --clr-primary: #7380ec;
            --clr-danger: #ff7782;
            --clr-success: #41f1b6;
            --clr-white: #fff;
            --clr-info-dark: #7d8da1;
            --clr-info-light: #dceleb;
            --clr-dark: #363949;
            --clr-warnig: #ff4edc;
            --clr-light: rgba(132, 139, 200, 0.18);
            --clr-primary-variant: ☐ #111;
            --clr-dark-variant: #677483;
            --clr-color-background: #f6f6f9;

            --card-border-radius: 2rem;
            --border-radius-1: 0.4rem;
            --border-radius-2: 0.8rem;
            --border-radius-3: 1.2rem;

            --card-padding: 1.8rem;
            --padding-1: 1.2rem;
            --box-shadow:0 2rem 3rem var(--clr-light);
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            border: 0;
            list-style: none;
            appearance: none;
        }

        body{
        
            font-family: 'poppins',sans-serif;
            width:100vw;
            height:100vh;
            font-size:0.88rem;
            user-select:none;
            overflow-x:hidden;
            background-color:var(--clr-color-background);
        }
        /* .corner-image {
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
        } */

        .section{
            display: grid;
            width:96%;
            gap:1.8rem;
            grid-template-columns: 14rem auto 14rem;
            margin:0 auto;
        }
        
        .poppins-bold-italic {
        font-family: "Poppins", sans-serif;
        font-weight: 700;
        font-style: italic;
        }

        a{
            color:var(--clr-dark);
        }
        h1{
            font-weight: 800;
            font-size:1.8rem;
        }
        h2{
            font-size:1.4rem;
        }
        h3{
            font-size:0.87rem;
        }
        h4{
            font-size:0.8;
        }
        h5{
            font-size:0.77;
        }

        small{
            font-size:0.75rem;

        }
        .profilt-photo{
            width:2.8rem;
            height:2.8rem;
            border-radius:50%;
            overflow:hidden;
        }
        .text-muted{
            color:var(--clr-info-dark);
        }
        p{
            color:var(--clr-dark-variant);
        }
        b{
            color:var(--clr-dark);
        }
        .primary{
            color:var(--clr-primary);
        }
        .success{
            color:var(--clr-success);
        }
        .danger{
            color:var(--clr-danger);
        }
        .warning{
            color:var(--clr-warnig);
        }

        /* aside */
        aside{
            height:100vh;
        }
        aside .top{
            background-color:var(--clr-white);
            display:flex;
            justify-content:space-around;
            align-items:center;
            margin-top:1.4rem;
        }
        aside .logo{
            display:flex;
            gap:1rem;
        }

        aside .top div.close{
            display:none;
        }

        /* 
        sidebar
        */

        aside .sidebar{
            background-color:var(--clr-white);
            display:flex;
            flex-direction:column;
            height:85vh;
            position:relative;
            top:1rem;
        }

        aside h3{
            font-weight: 400;
        }

        aside .sidebar a{
            display:flex;
            color:var(--clr-info-dark);
            margin-left:2rem;
            gap:1rem;
            align-items:centre;
            height:3.2rem;
            transition:all .1s ease-in;
        }

        aside .sidebar a span{
            font-size:1.6rem;
            transition:all .1s ease-in;
        }

        aside .sidebar a:last-child{
            position:absolute;
            bottom:1rem;
            width:100%;
        }

        aside .sidebar a.active{
            background:var(--clr-light);
            color:var(--clr-primary);
            margin-left:0;
            /* border-left:5px solid var(--clr-primary); */
        }

        aside .sidebar a.active::before{
            content:'';
            width:6px;
            height: 100%;
            background-color:var(--clr-primary);
        }

        aside .sidebar a:hover{
            color:var(--clr-primary);
            transition:.4s ease;
        }

        aside .sidebar a:hover span{
            margin-left:1rem;
        }

        aside .sidebar a span.msg_count{
            background:var(--clr-danger);
            color:var(--clr-white);
            padding: 2px 5px;
            font-size:11px;
            border-radius: var(--border-radius-1);
        }

        /* 
        start main section style
        */
        main{
            margin-top:1.4rem;
            height:100%;
            max-width:100%;
            display:block;
        }
        #home input{
            background-color:transparent;
            border:0;
            outline:0;
            color:var(--clr-dark);
        }

        #home .date{
            display: inline-block;
            background-color:var(--clr-white);
            border-radius:var(--border-radius-1);
            margin-top:1rem;
            padding:0.5rem 1.6rem;
        }

        #home .insights{
            display:grid;
            grid-template-columns: repeat(3,1fr);
            gap:1.6rem;
        }

        #home .insights>div{
            background-color: var(--clr-white);
            padding:var(--card-padding);
            border-radius:var(--card-border-radius);
            margin-top:1rem;
            box-shadow:var(--box-shadow);
            transition: all .3s ease;
        }
        #home .insights > div:hover{
            box-shadow:none;
        }

        #home .insights >div span{
            background:coral;
            padding:0.5rem;
            border: radius 50%;
            color: var(--clr-white);
            font-size:2rem;
        }

        #home .insights > div.Invitations span{
            background:var(--clr-danger);
        }

        #home .insights > div.Requests span{
            background:var(--clr-success);
        }
        #home .insights > div.middle{
            display:flex;
            align-items:centre;
            justify-content : space-between;
        }
        #home .insights > div .middle h1{
            font-size:1.6rem;
        }
        #home h1{
            color:var(--clr-dark);
        }
        #home.insights h1{
            color:var(--clr-dark);
        }
        #home .insights h3{
            color:var(--clr-dark);
        }

        #home .insights p{
            color:var(--clr-dark);
        }

        #home .insights .progress{
            position:relative;
            height:68px;
            width:68px;
            border-radius:50px;
        }
        #home .insights svg{
            height:150px;
            height:150px;
            position: absolute;
            top:0;
        }
        #home .insights svg circle{
            fill: none;
            stroke:var(--clr-primary);
            transform:rotate(270,80,80);
            stroke-width:5;
        }

        #home .insights .announcement svg circle{
            stroke-dashoffset: 10;
            stroke-dasharray:150;
        }
        #home .insights .Invitations svg circle{
            stroke-dashoffset: 0;
            stroke-dasharray:150;
        }
        #home .insights .Requests svg circle{
            stroke: var(--clr-success);
        }
        #home .insights .progress .number{
            position :absolute;
            top:40%;
            left:5%;
            height:100%;
            width:100%;
            display:flex;
            justify-content:center;
            align-items:centre;
        }

        #home .details{
            margin-top:2rem;
        }

        #home .details h2{
            color: var(--clr-dark);
        }
        #home .details table{
            background-color:var(--clr-white);
            width:100%;
            border-radius:var(--card-border-radius);
            padding:var(--card-padding);
            text-align: centre;
            box-shadow:var(--box-shadow);
            transition:all .3s ease;
            color:var(--clr-dark);
        }
        #home .details table:hover{
            box-shadow:none;
        }
        #home table tbody tr{
            height:3.8rem;
            border-bottom:1px solid var(--clr-white);
            color:var(--clr-dark-variant);
        }

        #home table tbody td{
            height:3.8rem;
            border-bottom:1px solid var(--clr-dark);
        }

        #home table tbody tr:last-child td{
            border:none;
        }

        #home .details a{
            text-align:centre;
            display:block;
            margin:1rem;
        }
        /* body{
            background-image:url("images/geu.jpg");
            background-size:cover;
        } */
       #heading{
        display:flex;
        justify-content:space-between;
        height:15vh;
        width:100vw;
        background-color: white;
        opacity:0.8;
       }
       #heading h1{
        color:#032241;
        margin-left:2px;
        align-self:center;
        font-size:3em;
        opacity:1;
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
       #hidden{
        display:none;
       }
       #company{
        display:none;
        width:100%;
       }
#company header {
    background-color: #032241;
    color: white;
    text-align: center;
    padding: 1% 0;
}

#company nav a {
    color: white;
    margin: 0 2%;
    text-decoration: none;
}
#company .event_holder{
    height:80%;
    width:100%;
    margin:1%;
}

#company .event h3 {
    margin-top: 0;
}
#company .user_number{
    height:12%;
    width:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    background-color:green;
    color:white;
}
#company .event_holder .event{
    height:70%;
    width:100%;
    padding:1%;
    background-color:#d9d9d9;
    display:flex;
    /*justify-content:space-between;*/
    align-items: center;
    flex-wrap: wrap;
    border-radius: 2%;
    color:white;
    box-shadow:2px 2px 10px 0px #003566;
}
#company .info{
    height:80%;
    width:20%;
    padding:2px;
    background-color: #032241;
    border-radius: 2%;
    box-shadow:2px 2px 10px 0px whitesmoke;
    color:white;
    margin:2%;
}

#company .info img{
    height:40%;
    width: 100%;
    object-fit:cover;
}
#company .container{
    height:60%;
    width:100%;
    display:flex;
    color:white;
    padding:1%;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

#company .event{
    height:90%;
    width:100%;
    margin:1%;

}
#company p{
    color:white;
}
#company #demo{
    color:red;
}
#company .event big{
    color:black;
    position:relative;
    top:5%;
    left:35%;
    /* transform:translate(-50%,-50%); */
}
#company .descp_box{
    height:60%;
    width:50%;
    background-color:rgb(225,225,225);
    color:black;
    box-shadow:1px 2px 5px 2px #032241;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    border-radius:2%;
    padding:2%;
}
#company .descp_box button{
    height:10%;
    width:25%;
    position:absolute;
    bottom:2%;
    right:3%;
    background-color:#032241;
    color:white;
}
#company .descp_box button:hover{
    background-color:green;
}
    </style>
</head>
<body>
    <div class="container">
        <h1>Placement Portal Admin</h1>
        <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a id="view_event">Companies</a></li>
            <li><a href="/home">Students</a></li>
            <li><a href="/home">Help</a></li>

            <li>
                <form action="/home" method="get">
                    <input type="text" name="query" placeholder="Search">
                    <button type="submit">Search</button>
                </form>
            </li>
        </ul>
        </nav>  

            
        <div class="section">
            <!-- aside section start -->
            <aside>
                <div class="top">
                    <div class="logo">
                        <h2>Admin<span class="danger">page</span></h2>
                    </div>
                    <div class="close">
                    <span class="material-symbols-outlined">close</span>
                    </div>
                </div>
                <!-- top end -->
                <div class="sidebar">
                    <a href ="/home" class="active">
                    <span class="material-symbols-outlined">grid_view</span>
                        <h3>Dashboard</h3>
                    </a>
                    <a id="register">
                        <span class="material-symbols-outlined"></span>
                        <h3>Register students</h3>
                    </a>
                    <a href="#" >
                        <span class="material-symbols-outlined">home</span>
                        <h3>Home</h3>
                    </a>
                    <a href="#" >
                        <span class="material-symbols-outlined">menu</span>
                        <h3>Menu</h3>
                    </a>
                    <a href="#" >
                    <span class="material-symbols-outlined">manage_accounts</span>
                        <h3>Management</h3>
                    </a>
                    
                    <a href="#" >
                        <span class="material-symbols-outlined">person</span>
                        <h3>Profile</h3>
                    </a>
                    <a href="#" >
                        <span class="material-symbols-outlined">link</span>
                        <h3>Important links</h3>
                    </a>
                    
                    <a href ="#" >
                        <span class="material-symbols-outlined">mail_outline</span>
                        <h3>Messages</h3>
                        <span class="msg_count">14</span>
                    </a>
                    
                    <a href="#">
                        <span class="material-symbols-outlined">star</span>
                        <h3>Star</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">settings</span>
                        <h3>Settings</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-outlined">logout</span>
                        <h3>Logout</h3>
                    </a>
                    
                </div>

            </aside>  
            <!-- aside section end -->

            <!-- main section start -->
            <main id="home">
                <h1>Dashboard</h1>

                <div class="date">
                    <input type="date">
                </div>
                <!-- start insights -->
                <div class="insights">
                    <!-- start announcement section -->
                    <div class="announcement">
                        <span class="material-symbols-outlined">info</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Announcement</h3>
                                <h1>Announcement</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle r="30" cy="40" cx="40"></circle>
                                </svg>
                                <div class="number">80%</div>
                            </div>
                        </div>
                        <small>Last 24 hours</small>
                    </div>
                    <!-- end announcement section -->

                    <!-- start Invitations section -->
                    <div class="Invitations">
                        <span class="material-symbols-outlined">info</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Invitations</h3>
                                <h1>Invitations</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle r="30" cy="40" cx="40"></circle>
                                </svg>
                                <div class="number">80%</div>
                            </div>
                        </div>
                        <small>Last 24 hours</small>
                    </div>
                    <!-- end Invitations section -->

                    <!-- start Requests section -->
                    <div class="Requests">
                        <span class="material-symbols-outlined">info</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Requests</h3>
                                <h1>Requests</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle r="30" cy="40" cx="40"></circle>
                                </svg>
                                <div class="number">80%</div>
                            </div>
                        </div>
                        <small>Last 24 hours</small>
                    </div>
                    <!-- end Requests section -->

                </div>
                <!-- insights end -->

                <!-- start details -->

                <div class="details">
                    <h1>Details</h1>
                    <table>

                        <thead>
                            <tr>
                                <th> Name </th>
                                <th> Admin id </th>
                                <th> Email </th>
                                <th> Mobile number </th>
                                <th> Gender </th>
                                <th> Age </th>
                                <th> Role </th>
                                <th> Date of birth </th>
                                <th> city </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td> Abhay </td>
                                <td> 1234556 </td>
                                <td> xyz@gmail.com </td>
                                <td > 1234567890 </td>
                                <td >male</td>
                                <td >19</td>
                                <td >admin</td>
                                <td >8/12/2005</td>
                                <td >dehradun</td>
                                
                            </tr>   
                           
                        </tbody>

                    </table>
                </div>

                <!-- </div> -->
                <!-- right section start -->
                <div class="right">
                    <div class="top">
                        <button id="menu_bar">
                            <span class="material-symbols-sharp">menu</span>
                        </button>
                        <div class="theme-toggler">
                            <span class="material-sysmbols-sharp">light_mode</span>
                            <span class="material-sysmbols-sharp">dark_mode</span>
                        </div>
                        <div class="profile">
                            <div class="info">
                                <p><b>MR. ABHAY KANOJIA</b></p>
                                <p>Admin</p>
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right section end -->
            </main>
                    <!-- end details -->
            <!-- main section end -->

         <!-- another main company starts here -->
          <main id="company">
            <header>
             <h1>Event Schedules</h1>
             <nav>
                 <a href="#upcoming">Upcoming Events</a>
                 <a href="#ongoing">Ongoing Events</a>
                 <a href="#past">Past Events</a>
             </nav>
            </header>
            <div id="ongoing" class="event_holder"><br><br>
              <h2>Ongoing Events</h2>
              <div class="event" id="appendPresent"></div>
              <br><br><br><br><br>
              <!-- <div class="info pres" id="box1">
                     <img src="/images/deshow.png"/>
                     <div class="container">
                         <strong>De-show summer internship</strong>
                          <p id="demo"></p> -->
                         <!-- <div class="user_number"><i class="fa-solid fa-user"></i>
                             <p>293/800</p>
                         </div>
                         <p> Starts on: 18/08/2024, 08:00am</p>
                         <p> End in: 22/10/2024, 12:00am</p>
                     </div>
                 </div> --> 
            <!-- More ongoing events -->

            <div id="upcoming" class="event_holder">
                 <h2>Upcoming Events</h2>
                 <div class="event" id="appendFuture"></div>
            <!-- <div class="info futu" id="box1"></div> -->
             <!-- More upcoming events -->
            </div>
            <!-- past events -->
            <div id="past" class="event_holder">
               <h2>Past Events</h2>
               <div class="event" id="appendPast"></div>
            <!-- <div class="info past" id="box1"></div> -->
               <!-- More past events -->
            </div>
          </main>
        </div>
    </div>


    <div id="hidden">
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
</div>

<script>
        const main=document.querySelector("#home");
        const register=document.querySelector("#register");
        const hidden=document.querySelector("#hidden");
        const present=document.querySelector("#appendPresent");
        const future=document.querySelector("#appendFuture");
        const past=document.querySelector("#appendPast");
        let click=true;
        register.addEventListener("click",()=>{
            if(click){
                main.style.display="none";
                hidden.style.display="block";
                click=false;
            }else{
                main.style.display="block";
                hidden.style.display="none";
                click=true;  
            }
        });    
function get_timer(edate){
// Set the date we're counting down to
var countDownDate = edate.getTime();
// Update the count down every 1 second
var x = setInterval(function() {
  // Get today's date and time
  var now = new Date().getTime();
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
}
       const present_event={
            name:"De-shaw summer internship",
            sdate:new Date("2024-08-29"),
            edate:new Date("2024-09-29"),
            description:"We’re looking for exceptional students from all backgrounds to join our internship program.As an intern, you’ll focus on some of the most challenging and interesting problems in finance and technology, while learning from experienced managers, tailored educational programming, and distinguished guest speakers. You’ll also share in community-building social events with fellow interns and employees.",
            bannerimg:"images/deshow.png"
        };

        const view_event=document.querySelector("#view_event");
        const events=document.querySelector("#company");
        let click1=true;
        view_event.addEventListener("click",()=>{
            if(click1){
                main.style.display="none";
                events.style.display="block";
                click1=false;
            }else{
                main.style.display="block";
                events.style.display="none";
                click1=true;
            }
        });
        let current_date=new Date();
        let banner=document.createElement("div");
        banner.setAttribute("class","info pres");
        present.append(banner);
        banner.innerHTML = `<img src="${present_event.bannerimg}"/>`;
        let container=document.createElement("div");
        container.setAttribute("class","container");
        banner.append(container);
        container.innerHTML+=`<strong>${present_event.name}</strong><br>`;
        container.innerHTML+="<div class='user_number'><i class='fa-solid fa-user'></i><p>293/800</p></div>"
        container.innerHTML+="<p id='demo'></p>";
        container.innerHTML+=`<p>start date:${present_event.sdate}</p><br>`;
        container.innerHTML+=`<p>End date:${present_event.edate}</p>`;
        get_timer(present_event.edate);
        
        banner.addEventListener("click",()=>{
            let descp=document.createElement("div");
                clickdescp=false;
                events.append(descp);
                descp.innerHTML=`<p style="color:black">${present_event.description}<p>`;
                descp.setAttribute("class","descp_box");
                let button=document.createElement("button");
                button.innerText="close";
                descp.append(button);
                button.addEventListener("click",()=>{
                    descp.remove();
                });
        });
        
        
        //LOGIC TO CHECK WHETHER AN EVENT IS PRESENT OR NOT?
        if(!present.hasChildNodes()){
            present.innerText="oppourtunity will be added soon";
        }
        if(!future.hasChildNodes()){
            future.innerHTML="<big>oppourtunity will be added soon</big>";
        }
        if(!past.hasChildNodes()){
            past.innerHTML="<big>oppourtunity will be added soon</big>";
        }
    </script>
    <script src="https://kit.fontawesome.com/3cd1e0b213.js" crossorigin="anonymous"></script>
</body>
</html>