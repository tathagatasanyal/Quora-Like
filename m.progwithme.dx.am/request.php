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
<div class="container">

<div class="row">
<p align="center">
<div class="alert alert-info" role="alert">
This is a forum for discussing about the topics related
to computer science and engeneering.We can provide you with 
the solutions related of your homeworks and examination. We 
have some of genius minds in computer science to guide you.
</div>
</p></div>

<div class="alert alert-success" role="alert">
<div class="row">
<h2>&nbsp;&nbsp;Contact Form<br></h2>
</div>
<div class="row">
<form class="form-horizontal" role="form"  method="post" action="passreset.php" target="_self">

<div class="form-group">
<label class="col-sm-2 control-label">First Name</label> <div class="col-sm-10"> <input class="form-control" id="k1" type="text" name="firstname" required>
</div><br></div>

<div class="form-group">
<label class="col-sm-2 control-label">Last Name</label> <div class="col-sm-10"> <input class="form-control" id="k2" type="text" name="lastname" required>
</div><br></div>

<div class="form-group">
<label class="col-sm-2 control-label">Email</label> <div class="col-sm-10"> <input class="form-control" id="k3" type="text" name="email" required>
</div><br></div>

<div class="form-group">
<label class="col-sm-2 control-label">Username</label> <div class="col-sm-10"> <input class="form-control"  id="k4" type="text" name="username" required onmouseover="abc()">
</div><br><div id="gig12"></div><br></div>

<div class="form-group" align="center">
<button type="button" id="sub1" class="btn bg-success wht col-8" onclick="abcd()"> 
Send Email
</button>
<br><div id="gig"></div>
</div>

</form>
</div>

<a href="about.php" class="col-5 wht">About Me</a>
<a href="contact.php" class="col-5 wht">Contact Us</a>
<a href="faqs.php" class="col-2 wht">FAQs</a>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script>
function abc()
{
$("#xyz").mouseover(function(){$("#gig12").html("An email will be send to administator with above details!");});
}
function abcd()
{
$("#sub1").click(function(){$.post("passreset.php",{firstname:$("#k1").val(),lastname:$("#k2").val(),email:$("#k3").val(),username:$("#k4").val()},function(data){$("#gig").html(data)});});
}
</script>
</body>
</html>