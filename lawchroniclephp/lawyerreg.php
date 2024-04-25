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
<script>
function check()
{
	var p=/^\d{10}$/;
	
	var ph=document.memreg.memphno.value;
	if(ph.match(p))
	{
		return true;
	}
	else
	{
		document.getElementById('sp').innerHTML="enter 10 digits";
		return false;
	}
}
</script>
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
                    <img src="images/public.png" style="width:90px"/><li><a href="#services" class="menu_03">Public</a></li>
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
                  <h2>Lawyer Registration</h2>
                  <h4><a href="lawyerlogin.php">Back to login</a></h4>
                <form name="memreg" method="post" onsubmit="return(check());">
                  <table border="2px" align="center" cellspacing="1px">
                  <tr><th>Reference Number</th><td><input type="text" name="memrefno" value="<?php include("dbcon.php");
	extract($_POST);
	$rs1=mysqli_query($conid,"select max(refno)+1 from lawyerreg") or die(mysqli_error($conid));
	$a=mysqli_fetch_array($rs1);
	echo $a[0];?>"/></td></tr>
                  <tr><th>Name</th><td><input type="text" name="memname" required="required"/></td></tr>
                  <tr><th>Father Name</th><td><input type="text" name="memfatname" required="required"/></td></tr>
                  <tr><th>Address</th><td><textarea name="memadd" cols="21" required="required"></textarea></td></tr>
                    <tr><th>City</th><td><input type="text" name="memcity" required="required"/></td></tr>
                     <tr><th>State</th><td><input type="text" name="memstate" required="required"/></td></tr>
                      <tr><th>Country</th><td><input type="text" name="memcnty" required="required"/></td></tr>
                       <tr><th>DOB</th><td><input type="date" name="memdob" required="required"/></td></tr>
                       <tr><th>Phone Number</th><td><input type="text" name="memphno" required="required"/><span id="sp"></span></td></tr>
                       <tr><th>Email</th><td><input type="email" name="mememail" required="required"/></td></tr>
                       <tr><th>Qualification</th><td><input type="text" name="memquali" required="required"/></td></tr>
                       <tr><th>Designation</th><td><input type="text" name="memdesig" required="required"/></td></tr>
                       <tr><th>Role</th><td><select name="memrole">
                       <option value="select any">--Select Role--</option>
                       <option value="criminal lawyer">Criminal Lawyer</option>
                       <option value="legal advisor">Legal Advisor</option>
                       <option value="civil lawyer">Civil Lawyer</option>
                        <option value="bankruptcy Lawyer">Bankruptcy Lawyer</option>
                        <option value="immigration lawyer">Immigration Lawer</option>
                        <option value="family lawyer">Family Lawyer</option>
                        <option value="business lawyer">Business Lawyer</option>
                        <option value="accident lawyer">Accident Lawyer</option>
                       </select></td></tr>
                       <tr><th>Court</th><td><input type="text" name="memcourt" required="required"/></td></tr>
                       <tr><th>Court Address</th><td><textarea name="courtadd" cols="21" required="required"></textarea></td></tr>
                  <tr><th>Password</th><td><input type="password" name="mempass" required="required"/></td></tr>
                  <tr><th>Security Question</th><td><select name="memsecq"><option>--Select--</option><option>What is your NickName</option>
                <option>What is your First school Name</option>
                <option>What is your favourite Dish</option>
                <option>What is your favourite place</option></select></td></tr>
                <tr><th>Answer</th><td><input type="password" name="seans" required="required" /></td></tr>
                  <tr><th><input type="submit" name="memsub" value="Register"/></th><th><input type="reset" name="memres" value="Reset" /></th></tr>
                  
                  
                  
                  
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
if(isset($_POST['memsub']))
{
	include("dbcon.php");
	extract($_POST);
	mysqli_query($conid,"insert into lawyerreg values($memrefno,'$memname','$memfatname','$memadd','$memcity','$memstate','$memcnty','$memdob',$memphno,'$mememail','$memquali','$memdesig','$memrole','$memcourt','$courtadd','$mempass','$memsecq','$seans')") or die(mysqli_error($conid));
	echo "<script>alert('Successfully Registered');</script>";
	//header("location:lawyerlogin.php");
}



?>