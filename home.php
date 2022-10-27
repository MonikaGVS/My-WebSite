<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}


?>

<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css.css">
    <style type="text/css">
    	.header
    	{
    		width: 100%;
    		height: 10%;
    		background-color: lightgrey;
    	}
		.footer
		{
    		width: 100%;
    		height: 10%;
    		background-color: green;
    		position: absolute;
    		bottom: 0%;
    	}
		.navbar {
  overflow: hidden;
  background-color: #FFFFFF;
  font-family: Arial, Helvetica, sans-serif;
  box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: black;
  text-align: center;
  padding: 16px 20px;
  text-decoration: none;
}


    </style>
</head>
<body>
</div>
<div class="header">
	<h1 style="color: black;">
	<div class="navbar">
  <a href="Home.html">HOME</a>
  <a href="About.html">ABOUT</a>
  <a href="contactus.html">CONTACT US</a>
  <a href="Blog.html">BLOG</a>
  <!--<a href="#About">About</a>
  <a href="#Contact Us">Contact Us</a>
  <a href="#Blog">Blog</a>-->
  <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
</div>
</h1>
</div>
<?php
$title="Web site";                                  
?>
<img src="https://integrumsolutions.in/wp-content/uploads/2021/10/My-project-implementation-is-a-success.png"width="1520" height="500">
<?php               
?>
<div class="footer">
	<center><h1 style="color: white;">copyrights@Monika</h1></center>
</div>
</body>
</html>



   <!-- <div class="container">
        <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
    </div>-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    