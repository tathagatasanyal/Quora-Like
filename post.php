<?php
include('custom.php');
include('dbini.php');
$query="INSERT INTO posttable(id,author,title, post,ptime,pdate) VALUES ('NULL','".$_COOKIE['user']."','".$_POST['title']."','".$_POST['post']."',CURTIME(),CURDATE())";
$result=$mysqli->query($query);
$mysqli->close();
header('Location:page6.php');
?>