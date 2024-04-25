<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
	Template 2018 Notebook
    http://www.tooplate.com/view/2018-notebook
-->
<title>Notebook - Free HTML Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />

<!--<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>-->

</head>
<body>
	
<div id="slider">
	<div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
		
            <div id="header">
                <br/> <br/> <br/> <br/><strong><h3 style="color:white;text-align:center">AUTOMATION OF CIVIL COURTS<!--<a href="#"><img src="images/tooplate_logo.png" title="Notebook Template - tooplate.com" alt="Notebook free html template" /></a>--></h3></strong>
            </div>    
			
            <div id="menu">
                <ul class="navigation">
                    <img src="images/home.png"/><li><a href="homepage.php" class="menu_01">Home</a></li>
                    <img src="images/lawyer.jpg" style="width:90px"/><li><a href="lawyerlogin.php" class="menu_02">Lawyer</a></li>
                    <img src="images/public.png" style="width:90px"/><li><a href="publiclogin.php" class="menu_03">Public</a></li>
                    <!--<li><a href="#gallery" class="menu_04">Gallery</a></li>
                    <li><a href="#contactus" class="menu_05">Contact</a></li>-->
                </ul>
            </div>
		</div> <!-- end of sidebar -->  
    
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
              <div class="panel" id="home">
                <div class="content_section">
                  <h2>Forum Answers</h2>
                  <!--<img src="images/tooplate_image_01.jpg" alt="Image 01" class="image_wrapper image_fl" />-->
                  <center><a href="publichome.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a>
<?php
                  session_start();
				  if(isset($_SESSION['un']))
				  {
					   $us=$_SESSION['un'];
					  //echo "<h4 style='font-size:25px'>Welcome $ln</h4>";
					 
					 
				  include("dbcon.php");
				  $rs=mysqli_query($conid,"select * from forumanswer")or die(mysqli_error($conid));
				 $count= mysqli_num_fields($rs);
				 echo "<table border=1px cellpadding='10px'><tr><th>ThreadNo</th><th>Answered Person</th><th>Replied Date</th><th>Answer</th></tr>";
				 while($a=mysqli_fetch_array($rs))
				 {
				
				echo "<tr><td>$a[2]</td><td>$a[1]</td><td>$a[5]</td><td>$a[4]</td></tr>";
				 }
				 echo "</table>";
				 
				  
				  }
				  ?>
				  </div>