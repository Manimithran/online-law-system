
<?php
session_start();
$usname=$_SESSION['un'];
include("dbcon.php");
?>
<html>
<style>
#gt td,th {
background-color:RGB(172,108,49);
border-radius:10px;
-webkit-border-radius:10px;
-moz-border-radius:10px;
color:white;
}
</style>
<body TOPMARGIN="5" leftmargin="0" rightmargin="0"style="background-color:skyblue;color:white">
<div style="width:45%;float:left;">

<form action="pubchat2.php" method="post">
<table style="margin-left:0px;width:99%;">

<tr>
<td style="color:black">To</td>
<td><input type="text" name="t2" size="40"></td>
</tr>
<tr>
<td style="color:black">Your Text</td>
<td><input type="text" name="t1" size="40"</td>
<td><input type="submit" name="submit" value="Send"></td>
</tr><tr><td></td></tr>
</table>
</form>
</div>
<div style="width:50%;height:150px;overflow:scroll;float:left;">
<form name="f2" action="pubchat2.php" method="post" style="width:48%;margin-left:1%;float:left;">
<table id="gt" style="width:100%;"><tr><th colspan="2">Lawyer List</th><!--<th><a href="grouphome.php">Back</a></th>--></tr>
<?php
$rs=mysqli_query($conid,"select lname from lawyerreg" ) or die(mysqli_error($conid));
while($r=mysqli_fetch_array($rs)) {
echo "<tr><td style='padding-left:10px;'>$r[0]</td></tr>";
}

?>

</table>
</form>

<!--<form name="f3" action="lawchat2.php" method="post" style="width:48%;margin-left:1%;float:left;">
<table id="gt" style="width:100%;"><tr><th colspan="2">Group Member List</th></tr>-->
<?php
/*$rs=mysqli_query($conid,"select username from publicreg") or die(mysqli_error($conid));
while($r=mysqli_fetch_array($rs)) {
echo "<tr><td style='padding-left:10px;'>$r[0]</td><td align='center'><input type='checkbox' name='g[]' value='$r[0]' onclick=\"callpage1('$r[0]',this.id)\" title='Delete from Group'></td></tr>";
}*/
?>
</table>
</form>
</div>
<?php
if(isset($_POST['submit'])) {
$d=date('Y-m-d h:i:s',time()+19800);
$m=$_POST['t1'];

$lname=$_POST['t2'];
mysqli_query($conid,"insert into chat values ('$usname','$lname','$d','$m')") or die(mysqli_error($conid));
//header('Location:lawchat2.php');
}
/*if(isset($_GET['email'])) {
	$email=$_GET['email'];
	mysql_query("insert into chatgroup values ('$_SESSION[userid]','$email')") or die(mysql_error());
	header('Location:chat2.php');
}*/
/*if(isset($_GET['demail'])) {
	$email=$_GET['demail'];
	mysql_query("delete from chatgroup where femail='$email' and email='$_SESSION[userid]'") or die(mysql_error());
	header('Location:chat2.php');
}*/
?>
<script type="text/javascript">
function callpage(p) {
	
	var username=p;
document.f2.t2.value=username;
alert(document.f2.t2.value);
	
window.location="lawchat2.php?uname="+p;
}
function callpage1(p,id) {
//window.location="chat2.php?demail="+p;
}
</script>
</body>
</html>