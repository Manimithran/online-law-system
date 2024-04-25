<?php
include("dbcon.php");
$send=$_GET['s1'];
$sub=$_GET['su1'];
mysqli_query($conid,"delete from inbox where sender='$send' and subject='$sub'") or die(mysqli_error($conid));
header("location:lawyerinbox.php");

?>