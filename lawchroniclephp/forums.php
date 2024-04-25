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
                  <center><span style="text-align:center;font-size:25px">FORUMS</span>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:25px;text-align:right">Welcome <?php include("dbcon.php");
				  session_start();
				  $usn=$_SESSION['un'];
				 // $ln=$_SESSION['lawname'];
				  $rs=mysqli_query($conid,"select name from publicreg where username='$usn'")or die(mysqli_error($conid));
				 $a=mysqli_fetch_array($rs);
				 echo $a[0];
				   ?></span></center>
                <center><img src="images/forum.jpg" alt="Image 01"/></center><form name="pubforum" method="post">
                  <table border="2px" cellpadding="10px" align="center">
                  <tr><th colspan="2">POSTING OF QUERIES</th></tr>
                  <tr><th>Thread Number</th><td><input type="text" name="thno" style="border:none;background-color:RGB(245,243,244);text-align:center" value="<?php include("dbcon.php");
				  $t=mysqli_query($conid,"select max(threadno)+1 from forums")or die(mysqli_error($conid));  
				  $tn=mysqli_fetch_array($t);
				  echo $tn[0];
				  ?>"/></td></tr>
                  
                  <tr><th>Heading</th><td><input type="tect" name="forumhead" required="required" style="width:225px"/></td></tr>
                  
                  <tr><th>Law Category</th><td><select name="lcat">
                   <option value="select any">--Select--</option>
                   <option value="Banking Laws">Banking Laws </option>
                        <option value="Consumer Laws">Consumer Laws</option>
                        <option value="Corporate Laws">Corporate Laws</option> 
                        <option value="Criminal and Motor Accident Laws">Criminal and Motor Accident Laws </option>
                         <option value="Direct Tax Laws">Direct Tax Laws</option>
                        <option value="Environment Laws">Environment Laws</option>
                        <option value="Family Laws">Family Laws</option>
                        <option value="Foreign Exchange Laws">Foreign Exchange Laws</option>
                        <option value="Intellectual Property Laws">Intellectual Property Laws</option>
                       <option value="Information Technology law">Information Technology law</option>
                        <option value="Legal and Professional Laws">Legal and Professional Laws</option>
                        <option value="Media Laws">Media Laws</option>
                        <option value="Miscellaneous Laws">Miscellaneous Laws</option>
                        <option value="NRI Related Laws">NRI Related Laws</option>
                       <option value="Property Laws">Property Laws</option>
                         <option value="Service and Labour Laws">Service and Labour Laws</option>
                  </select></td></tr>
                  
                  <tr><th>Description</th><td><textarea name="forumdesc" cols="30" rows="10"></textarea></td></tr>
                  
                  <tr><th colspan="2"><input type="submit" name="pubforsub" value="Submit" /></th><th><a href="forums.php">Refresh</a>&nbsp;&nbsp;&nbsp;<a href="publichome.php">Back</a></th></tr>
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
</body>
</html>
<?php
if(isset($_POST['pubforsub']))
{
extract($_POST);
include("dbcon.php");
$cdt=date("Y-m-d h:i:s",time()+19800);
//echo $cdt;
$rs1=mysqli_query($conid,"insert into forums values($thno,'$forumhead','$lcat','$forumdesc','$cdt','$usn')") or die(mysqli_error($conid));
echo "<script>alert('Posted Successfully');</script>";

}


?>