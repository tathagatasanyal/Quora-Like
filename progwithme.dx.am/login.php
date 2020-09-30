<?php 
require('Smarty.class.php');
require('dbini.php');
$query="SELECT id FROM auth WHERE user='".$_POST['username']."' AND pass='".$_POST['password']."'";
$result=$mysqli->query($query);
if($result->num_rows==1)
{
include('custom.php');
$smarty=new Smarty();
$smarty->assign("user",$user);
$smarty->assign("pass",$pass);
$smarty->assign("first",$first);
$smarty->assign("last",$last);
$smarty->assign("id",$id);
$smarty->assign("email",$email);
$smarty->display("welcome.tpl");
}
else
{
include('unauth.php');
}
?>