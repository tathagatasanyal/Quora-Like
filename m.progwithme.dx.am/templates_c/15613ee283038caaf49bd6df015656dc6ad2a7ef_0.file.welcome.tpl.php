<?php
/* Smarty version 3.1.33, created on 2020-01-08 06:48:33
  from '/srv/disk4/2734291/www/m.progwithme.dx.am/templates/welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e157b411f0056_99242360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15613ee283038caaf49bd6df015656dc6ad2a7ef' => 
    array (
      0 => '/srv/disk4/2734291/www/m.progwithme.dx.am/templates/welcome.tpl',
      1 => 1567219524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e157b411f0056_99242360 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="mystyle.css">
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
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
<div class="row">
<div class="col">
<div id="carouselExampleIndicators" class="carousel slide" data-interval="500" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="img/img1.jpg" alt="First slide" width="110%" height="20%">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="img/img2.jpg" alt="Second slide" width="110%" height="20%">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="img/img3.jpg" alt="Third slide" width="110%" height="20%">
    </div>
    <div class="carousel-item">
      <img class="d-block" src="img/img4.jpg" alt="Third slide" width="110%" height="20%">
    </div>
  </div>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<br><br>
<div class="row">
<a href="about.php" class="col-5 wht">About Me</a>
<a href="contact.php" class="col-5 wht">Contact Us</a>
<a href="faqs.php" class="col-2 wht">FAQs</a>
</div>
</div>
</body>
</html><?php }
}
