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
<script type="text/javascript">
function check() {
if(f.t1.value=="") {
window.alert("To Address should not be Empty !")
return false
}
if(f.t2.value=="") {
window.alert("Enter Subject")
return false
}
if(f.t4.value=="") {
window.alert("Content should not be Empty !")
return false
}
else
{
return true;
}
}</script>
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
                  <h2>Mail Compose</h2>
                  <?php
				  include("dbcon.php");
session_start();
				  $rno=$_SESSION['rn'];
				  $rs=mysqli_query($conid,"select lname from lawyerreg where refno=$rno")or die(mysqli_error($conid));
				 $a=mysqli_fetch_array($rs);
				 echo "WELCOME ".$a[0];
				 $_SESSION['lawname']=$a[0];
				 $ln=$_SESSION['lawname'];
?>
                 <center><a href="grouphome.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a>
                 
                 <form name="f" action="lawyermailcompose.php" method="post" enctype="multipart/form-data" onsubmit="return check()">
<table align="center" border="0">
<tr>
<td align="right">To</td>

<td><input type="text" name="t1" size="30">
<a href="clientlist.php">Client List</a>
</td>
</tr>
 <tr>
<td align="right">Subject</td>
<td><input type="text" name="t2" size="50"></td>
</tr>
<tr>
<td align="right">Attachments</td>
<td><input type="file" name="t3" size="70"></td>
</tr>
<tr>
<td align="right">Content</td>
<td><textarea name="t4" cols="52" rows="10"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Send Mail">
</tr>
</table>                
    </form>             
                 
                 
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
<?php 
if(isset($_POST['submit'])) {
	include("dbcon.php");
	extract($_POST);
	$to=$t1;
	$sub=$t2;
	
	$attachname=$_FILES['t3']['name'];
	$attachtmp=$_FILES['t3']['tmp_name'];
	
	$target="attachments/".$attachname;
	move_uploaded_file($attachtmp,$target);
	$content=$_POST['t4'];
	$rs=mysqli_query($conid,"select refno from lawyerreg where lname='$ln'") or die(mysqli_error($conid));
	$rn=mysqli_fetch_array($rs);
	$sdn=$rn[0];
	$sdt=date("Y-m-d h:i:s",time()+19800);
	if(mysqli_num_rows($rs)>0) {
	mysqli_query($conid,"insert into inbox values('$sdn','$to','$sub','$sdt','$content','$target')") or die(mysqli_error());
	echo "<script>alert('Mailed Successfully')</script>";
	
	
	}
}
?>
