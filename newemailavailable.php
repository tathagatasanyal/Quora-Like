<?php
include('dbini.php');
if(!empty($_POST['email']))
{
$query="SELECT email FROM auth WHERE user='".$_POST["email"]."'";
$result=$mysqli->query($query);
if($result->num_rows==0)
{
 echo $_POST['email']." is ok";
}
else
{
echo $_POST['email']." is already taken";
}
}
else
{
echo "Enter a username!";
}
?>
