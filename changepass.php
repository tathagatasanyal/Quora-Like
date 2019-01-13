<?php
include('dbini.php');
$query="UPDATE auth SET pass='".$_POST['cpassword']."' WHERE user='".$_COOKIE['user']."' AND pass='".$_POST['password']."'";
$result=$mysqli->query($query);
header('Location:page3.php');
exit();
?>