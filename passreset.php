<?php
include('dbini.php');
$query="SELECT pass,user,first,last,email FROM auth WHERE user='".$_POST["username"]."' AND email='".$_POST["email"]."'";
$result=$mysqli->query($query);
if($result->num_rows==1)
{
$row=$result->fetch_assoc();
$pass=$row['pass'];
$user=$row['user'];
$first=$row['first'];
$last=$row['last'];
$email=$row['email'];
$id=$row['id'];
echo "An email has been sent to you!";
}
else
{
echo "Credentials did not match or found!";
}
?>