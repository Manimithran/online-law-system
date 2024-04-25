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
                  <h2 style="text-align:center">Inbox</h2>
                  <h2 style="font-size:25px">Welcome&nbsp;<?php session_start();include("dbcon.php");
				  $rno=$_SESSION['rn'];
				  $rs1=mysqli_query($conid,"select lname from lawyerreg where refno=$rno")or die(mysqli_error($conid));
				 $a1=mysqli_fetch_array($rs1);
				 echo $a1[0];
				 $_SESSION['lawname']=$a1[0];
				  
				  ?></h2>
				  <a href="grouphome.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="loglaw.php">Logout</a>
				  <?php
                  
                 if(isset($_SESSION['rn']))
				  {
					  $rs=mysqli_query($conid,"select * from inbox where toadd='$rno'") or die(mysqli_error($conid));
					  echo "<table border='2px'><tr><th>Delete</th><th>Sender</th><th>Subject</th><th>Send Date</th></tr>";
					 
					 while($a=mysqli_fetch_array($rs))
					 {
						 echo "<tr>";
						 echo "<td><a href='lawdelmail.php?s1=$a[0]&su1=$a[2]'>Delete</a></td>";
						 
							 echo "<td>".$a[0]."</td>";
							 echo "<td><a href='lawmaildisp.php?s=$a[0]&su=$a[2]'>".$a[2]."</a></td>";
							  echo "<td>".$a[3]."</td>";
							  
						 
						 echo "</tr>";
					 }
					 echo "</table>";
				  }
                  ?>
                  
                </div>
                <!--<div class="content_section last_section">
                  <h2>Our Services</h2>
                  <ul class="service_list">
                    <li><a href="#" class="service_one">Maecenas suscipit vulputate dui vel adipiscing</a></li>
                    <li><a href="#" class="service_two">Pellentesque habitant morbi tristique senectus</a></li>
                    <li><a href="#" class="service_three">Duis at sapien ut sapien commodo molestie</a></li>
                    <li><a href="#" class="service_four">Nam porttitor quam eu ante aliquam eu</a></li>
                    <li><a href="#" class="service_five">Maecenas posuere fringilla ipsum ut pretium</a></li>
                  </ul>
                </div>-->
              </div> <!-- end of home -->
			  </div><!-- end of scroll -->
		</div>
    </div> <!-- end of content -->
</div>

<div id="footer">
    
	<div id="social_box">
		<a href="#"><img src="images/facebook.png" alt="facebook" /></a>
        <a href="#"><img src="images/flickr.png" alt="flickr" /></a>
        <a href="#"><img src="images/myspace.png" alt="myspace" /></a>
        <a href="#"><img src="images/twitter.png" alt="twitter" /></a>
        <a href="#"><img src="images/youtube.png" alt="youtube" /></a>
    </div>
    
    <div id="footer_left">
		
		Copyright © 2048 <a href="#">Company Name</a><br />
		Designed by <a href="http://www.tooplate.com">Free HTML Templates</a><br />
       
    </div>
	
    <div class="cleaner"></div>
</div>
<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
</html>