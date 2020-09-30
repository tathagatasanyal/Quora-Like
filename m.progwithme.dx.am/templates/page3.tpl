<!doctype html5>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="mystyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="bg-dark">
<div class=" alert alert-success jumbotron jumbotron-fluid bg-light">
   <h1 align="center" >PROGWITHME</h1>
</div>
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header"> 
<button type="button" class="btn btn-info navbar-toggle bg-dark" data-toggle="collapse" data-target="#example-navbar-collapse"> 
<span class="sr-only">Toggle navigation</span> 
Menu
</button>
</div>
<div class="collapse navbar-collapse" id="example-navbar-collapse">
<br>
<ul class="nav navbar-nav"> 
<li><div class="alert alert-danger bg-dark" role="alert"><a href="welcome.php"  class="wht">HOME</a></div></li>
<li><div class="alert alert-danger bg-dark" role="alert"><a href="page2.php"  class="wht">SITE REVIEW</a></div></li>
<li><div class="alert alert-danger bg-dark" role="alert"><a href="page3.php"  class="wht">MEMBERS ARENA</a></div></li>
<li><div class="alert alert-danger bg-dark" role="alert"><a href="page4.php"  class="wht">DOWNLOADS</a></div></li>
<li><div class="alert alert-danger bg-dark" role="alert"><a href="page5.php"  class="wht">SITE STATUS</a></div></li>
<li><div class="alert alert-danger bg-dark" role="alert"><a href="page6.php"  class="wht">HELP</a></div></li>
</ul>
</div>
</nav>
<div class="row">
<p align="center">
<div class="alert alert-info" role="alert">
This is a forum for discussing about the topics related
to computer science and engeneering.We can provide you with 
the solutions related of your homeworks and examination. We 
have some of genius minds in computer science to guide you.
</div>
</p></div>
</div>

<div class="row">
<div class="col">
<div class="alert alert-success" role="alert">
<div class="row">
<h2>&nbsp;&nbsp;Current Details of<br></h2>
<h4>&nbsp;&nbsp;&nbsp;{$user}.<br><br></h4>
</div>
<h3>Username:</h3>{$user}<br>
<h3>Name:</h3>{$first} {$last}<br>
<h3>Email:</h3>{$email}<br>
</div>
</div>
</div>

<div class="alert alert-success" role="alert">

<div class="row">
<h2>&nbsp;&nbsp;Change Details of<br></h2>
<h4>&nbsp;&nbsp;&nbsp;{$user}.<br><br></h4>
</div>

<div class="row">

<form class="form-horizontal" role="form"  method="post" action="changedetails.php" target="_self">

<div class="form-group">
<label class="col-8 control-label">First Name</label> <div class="col-sm-10"> <input class="form-control" type="text" name="firstname" value="{$first}">
</div></div>

<div class="form-group">
<label class="col-8 control-label">Last Name</label> <div class="col-sm-10"> <input class="form-control" type="text" name="lastname" value="{$last}">
</div></div>

<div class="form-group">
<label class="col-2 control-label">Email</label> <div class="col-sm-10"> <input class="form-control" id="focusedInput" type="text" name="email" value="{$email}">
</div></div>

<div class="form-group">
<label class="col-2 control-label">Old Password*</label> <div class="col-sm-12"> <input class="form-control" id="k0" type="password" name="password" required>
</div><br>
<div id="gig1"></div></div>

<div class="form-group" align="center">
<button type="submit" class="btn bg-success wht col-8" id="sub" onmouseover="abcd()"> 
CHANGE
</button>
<div class="row">&nbsp;</div>
</div>

</form>
</div>
</div>

<div class="alert alert-success" role="alert">

<div class="row">
<div class="row"><h2>&nbsp;&nbsp;&nbsp;Change password of<br></h2></div>
<h4>&nbsp;&nbsp;&nbsp;{$user}.<br><br></h4>
</div>

<div class="row">

<form class="form-horizontal" role="form"  method="post" action="changepass.php" target="_self">

<div class="form-group">
<label class="col-2 control-label">Old Password*</label> <div class="col-sm-12"> <input class="form-control" id="k1" type="password" name="password" required>
</div><br></div>

<div class="form-group">
<label class="col-2 control-label">New Password</label> <div class="col-sm-12"> <input class="form-control" id="k2" type="password" name="cpassword">
</div><br></div>

<div class="form-group">
<label class="col-8 control-label">Re-Enter New Password</label> <div class="col-sm-12"> <input class="form-control" id="k3" type="password" name="ccpassword">
</div>
<div id="gig2"></div><br></div>

<div class="form-group" align="center">
<button type="submit" class="btn bg-success wht col-8" id="sub1" onmouseover="abcd1()"> 
CHANGE
</button>
<div class="row">&nbsp;</div>
</div>

</form>
</div>
</div>

<div class="alert alert-danger" role="alert">

<div class="row">
<div class="row"><h2>&nbsp;&nbsp;&nbsp;Delete account of<br></h2></div>
<h4>&nbsp;&nbsp;&nbsp;{$user}.<br><br></h4>
</div>

<div class="row">

<form class="form-horizontal" role="form"  method="post" action="deleteuser.php" target="_self">

<div class="form-group">
<label class="col-2 control-label">Old Password*</label> <div class="col-sm-12"> <input class="form-control" id="k4" type="password" name="password" required>
</div>
<div id="gig3"></div><br></div>

<div class="form-group" align="center">
<button type="submit" class="btn bg-danger wht col-8" id="sub2" onmouseover="abcd2()">
DELETE
</button>
<div class="row">&nbsp;</div>
</div>

</form>
</div>
</div>
<div class="row">
<a href="about.php" class="col-5 wht">About Me</a>
<a href="contact.php" class="col-5 wht">Contact Us</a>
<a href="faqs.php" class="col-2 wht">FAQs</a>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script>
function abcd()
{
if($("#k0").val()!={$pass})
$("#gig1").html("Re-type Old password");
else
{
$("#gig1").html("Old password ok");
}
}
function abcd()
{
if($("#k4").val()!={$pass})
$("#gig3").html("Re-type Old password");
else
{
$("#gig3").html("Old password ok");
}
}
function abcd1()
{
if($("#k1").val()!={$pass})
$("#gig2").html("Re-type Old password");
else
{
if($("#k2").val()!=$("#k3").val())
$("#gig2").html("New Password did not matched");
else
$("#gig2").html("New Password Ok");
}
}
</script>
</body>
</html>