<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events Page</title>
    <style>
*{
    box-sizing: border-box;
}
body {
    font-family: Arial, sans-serif;
    background-color:  #f4f4f4;
    margin: 0px;
    padding:0px;
}
.countdown-timer{
    color:white;
    font-size:2%;
}
header {
    background-color: #032241;
    color: white;
    text-align: center;
    padding: 10px 0;
}

nav a {
    color: white;
    margin: 0 15px;
    text-decoration: none;
}
.event_holder{
    height:65vh;
    width:95vw;
    margin:2%;
    margin-bottom: 10%;
}

.event h3 {
    margin-top: 0;
}
.user_number{
    height:12%;
    width:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    background-color:green;
    color:white;
}
.event_holder .event{
    height:95%;
    width:100%;
    padding:1%;
    background-color:#d9d9d9;
    display:flex;
    justify-content:space-between;
    align-items: center;
    flex-wrap: wrap;
    border-radius: 2%;
    box-shadow:2px 2px 10px 0px #003566;
}
.info{
    height:90%;
    width:18%;
    padding:2px;
    background-color: #032241;
    border-radius: 2%;
    box-shadow:2px 2px 10px 0px whitesmoke;
    color:white;
}

.info img{
    height:40%;
    width: 100%;
    object-fit:cover;
}
.container{
    height:60%;
    width:100%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}
footer {
    height:50vh;
    width:100vw;
    background-color: #032241;
    color: whiter;
    text-align: center;
    margin-top: 10px;
    display:flex;
    align-items: center;
    justify-content: center;

}


.footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: auto;
}

.footer-section {
    width: 25%;
    margin: 10px;
}

.footer-section h3 {
    color:white;
    margin-bottom: 10px;
    font-size: 18px;
}

.footer-section p, .footer-section a, .footer-section ul li {
    font-size: 14px;
    color: #ddd;
    text-decoration: none;
}

.footer-section ul {
    list-style: none;
    padding: 0;
}

.footer-section ul li {
    margin-bottom: 8px;
}

.footer-section a:hover {
    color: #fff;
}

.footer-bottom {
    text-align: center;
    padding: 10px;
    background-color: #222;
    margin-top: 20px;
}

.footer-bottom p {
    margin: 0;
}

@media (max-width: 768px) {
    .footer-section {
        width: 100%;
        margin-bottom: 20px;
    }
}

    </style>
</head>

<body>
    <header>
        <h1>Event Schedules</h1>
        <nav>
            <a href="#upcoming">Upcoming Events</a>
            <a href="#ongoing">Ongoing Events</a>
            <a href="#past">Past Events</a>
        </nav>
    </header>
    <div id="ongoing" class="event_holder">
        <h2>Ongoing Events</h2>
        <div class="event">
           <div class="info pres" id="box1">
              <img src="/images/deshow.png"/>
        <div class="container" onclick="redirectedToWebsite()">
              <strong>De-show summer internship</strong>
              <p id="demo"></p>
              <div class="user_number"><i class="fa-solid fa-user"></i>
              <p>293/800</p></div>
              <p> Starts on: 18/08/2024, 08:00am</p>
              <p> End in: 22/10/2024, 12:00am</p>
              <!-- <details><summary>Job details and description</summary>
              We’re looking for exceptional students from all backgrounds to join our internship program. 
              As an intern, you’ll focus on some of the most challenging and interesting problems in finance and 
              technology, while learning from experienced managers, tailored educational programming, and 
              distinguished guest speakers. You’ll also share in community-building social events with fellow 
              interns and employees.</details> -->
        </div>
           </div>
           <div class="info pres" id="box2">
              <img src="/images/google.png"/>
           </div>
           <div class="info pres" id="box3">
             <img src="/images/tcs.jpg"/>
           </div>
           <div class="info pres" id="box4">
             <img src="/images/tech.jpg"/>
           </div>
           <div class="info pres" id="box5">
            <img src="/images/amazon.jpg"/>
           </div>
        </div>
        <!-- More ongoing events -->
    </div>

    <section id="upcoming" class="event_holder">
        <h2>Upcoming Events</h2>
        <div class="event">
            <div class="info futu" id="box1"></div>
            <div class="info futu" id="box2"></div>
            <div class="info futu" id="box3"></div>
            <div class="info futu" id="box4"></div>
            <div class="info futu" id="box5"></div>
         </div>
        <!-- More upcoming events -->
    </section>

    <section id="past" class="event_holder">
        <h2>Past Events</h2>
        <div class="event">
            <div class="info past" id="box1"></div>
            <div class="info past " id="box2"></div>
            <div class="info past"id="box3"></div>
            <div class="info past"id="box4"></div>
            <div class="info past" id="box5"></div>
        </div>
        <!-- More past events -->
    </section>

    <footer>
    <div class="footer-container">
            <div class="footer-section about">
                <h3>About Us</h3>
                <p>
                    We connect students with the best career opportunities. Our portal provides a seamless experience for students and recruiters.
                </p>
            </div>
            <div class="footer-section contact">
                <h3>Contact Us</h3>
                <p>Email: info@placementportal.com</p>
                <p>Phone: +123-456-7890</p>
                <p>Address: 123 Placement Street, Career City</p>
            </div>
            <div class="footer-section quick-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Companies</a></li>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Job Listings</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="footer-section social">
                <h3>Follow Us</h3>
                <a href="#" target="_blank">Facebook</a> |
                <a href="#" target="_blank">Twitter</a> |
                <a href="#" target="_blank">LinkedIn</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Placement Portal | All Rights Reserved</p>
        </div>

        


        


    </footer>

<script>
// Set the date we're counting down to
var countDownDate = new Date("oct 22, 2024 15:37:25").getTime();

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

function redirectedToWebsite(){
    window.location.href="https://www.google.com";
}
document.addEventListener('DOMContentLoaded', () => {
    console.log('Footer loaded successfully!');
});
    </script>
</body>
</html>