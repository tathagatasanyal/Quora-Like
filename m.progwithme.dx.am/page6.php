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
$query="SELECT * FROM posttable";
$result=$mysqli->query($query);
$postlist='';
while($row =$result->fetch_assoc()) 
{
$postlist .='<form class="form-horizontal" role="form"  method="post" action="getpost.php" target="_self">
<div class="form-group">
<button type="submit" class="btn btn-sm btn-success col-12">
<h6 align="left" class="wht">'.$row['title'].'<h6></button>
By '.$row['author'].' on '.$row['pdate'].' at '.$row['ptime'].'</div>
<div class="form-group"><input type="text" hidden name="title" value="'.$row['title'].'"></div>
<div class="form-group"><input type="text" hidden name="author" value="'.$row['author'].'"></div>
</form><br>';
}
$smarty->assign("postlist",$postlist);
$smarty->display("page6.tpl");
?>