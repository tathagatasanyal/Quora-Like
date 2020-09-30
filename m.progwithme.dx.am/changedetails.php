<?php
include('dbini.php');
$query="UPDATE auth SET first='".$_POST['firstname']."', last='".$_POST['lastname']."', email='".$_POST['email']."' WHERE user='".$_COOKIE['user']."' AND pass='".$_POST['password']."'";
$result=$mysqli->query($query);
header('Location:index.html');
?>