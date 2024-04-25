<!DOCTYPE html>
<html>
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
                </ul>
            </div>
		</div> <!-- end of sidebar -->  
    
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
              <div class="panel" id="home">
                <div class="content_section">
                  <h2 style="font-size:25px">Welcome <?php include("dbcon.php");
				  session_start();
				  $rno=$_SESSION['rn'];
				  $rs=mysqli_query($conid,"select lname from lawyerreg where refno=$rno")or die(mysqli_error($conid));
				 $a=mysqli_fetch_array($rs);
				 echo $a[0];
				 $_SESSION['lawname']=$a[0];
				   ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="grouphome.php">Back</a>&nbsp;&nbsp;<a href="logout.php">Logout</a></h2>
                   <h3 style="text-align:center">List of Documents</h3>
<?php
$rid=opendir("documents");
while($f=readdir($rid))
{
	if(($f!=".")&&($f!=".."))
	echo "<a href='documentdownload.php?fn=$f&fp=documents/$f'>$f</a><br>";
}
?>
 </div>
                
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