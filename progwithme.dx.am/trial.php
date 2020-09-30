<?php
$mysqli=new mysqli("fdb21.awardspace.net","2734291_data","HATSoff@2018","2734291_data","3306");
if($str=$mysqli->connect_error)echo $str;
else echo 'success';
$result=$mysqli->query("INSERT INTO auth(id,user, first, last, email, pass) VALUES ('NULL','gfg','def','igh','lmk','dd')");
if($result)
{
 echo '/n'.'successful';
}
?>