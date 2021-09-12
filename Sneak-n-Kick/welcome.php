<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome</title>
   
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
	font-family: 'Poppins' , sans-serif;
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
html{
    scroll-behavior: smooth;
    transition-delay: 1ms;
}
/* Navigation Bar */
nav{
	background-color: #34373d;
	color: #e91e63;
	display: flex;
	align-items: center;
	min-height: 8vh;
	justify-content: space-around;
	font-family: 'Poppins',sans-serif;
}
.logo a{
	color: rgb(228, 218, 218);
	text-transform: uppercase;
	letter-spacing: 3px;
	font-size: 18px;
    text-decoration:none;
}
.nav-links{
	display: flex;
	width: 34%;
	justify-content: space-around;
  
}
.nav-links a{
	color: rgb(228, 218, 218);
	letter-spacing: 3px;
	font-weight:500;
    text-decoration:none;
}

nav ul{
    list-style-type: none;
}

/* Body */  

/* About Us Page */
body{
    background-color: #24262b;
    color: #fff;
}
.heading{
    font-size: 40px;
    margin-top: 50px;
    margin-bottom: 30px;
    color: #e91e63;
    font-weight: bold;
    text-align: center;
}
.content{
    max-width: 1080px;
    margin-bottom: 150px;
    margin-top: 100px;
    margin-left: 19%;
    margin-right: 19%;
    text-align: left;
    letter-spacing: 1px;
}
p{
	text-align: left;
}
/* Contact Us page */
.ContAct{
	position: relative;
	min-height: 100vh;
	padding: 50px 100px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.ContAct .heading{
	text-align: center;
	font-size: 36px;
	font-weight: 500;
	color:#e91e63;
	
}
.contact-container{
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	margin-top: 30px;
}
.contact-container .contact-info{
	width: 50%;
	display: flex;
	flex-direction: column;
}
.contact-container .contact-info .box{
	position: relative;
	padding: 20px 0;
	display: flex;
}
.contact-container .contact-info .box .icon{
	min-width: 60px;
	height: 60px;
	background-color: #34373d;
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 50%;
	font-size: 22px;
}
.contact-container .contact-info .box .text{
	display: flex;
	margin-left: 20px;
	font-size: 16px;
	color: #fff;
	flex-direction: column;
	font-weight: 300;

}
.contact-container .contact-info .box .text h3{
	font-weight: 500;
	color: #e91e63;
}
.contact-form{
	width: 40%;
	padding: 40px;
	background-color: #34373d;
}
.contact-form h2{
	color: #e91e63;
	font-size: 30px;
	font-weight: 500;
}
.contact-form .inputbox{
	position: relative;
	width: 100%;
	margin-top: 10px;
	
}
.contact-form .inputbox input,
.contact-form .inputbox textarea{
	width: 100%;
	padding: 5px 0px;
	font-size: 16px;
	margin: 10px 0px;
	border: none;
	border-bottom: 2px solid #24262b;
	outline: none;
	resize: none;
}
.contact-form .inputbox span{
	color: #24262b;
	position: absolute;
	left: 0;
	padding: 5px 0;
	font-size: 16px;
	margin: 10px 0;
	pointer-events: none;
	transition: 0.5s;
	color: #bbbbbb;
}
.contact-form .inputbox input:focus ~ span,
.contact-form .inputbox input:valid ~ span,
.contact-form .inputbox textarea:focus ~span,
.contact-form .inputbox textarea:valid ~span
{
	color: #e91e63;
	font-size: 14px;
	font-weight: 500;
	transform: translateY(-25px);
}

.contact-form .inputbox input[type="Submit"]{
	width: 100px;
	background:#e91e63;
	color: #fff;
	border: none;
	cursor: pointer;
	padding: 10px;
	font-size: 18px;
}

/* Footer */
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #34373d;
    padding: 70px 0;
}
.footer-col{
    width: 25%;
    padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(45, 65, 60, 0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}


.shoes{
	height: 450px;
	margin-top: 150px;
	margin-bottom: 150px;
	margin-left: 100px;
	margin-right: 100px;
  }
  
  .shoes-content {
	position: absolute;
	top: 40%;
	right: 230px;
	transform: translate(25%, -50%);
  }
  
  .btn4 {
	display: inline-block;
	background-color: #e91e63;
	padding: 1.2rem 4rem;
	color: #fff;
	font-weight: 600;
	text-transform: uppercase;
	margin-top: 3rem;
	position: relative;
	left: 70px;
	top: 70px;
	text-decoration: none;
  }

  .line{
		height: 1px;
		width: 50%;
		margin-left: 25%;
		margin-right: 25%;
		
		border: #e91e63 solid;
		margin-top: 7px;
	}
        </style>

  </head>
  <body>
    <header>
      <!-- Navigation Bar -->
      <nav>
        <div class="logo">
          <h4>
            <a href="Html/index.html"> Sneak 'n' Kick </a>
          </h4>
        </div>
        <ul class="nav-links">
          <li><a href="../Html/index.html">Home</a></li>
          <li><a href="../Html/all1.html">Shop</a></li>
          <li><a href="../Html/Contact.html">Contact Us </a></li>
          <li><a href="../register.php">SignUp</a></li>
          <li><a href="../login.php">Login</a></li>

          <li>
            <a href="../Html/Cart.html" class="Cart"
              ><i class="bx bx-shopping-bag"></i
            ></a>
          </li>
        </ul>
      </nav>
    </header>

    <!-- image -->
    <img src="./16.jpeg" alt="" class="shoes" />

    <div class="shoes-content">
      <h1>
        Quality shoes, our priority.
        <hr class="line" />
      </h1>
      <a class="btn4" href="../Html/index.html">Explore Now</a>
    </div>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="../Html/About.html">about us</a></li>
              <li><a href="../Html/Services.html">our services</a></li>
              <li><a href="../Html/Privacy.html">privacy policy</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="../Html/Faq.html">FAQ</a></li>
              <li><a href="../Html/Shipping.html">shipping</a></li>
              <li><a href="../Html/return.html">returns</a></li>
              <li><a href="../Html/Order.html">order status</a></li>
              <li><a href="../Html/Payment.html">payment options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>shop</h4>
            <ul>
              <li><a href="../Html/all1.html">Sneakers</a></li>
              <li><a href="../Html/all1.html">Sports Shoes</a></li>
              <li><a href="../Html/all1.html">Party shoes</a></li>
              <li><a href="../Html/all1.html">All Shoes</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="https://www.facebook.com/" target="_blank"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a href="https://twitter.com/home?lang=en" target="_blank"
                ><i class="fab fa-twitter"></i
              ></a>
              <a href="https://www.instagram.com/" target="_blank"
                ><i class="fab fa-instagram"></i
              ></a>
              <a href="https://www.linkedin.com/feed/" target="_blank"
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
