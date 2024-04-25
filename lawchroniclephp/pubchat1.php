<?php include("dbcon.php");
				  session_start();
				  $usn=$_SESSION['un'];
				  $rs=mysqli_query($conid,"select name from publicreg where username='$usn'")or die(mysqli_error($conid));
				 $a=mysqli_fetch_array($rs);
				  echo "<center><h2 style='font-size:20px'>Welcome $a[0]</h2></center>";
				 
				 //$sender=$_SESSION['lawname'];
				 
				   ?>
				   <?php

include("dbcon.php");
?>
<html>
<meta http-equiv="refresh" content="3">
<body TOPMARGIN="5" leftmargin="0" rightmargin="0" style="background-color:skyblue;color:black">
<!--<span style="float:right"><a href="grouphome.php">Back</a></span>-->
<?php
$rs=mysqli_query($conid,"select * from chat") or die(mysqli_error($conid));
if(mysqli_num_rows($rs)>0) {
echo "<table><tr><th align='left'>From</th><th align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To</th><th align='left' style='padding-left:50px;'>Message</th></tr>";
while($r=mysqli_fetch_row($rs)) {
echo "<tr>";
echo "<td>$r[0]</td>";
echo "<td style='padding-left:50px;'>$r[1]</td>";
echo "<td style='padding-left:50px;'>$r[3]</td>";
echo "</tr>";
}
echo "</table>";
}
?>
</body>
</html>