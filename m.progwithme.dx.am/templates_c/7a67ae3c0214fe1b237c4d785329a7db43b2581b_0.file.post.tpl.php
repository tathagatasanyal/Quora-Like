<?php
/* Smarty version 3.1.33, created on 2020-01-08 06:49:50
  from '/srv/disk4/2734291/www/m.progwithme.dx.am/templates/post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e157b8e281c57_56853721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a67ae3c0214fe1b237c4d785329a7db43b2581b' => 
    array (
      0 => '/srv/disk4/2734291/www/m.progwithme.dx.am/templates/post.tpl',
      1 => 1567219461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e157b8e281c57_56853721 (Smarty_Internal_Template $_smarty_tpl) {
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
<div class="alert alert-info" role="alert">
<div class="row">
<div class="col col-12">
<h1 class="mt-4"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<p class="lead">
by
<a href="#"><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
....</a>
 </p><hr>
<p>Posted on <?php echo $_smarty_tpl->tpl_vars['pdate']->value;?>
... at <?php echo $_smarty_tpl->tpl_vars['ptime']->value;?>
... </p>
<hr>
<p><strong><?php echo $_smarty_tpl->tpl_vars['para']->value;?>
</strong></p>
<hr>

<div class="card  bg-info">
<h5 class="card-header" style="color:white;">Answer the question</h5>
<div class="card-body">
<form class="form-horizontal" role="form"  method="post" action="addcomment.php" target="_self">

<div class="form-group" align="center">
<input class="form-control" type="text" id="t1" name="author" value="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
" hidden>
</div>

<div class="form-group" align="center">
<input class="form-control" type="text" id="t2" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" hidden>
</div>

<div class="form-group" align="center">
<input class="form-control" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" hidden>
</div>

<div class="form-group">
<textarea class="form-control" rows="3" name="answer"></textarea>
</div>
<button type="submit" class="btn btn-success">Answer</button>
</form>
</div></div>

<br><br><br>
<h3><tsrong>Comments</strong></h3><br>
<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>

</div></div></div>


<div class="row">
<div class="alert alert-danger col col-12" role="alert">
<h4 align="left" class="col col-12">Delete the post</h4>
<h6 align="left" class="col col-12"><strong>The post can be deleted by <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
 only</strong></h6>
<form class="form-horizontal" role="form"  method="post" action="deletepost.php" target="_self">

<div class="form-group" align="center">
<input class="form-control" type="text" id="t1" name="author" value="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
" hidden>
</div>

<div class="form-group" align="center">
<input class="form-control" type="text" id="t2" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" hidden>
</div>

<div class="form-group" align="center">
<input class="form-control" type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" hidden>
</div>

<div class="form-group" align="center">
<button type="submit" class="btn bg-danger wht col-8" id="sub" onmouseover="abcd()"> 
DELETE
</button>
<div id="gig"></div>
</div>
</form>
</div></div>
<div class="row">
<a href="about.php" class="col-5 wht">About Me</a>
<a href="contact.php" class="col-5 wht">Contact Us</a>
<a href="faqs.php" class="col-2 wht">FAQs</a>
</div>
</div>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
function abcd()
{
if($('#t1').val()!=$('#t2').val())
$("#gig").html("You are not the author");
else
$("#gig").html("Double-click to delete");
}
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
