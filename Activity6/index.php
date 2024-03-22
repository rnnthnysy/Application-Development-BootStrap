<!DOCTYPE html>
<html>
   <head>
        <div>
        <title>Activity 6 Scroll Spy</title>	
		</div>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<style>
            section{
                width: 100vw;
                height: 100vw;
                padding-top: 50px;
            }
            h1{
                padding:0;
                margin:0;
            }
        </style>
		
	</head>
	
   <body data-spy="scroll" data-target=".navbar">
		<nav class="navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<li><a href="#home">Home</a></li>
				<li><a href="#about">About Us</a></li>
				<li><a href="#product">Products</a></li>
				<li><a href="#contact">Contact Us</a></li>
			</ul>
		</nav>
		
		<nav class="navbar navbar-inverse navbar-fixed-bottom">
			<ul class="nav navbar-nav">
				<li> <a href="#home">Home</a> </li>
                <li> <a href="#about">About us</a> </li>
                <li> <a href="#product">Products</a> </li>
                <li> <a href="#contact">Contact us</a> </li>
			</ul>
		</nav>
		
		<section id="home" style="background: pink;">
            <h1>Home</h1>
        </section>
        <section id="about" style="background: skyblue;">
            <h1>About us</h1>
        </section>
        <section id="product" style="background: grey;">
            <h1>Products</h1>
        </section>
        <section id="contact" style="background: lightgreen;">
            <h1>Contact us</h1>
        </section>
 
   </body>

</html>