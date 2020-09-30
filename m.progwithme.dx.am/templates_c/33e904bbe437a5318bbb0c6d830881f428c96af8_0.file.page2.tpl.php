<?php
/* Smarty version 3.1.33, created on 2019-08-31 02:35:02
  from '/srv/disk4/2734291/www/m.progwithme.dx.am/templates/page2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d69dcd6614772_22841311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33e904bbe437a5318bbb0c6d830881f428c96af8' => 
    array (
      0 => '/srv/disk4/2734291/www/m.progwithme.dx.am/templates/page2.tpl',
      1 => 1567218877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d69dcd6614772_22841311 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html5>
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
<div class="alert alert-success col-12" role="alert">
<div align="left">
<h5>We have following pages in our site <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
.</h5><br><br>
<h6>HOME:</h6>This is the homepage of site.<br><br>
</div>
<div align="left">
<h6>SITE REVIEW:</h6>The page you are currently viewing.<br><br>
</div>
<div align="left">
<h6>MEMBERS ARENA:</h6>Your account settings.<br><br>
</div>
<div align="left">
<h6>DOWNLOAD:</h6>Links to download books on various topics.<br><br>
</div>
<div align="left">
<h6>SITE STATUS:</h6>Gives status of the site.<br><br>
</div>
<div align="left">
<h6>HELP:</h6>Posts and Queries.<br><br>
</div>

</div>
</div>
</div>
<div class="row">
<a href="about.php" class="col-5 wht">About Me</a>
<a href="contact.php" class="col-5 wht">Contact Us</a>
<a href="faqs.php" class="col-2 wht">FAQs</a>
</div>
</div>
</body>
</html><?php }
}
