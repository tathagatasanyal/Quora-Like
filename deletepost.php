<?php
if($_POST["author"]==$_COOKIE['user'])
{
include('dbini.php');
$query="DELETE FROM posttable WHERE author='".$_POST["author"]."' AND title='".$_POST["title"]."'";
$result=$mysqli->query($query);
include('dbini.php');
$query="DELETE FROM commenttable WHERE author='".$_POST["author"]."' AND title='".$_POST["title"]."'";
$result=$mysqli->query($query);
header('Location:page6.php');
}
else
{
header('Location:page6.php');
}
?>