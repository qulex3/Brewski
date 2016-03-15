<?php
require_once('/dbConnect.php');
require_once('/userConnect.php');


?> 


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Brewski2520</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
    <link href="css/mobile-styles.css" rel="stylesheet" type="text/css" media="only screen and (max-device-width: 768px)">
	</head>
	
	<body>


<header class="navbar navbar-default navbar-static-top" role="banner">
  <div class="col-xs-3"></div>
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand" id="navHome">aaa</a>
    </div>
  <div class="col-xs-3"></div>

    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right" id="navRightLogged">
        <li><a href="#" class="navHome" >Home</a></li>
        <li><a href="#" class="navProducts" >Products</a></li>
        <li><a href="#" class="navAbout" >About Us</a></li>
        <li><a href="#" class="navContact" >Contact Us</a></li>
        <li><a href="#" class="navAdmin" >Admin</a></li>
        <li><a href="#" class="navLogout" >Logout</a></li>
      </ul>
      <ul class="nav navbar-nav navbar" id="navRightLogin">
        <!-- <li><a href="#" class="navHome" >Home</a></li> -->
        <li><a href="#" class="navProducts" >PRODUCTS</a>
          <ul>
            <li><a href="#" class="navProducts" id="navProduct1">product1</a></li>
            <li><a href="#" class="navProducts" id="navProduct2">product2</a></li>
            <li><a href="#" class="navProducts" id="navProduct3">product3</a></li>
          </ul>
        </li>

        <li><a href="#" class="navAbout" >ABOUT</a></li>
        <li><a href="#" class="navContact" >CONTACT</a></li>
        <li><a href="#" class="navLogin">LOGIN</a></li>
      </ul>
    </nav>
    
  <div class="col-xs-6"></div>
</header>
<!-- Begin Body -->
<div class="container">
	
  <div class="row">
  			<div class="col-xs-3" id="leftCol"></div> 
			   



			    <!-- HOME PAGE -->
      		<div class="col-xs-9" id="pageHome">
            <h2 id="sec0">PUTTING THE BRO INTO THE BREW</h2>
            Located in the campus of BCIT, Brewski2520 delivers one of the most plain and subpar craft beer to Burnaby. Brewski2520 follows the
				    footsteps of many developers found on Google.
          </div>

          <!-- PRODUCTS PAGE -->
          <div class="col-xs-9" id="pageProducts">
            <div class="row" id="product1">
              <h3>product1</h3>
              <p>sjdksdjks</p>
            </div>
            <div class="row" id="product2">
              <h3>product2</h3>
            </div>
            <div class="row" id="product3">
              <h3>product3</h3>
            </div>
          </div>

          <!-- ABOUT US PAGE -->
          <div class="col-xs-9" id="pageAbout">
            <h2 id="sec0">ABOUT</h2>
            
          </div>

          <!-- CONTACT US PAGE -->
          <div class="col-xs-9" id="pageContact">
            <h2 id="sec0">CONTACT</h2>
            
          </div>

          <!-- LOGIN PAGE-->
         <div class="col-xs-9" id="pageLogin">
            <form action="index.php" method="post" id="form">
              <div class="form-group">
                <input type="username" class="form-control" name="username" placeholder="Enter username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter password" >
              </div>
                <button name="login" type="submit" class="btn btn-warning btn-lg btn-block" value="Submit" >Log in</button>
            </form>
          </div>

          <!-- ADMIN PAGE -->
          <div class="col-xs-9" id="pageAdmin">
            <h2 id="sec0">Administrative Options</h2>
            
          </div>


  </div>

</div><!--container-->

<div class="footer">
<p style="color: black">Brewski2520</p>
</div>
	<!-- script references -->
		<script src="js/jquery-2.2.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    <script src="js/js.js"></script>
	</body>
</html>