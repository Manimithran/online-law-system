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
	if((foans.tno.value=="")&&(foans.hding.value=="")&&(foans.lcat.value=="")&&(foans.des.value=="")&&(foans.pd.value=="")&&(foans.pp.value=="")&&(foans.ans.value==""))
	{
		document.getElementById('stno').innerHTML="*";
		document.getElementById('shding').innerHTML="*";
		document.getElementById('slcat').innerHTML="*";
		document.getElementById('sdes').innerHTML="*";
		document.getElementById('spd').innerHTML="*";
		document.getElementById('spp').innerHTML="*";
		document.getElementById('sans').innerHTML="*";
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
                  <h2>Posted Queries</h2>
                  <!--<img src="images/tooplate_image_01.jpg" alt="Image 01" class="image_wrapper image_fl" />-->
                  <a href="grouphome.php">Back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="loglaw.php">Logout</a>
                  <?php $tn=$_GET['tn'];
				  session_start();
				  if(isset($_SESSION['lawname']))
				  {
					   $ln=$_SESSION['lawname'];
				  		$rno=$_SESSION['rn'];
						/*include("dbcon.php");
						$l=mysqli_query($conid,"select lname from lawyerreg where refno=$rno")or die(mysqli_error($conid));
						$a1=mysqli_fetch_array($l);
						//$a1[0];*/
				  ?>
                <table border='2px' cellpadding="8px">
                <form name="foans" method="post" onsubmit="return(check());">
                <tr><th>Thread No</th><td><input type="text" name="tno" style="border:none;background-color:RGB(245,243,244);" value="<?php include("dbcon.php"); 
				
				$rs=mysqli_query($conid,"select threadno from forums where threadno=$tn")or die(mysqli_error($conid));
				$a=mysqli_fetch_array($rs)or die(mysqli_error($conid));
				echo $a[0];
				 ?>"/><span id="stno"></span></td></tr>
                 <tr><th>Heading</th><td><input type="text" name="hding" style="border:none;background-color:RGB(245,243,244);" value="<?php include("dbcon.php"); 
				$rs1=mysqli_query($conid,"select heading from forums where threadno=$tn")or die(mysqli_error($conid));
				$b=mysqli_fetch_array($rs1)or die(mysqli_error($conid));
				echo $b[0];
				 ?>"/><span id="shding"></span></td></tr>
                <tr><th>Law Category</th><td><input type="text" name="lcat" style="border:none;background-color:RGB(245,243,244);" value="<?php include("dbcon.php"); 
				$rs2=mysqli_query($conid,"select lawcategory from forums where threadno=$tn")or die(mysqli_error($conid));
				$c=mysqli_fetch_array($rs2)or die(mysqli_error($conid));
				echo $c[0];
				 ?>"/><span id="slcat"></span></td></tr>
                 <tr><th>Description</th><td><textarea name="des" rows="8"><?php include("dbcon.php"); 
				$rs3=mysqli_query($conid,"select description from forums where threadno=$tn")or die(mysqli_error($conid));
				$d=mysqli_fetch_array($rs3)or die(mysqli_error($conid));
				echo $d[0];
				 ?></textarea><span id="sdes"></span></td></tr>
                <tr><th>Posted Date</th><td><input type="text" name="pd" style="border:none;background-color:RGB(245,243,244);" value="<?php include("dbcon.php"); 
				$rs4=mysqli_query($conid,"select pdate from forums where threadno=$tn")or die(mysqli_error($conid));
				$e=mysqli_fetch_array($rs4)or die(mysqli_error($conid));
				echo $e[0];
				 ?>"/><span id="spd"></span></td></tr>
                 <tr><th>Posted Person</th><td><input type="text" name="pp" style="border:none;background-color:RGB(245,243,244);" value="<?php include("dbcon.php"); 
				$rs5=mysqli_query($conid,"select username from forums where threadno=$tn")or die(mysqli_error($conid));
				$f=mysqli_fetch_array($rs5)or die(mysqli_error($conid));
				echo $f[0];
				 ?>"/></td><span id="spp"></span></tr>
                <tr><th>Answer</th><td><textarea name="ans" rows="8"></textarea><span id="sans"></span></td></tr>
                <tr><td colspan="2" align="center"><input type="submit" name="fans" value="Submit" /></td></tr>
                </table>
                 </form>
                  
                <?php }?>  
                  
                  
                  
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
if(isset($_POST['fans']))
{
	extract($_POST);
	$cd=date("Y-m-d h:i:s",time()+19800);
	mysqli_query($conid,"insert into forumanswer values($rno,'$ln',$tno,'$lcat','$ans','$cd')") or die(mysqli_error($conid));
	echo "<script>alert('Successfully Registered');</script>";
	
}



?>