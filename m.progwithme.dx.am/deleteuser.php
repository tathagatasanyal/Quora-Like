<?php
include('dbini.php');
$query="DELETE FROM auth WHERE user='".$_COOKIE['user']."' AND pass='".$_POST['password']."'";
$result=$mysqli->query($query);
header('Location:page3.php');
?>