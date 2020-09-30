<?php 
require('Smarty.class.php');
$smarty=new Smarty();
include('custom.php');
$smarty->assign("user",$user);
$smarty->assign("pass",$pass);
$smarty->assign("first",$first);
$smarty->assign("last",$last);
$smarty->assign("id",$id);
$smarty->assign("email",$email);
$smarty->display("page2.tpl");
?>