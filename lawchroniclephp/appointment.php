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
                  <center><h2 style="font-size:20px">Welcome <?php include("dbcon.php");
				  session_start();
				  $usn=$_SESSION['un'];
				  $rs=mysqli_query($conid,"select name from publicreg where username='$usn'")or die(mysqli_error($conid));
				 $a=mysqli_fetch_array($rs);
				 echo $a[0];
				   ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="publichome.php">Back</a>&nbsp;&nbsp;<a href="logout.php">Logout</a></h2></center>
                  <!--<img src="images/tooplate_image_01.jpg" alt="Image 01" class="image_wrapper image_fl" />-->
                  <h3 style="text-align:center">Lawyer Appointment</h3>
<?php
if(!isset($_POST['b1']) && !isset($_POST['b2'])) {
$result = mysqli_query($conid,"select refno,lname from lawyerreg");
?>
<form name="f" action="" method="post">
<table align="center">
<tr>
<th>Select Lawyer
<td><select name="lawyerid">
	<?php
	while($row = mysqli_fetch_row($result)) {
	echo "<option value='$row[0]'>$row[0] - $row[1]</option>";
	}
	mysqli_free_result($result);
	?>
	</select>
<tr>
<th colspan="2"><input type="submit" name="b1" value="Show Appointment">
</table>
</form>
<?php
	$result = mysqli_query($conid, "select a.id,a.lawyerid,lname,a.dt,a.tm from appoint a,lawyerreg r where a.lawyerid=refno and a.userid='$_SESSION[un]'");
	echo "<br><br><table border='1' align='center'><tr><th colspan='5'>APPOINTMENT TIME";
	echo "<tr><th>Id<th>Lawyer Id<th>Name<th>Date<th>Time";
		while($row = mysqli_fetch_row($result)) {
		echo "<tr>";
			foreach($row as $r)
			echo "<td>$r";
		}
	echo "</table>";
	mysqli_free_result($result);
} else if(isset($_POST['b1']) && !isset($_POST['b2'])) {
	$lawyerid = $_POST['lawyerid'];
	$dt = date('Y-m-d',time()+19800+86400);
	$result = mysqli_query($conid,"select tm from appointtime where tm not in (select tm from appoint where lawyerid='$lawyerid' and dt='$dt')");
	if(mysqli_num_rows($result)>0) {
	$row = mysqli_fetch_row($result);
	$tm = $row[0];
	} else {
	$tm="09:00";
	}
	mysqli_free_result($result);
?>
<form name="f" action="" method="post">
<table align="center">
<tr>
<th>Lawyer Id
<td><input type="text" name="lawyerid" value="<?php echo $lawyerid;?>" required readonly>
<tr>
<th>Date
<td><input type="text" name="appointdt" value="<?php echo $dt;?>" required readonly>
<tr>
<th>Time
<td><input type="text" name="appointtime" value="<?php echo $tm;?>" required readonly>
<tr>
<th colspan="2"><input type="submit" name="b2" value="Fix Appointment">
</table>
</form>	
<?php
} else if(isset($_POST['b2'])) {
	$lawyerid = $_POST['lawyerid'];
	$userid = $_SESSION['un'];
	$dt = $_POST['appointdt'];
	$tm = $_POST['appointtime'];
	mysqli_query($conid,"insert into appoint(lawyerid,userid,dt,tm) values('$lawyerid','$userid','$dt','$tm')");
	echo "<p align='center'>Appointment Registered Successfully...!<br><a href='appointment.php'>Back</a></p>";
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