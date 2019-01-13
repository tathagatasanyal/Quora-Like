<?php
include('dbini.php');
$query="SELECT * FROM commenttable WHERE author='".$_POST["author"]."' AND title='".$_POST["title"]."'";
$result=$mysqli->query($query);
$comments="";
while($row =$result->fetch_assoc()) 
{
$commenter=$row['commenter'];
$comment=$row['comment'];
$comments .='<div class="media mb-4">
<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/20x20" alt="">
<div class="media-body">
<h4 class="mt-0">Answered by </h4><h5>'.$commenter.'</h5><h6>'.$comment.'   
</h5></div></div>';
}
$smarty->assign("comment",$comments);
?>