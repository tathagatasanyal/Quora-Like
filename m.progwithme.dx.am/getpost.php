<?php 
include('custom.php');
require('Smarty.class.php');
$smarty=new Smarty();
$smarty->assign("user",$user);
$smarty->assign("pass",$pass);
$smarty->assign("first",$first);
$smarty->assign("last",$last);
$smarty->assign("id",$id);
$smarty->assign("email",$email);
include('dbini.php');
$query="SELECT * FROM posttable WHERE author='".$_POST["author"]."' AND title='".$_POST["title"]."'";
$result=$mysqli->query($query);
if($row =$result->fetch_assoc()) 
{
$title=$row['title'];
$author=$row['author'];
$pdate=$row['pdate'];
$ptime=$row['ptime'];
$para=$row['post'];
}
$smarty->assign("title",$title);
$smarty->assign("author",$author);
$smarty->assign("pdate",$pdate);
$smarty->assign("ptime",$ptime);
$smarty->assign("para",$para);
include('getcomment.php');
$smarty->display("post.tpl");
?>