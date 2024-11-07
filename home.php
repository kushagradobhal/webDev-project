<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* General Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Playfair Display', serif;
}

/* Body and Main Layout */
body {
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.6;
    padding: 0;
    margin: 0;
}

/* Header Section */
header {
    background-color: #032241;
    color: #fff;
    padding: 10px 0;
    text-align: center;
    position: relative;
    z-index: 1;
}

.header-logo {
    width: 120px;
    height: auto;
    margin-right: 10px;
    vertical-align: middle;
}

.heading-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

h1 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 48px;
    text-transform: uppercase;
    margin-top: 10px;
}

.highlight {
    color: #e74c3c;
}

.highlight-red {
    color: #c0392b;
}

/* Navigation */
nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #e74c3c;
}

/* Content Section */
.content {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px 0;
    position: relative;
}

.college-building {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.4;
    z-index: -1;
}

.login-container {
    text-align: center;
    background: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    width: 350px;
    box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.1);
}

.login-box h2 {
    font-size: 22px;
    color: #2c3e50;
    margin-bottom: 20px;
}

.cta-button {
    display: block;
    padding: 10px 0;
    background-color: #3498db;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    margin: 10px 0;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #2980b9;
}

/* Info Section */
.info {
    background-color: #fff;
    padding: 50px 10%;
    text-align: left;
}

.info h3 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 32px;
    color: #2c3e50;
    margin-bottom: 20px;
}

.info p {
    font-size: 18px;
    line-height: 1.8;
    margin-bottom: 15px;
    color: #555;
}

.info-image {
    display: block;
    width: 100%;
    margin: 20px 0;
    border-radius: 10px;
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
}

/* Footer */
footer {
    background-color: #2c3e50;
    color: white;
    text-align: center;
    padding: 15px 0;
}

footer p {
    font-size: 14px;
}

/* Responsive Design */
@media (max-width: 768px) {
    h1 {
        font-size: 36px;
    }

    nav ul li {
        display: block;
        margin: 10px 0;
    }

    .login-container {
        width: 90%;
    }

    .info {
        padding: 30px 5%;
    }
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Placement Portal - Graphic Era</title>
    <link
    rel="stylesheet"
    href="./style.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="heading-container">
            <img class="Header-logo" src="https://images.shiksha.com/mediadata/images/1571907550phpxnFwuR.jpg" alt="Graphic Era Logo" class="logo">
            <h1>Placement Portal, <span class="highlight"> Graphic Era <span class="highlight-red" > Hill University</span></span> </h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Companies</a></li>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="content">
        <div class="login-container">
            <img class="college-building" src="https://www.gehu.ac.in/assets/GEHU-Dehradun-1abd6f9c.jpg" alt="College-building">
            <div class="login-box" >
                <h2>A one stop portal for Placements & Internships</h2>
                <a href="/studentLogin" class="cta-button">Student</a>
                <a href="/login" class="cta-button">Admin</a>
                <a href="/login" class="cta-button">Super Admin</a>
            </div>
        </div>
    </div>

    <div class="info">
        <h3>About the Placement Portal</h3>
        <p>The Placement Portal of Graphic Era Hill University (GEHU) serves as a dynamic platform designed to bridge the gap between academic excellence and professional success. Tailored to meet the diverse needs of students, this portal plays a crucial role in preparing them for their future careers, providing them with the resources, guidance, and opportunities required to excel in today’s competitive job market.he primary objective of the Placement Portal is to streamline the placement process by connecting students with potential employers. This portal offers a comprehensive solution to help students enhance their employability skills, gain exposure to the corporate world, and explore career opportunities. Through this portal, GEHU aims to assist students in securing meaningful job roles that align with their academic qualifications and personal aspirations.
            The portal facilitates interactions between students, the university’s placement team, and a wide range of companies from different sectors. With the rapidly evolving job market and technological advancements, the Placement Portal ensures that students remain updated with the latest trends and demands of the industry.The Placement Portal at Graphic Era Hill University is a vital tool that empowers students to take control of their career paths. By offering a centralized platform for job search, skill development, and industry interaction, the portal enhances students’ chances of securing rewarding employment. It stands as a testament to the university’s commitment to nurturing future leaders and innovators who can thrive in a global economy.
        </p>
        <img class="info-image" src="https://www.localguidesconnect.com/t5/image/serverpage/image-id/1295575iCF358681DFB78BEC?v=v2" alt="university building">
        <h3>About Us</h3>
        <p>Graphic Era Hill University (GEHU) is a prestigious institution dedicated to fostering academic excellence, innovation, and holistic development. Nestled in the picturesque hills of Dehradun, our university stands as a beacon of higher education, blending modern pedagogy with a rich heritage.</p>
        <p>Founded with a vision to provide world-class education and research opportunities, GEHU offers a diverse range of undergraduate, postgraduate, and doctoral programs across various disciplines, including engineering, management, design, hospitality, and social sciences. Our curriculum is meticulously designed to meet industry standards and equip students with the skills needed to excel in their chosen fields.</p>   
        <p>At GEHU, we prioritize a student-centric approach, emphasizing interactive learning and practical experience. Our state-of-the-art infrastructure includes well-equipped laboratories, advanced research facilities, and a comprehensive library. We foster a dynamic learning environment through various workshops, seminars, and guest lectures conducted by industry experts.</p>   
        <p>Graphic Era Hill University is more than an educational institution; it is a community dedicated to shaping future leaders and pioneers. Join us on this journey to excellence and be a part of our legacy of success and innovation.</p>
    </div>

    <footer>
        <div class="container">
            <p>&copy; Graphic Era | Placement Portal | All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>


