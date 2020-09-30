<?php
include('dbini.php');
$query="INSERT INTO auth(id,user, first, last, email, pass) VALUES ('NULL','".$_POST['username']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['password']."')";
$result=$mysqli->query($query);
include('newuser.php');
$mysqli->close();
?>