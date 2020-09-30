<?php
include('custom.php');
include('dbini.php');
$query="INSERT INTO commenttable(id,author,title,commenter,comment) VALUES ('NULL','".$_POST['author']."','".$_POST['title']."','".$_POST['user']."','".$_POST['answer']."')";
$result=$mysqli->query($query);
$mysqli->close();
include('getpost.php');
exit();
?>