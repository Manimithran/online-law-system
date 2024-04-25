<?php
session_start();
echo $_SESSION['lawname'];
session_destroy();
header("location:homepage.php");
?>