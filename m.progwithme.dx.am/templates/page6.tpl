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
<li><div class="alert alert-danger bg-dark" role="alert"><a href="page3.php"  class="wht">PROFILE</a></div></li>
<li><div class="alert alert-danger bg-dark" role="alert"><a href="page6.php"  class="wht">COMMUNITY</a></div></li>
<li><div class="alert alert-danger bg-dark" role="alert"><a href="page4.php"  class="wht">DOWNLOADS</a></div></li>
<li><div class="alert alert-danger bg-dark" role="alert"><a href="page2.php"  class="wht">SITE-MAP</a></div></li>
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

<div class="row">
<div class="alert alert-info col col-12" role="alert">
<h4 align="left" class="col col-12">Available posts</h4><br>
{$postlist}
</div></div>
<div class="row">
<div class="alert alert-info col col-12" role="alert">
<h4 align="left" class="col col-12">Create a post</h4><br>
<form class="form-horizontal" role="form"  method="post" action="post.php" target="_self">

<div class="form-group">
<label class="col-sm-2 control-label">Question</label> <div class="col-sm-12"><textarea class="form-control" rows="1" name="title"></textarea>
</div><br></div>

<div class="form-group">
<label class="col-sm-2 control-label">Description</label> <div class="col-sm-12"><textarea class="form-control" rows="3" name="post"></textarea>
</div><br></div>

<div class="form-group" align="center">
<button type="submit" class="btn bg-success wht col-8"> 
POST
</button>
</div>
</form>
</div></div>
<div class="row">
<a href="about.php" class="col-5 wht">About Me</a>
<a href="contact.php" class="col-5 wht">Contact Us</a>
<a href="faqs.php" class="col-2 wht">FAQs</a>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
</body>
</html>