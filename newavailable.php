<?php
include('dbini.php');
if(!empty($_POST['username']))
{
$query="SELECT user FROM auth WHERE user='".$_POST["username"]."'";
$result=$mysqli->query($query);
if($result->num_rows==0)
{
 echo $_POST['username']." is Available";
}
else
{
echo $_POST['username']." is Not Available";
}
}
else
{
echo "Enter a username!";
}
?>
