<?php
error_reporting(0);
include("dbconnection.php");
$dt = date("Y-m-d");
$tim = date("H:i:s");
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="M_Adnan" />
<!-- Document Title -->
<title>GoodLifeHospital</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

<!-- StyleSheets -->
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="extra.css">


<!-- Fonts Online -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Raleway:200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- JavaScripts -->
<script src="js/vendors/modernizr.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<link rel="stylesheet" href="extra.css">

<!-- <style>
  .external-links{
    width: 20%;
    margin-left: 7%;
    margin-top: 15%;
    position: absolute;
    z-index: 99;
    background-color: rgba(253, 5, 5, 0.4);

  }
.try a{
  padding-left: 2rem;
  padding-top: 1rem;
  color: white;
}
.external-links  a:hover{
  background-color: grey;
  color: blue;
}
</style> -->

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; 
  position: fixed; 
  z-index: 9; 
  padding-top: 15%; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);  */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
  height: 100%;
  z-index: 0.2;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.link-button{
  border: 0px;
  color: red;
  background-color: white;
}
.link-button:hover{
  color: red;
  background-color: #629ee7;
}
</style>
</head>
<body>

<!-- Page Loader -->
<div id="loader">
  <div class="position-center-center">
    <div class="cssload-thecube">
      <div class="cssload-cube cssload-c1"></div>
      <div class="cssload-cube cssload-c2"></div>
      <div class="cssload-cube cssload-c4"></div>
      <div class="cssload-cube cssload-c3"></div>
    </div>
  </div>
</div>

<div class="external-links" >
  <div class="try" >
     <a href="http://localhost/ecommerce/index.php"><i class="fa fa-cart-plus" aria-hidden="true"></i></i><span> </span> Phamacy</a>
     <br>
     <br>
     <a href="#"><i class="fa fa-umbrella" aria-hidden="true"></i></i><span> </span> Health Insurance</a>
     <br>
     <br>
     <a href="#"><i class="fa fa-university" aria-hidden="true"></i></i><span> </span> Blood Bank</a>
     <br>
     <br>
     <a href="#"><i class="fa fa-flask" aria-hidden="true"></i></i></i><span> <i class="fa fa-stethoscope" aria-hidden="true"></i></span> Health Lab Services</a>
     <br>
     <br>

  </div>
</div>  
  <!-- Header -->
  <header style="position: fixed;background-color: white; height: 8em;" class="header-style-2">
    <div class="container">
      <div class="logo"> <a href="index.html"><img src="images/logo.jpg" alt="" style="height: 51px;"></a> </div>
      <div class="head-info">
        <ul>
          <li> <i class="fa fa-phone"></i>
            <p><a href="tel:+254798750550">+254 798 750 550</a><br>
            <a href="tel:+254742486871">+254 742 486 871</a></p>
          </li>
          <li> <i class="fa fa-envelope-o"></i>
            <p><a href="mailto:felixwanjala001@gmail.com">felixwanjala001@gmail.com</a><br>
              <a href="mailto:felixwanjala001@gmail.com">info@goodlife.com</p>
          </li>
          <li> <i class="fa fa-map-marker"></i>
            <p>00111 miasha Lane<br>
             Town Yetu</p>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Nav -->
    <nav class="navbar ownmenu">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        
        <!-- NAV -->
        <div class="collapse navbar-collapse navbar-right" id="nav-open-btn">
          <ul class="nav">
            <li> <a href="index.php">Home </a></li>
            <li><a href="about.php">About</a></li>            
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Appointment</a>
              <ul class="dropdown-menu multi-level" style="display: none;">
                <li><a href="patientappointment.php">Pysical Appointment</a></li>
                <li><a href="doctorlogin.php">Virtual Appointment</a></li>
                
              </ul>
            </li>            <li><a href="contact.php">Contact </a></li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Emergency</a>
              <ul class="dropdown-menu multi-level" style="display: none;">
                <li><a href="#.php" ><button class="link-button" id="myBtn"><img src="images/ambulance.jpg" alt="ambulance" style="height: 25px;"> Ambulance</button></a></li>
                <li><a href="#.php" ><button class="link-button" id="#"><img src="images/bike.png" alt="health bike" style="height: 25px;"> Health Bike</button></a></li>
                <li><a href="#.php" ><button class="link-button" id="#"><img src="images/drone.jfif" alt="drone" style="height: 25px;"> Drone</button></a></li>
                <li><a href="#.php" ><button class="link-button" id="#"><img src="images/choper.jpg" alt="Flying doctors" style="height: 25px;"> Flying Doctors</button></a></li>
 
                <!-- <li><a href="#.php"><img src="images/bike.png" alt="health bike" style="height: 25px;"> Health Bike</a></li>
                <li><a href="#.php"><img src="images/drone.jfif" alt="drone" style="height: 25px;"> Drone</a></li>
                <li><a href="#.php"><img src="images/choper.jpg" alt="flying doctor" style="height: 25px;"> Flying Doctors</a></li> -->

              </ul>
                          <!-- The Modal -->
            <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <p><div class="mapouter">
                <div class="gmap_canvas">
                  <iframe width="600px" height="700px" id="gmap_canvas" 
                  src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                  frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe><a href="https://123movies-to.org">123 movies</a><br><style>.mapouter{position:relative;text-align:right;height:100px;width:120px;}
                </style>
                <a href="https://www.embedgooglemap.net"></a>
                <style>.gmap_canvas {
                  overflow:hidden;
                  background:none!important;
                  height:500px;
                  width:600px;
                  }
                  </style>
                  </div>
                </div>
              </p>
            </div>
                          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
              modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script>
            </li> 
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Log In </a>
              <ul class="dropdown-menu multi-level" style="display: none;">
                <li><a href="adminlogin.php">Admin</a></li>
                <li><a href="doctorlogin.php">Doctor</a></li>
                <li><a href="patientlogin.php">Patient </a></li>
                
              </ul>
            </li>           
          </ul>
        </div>
      </div>
    </nav>
    
  </div>
  </header>
  <div style="padding-top: 10%;"></div>

