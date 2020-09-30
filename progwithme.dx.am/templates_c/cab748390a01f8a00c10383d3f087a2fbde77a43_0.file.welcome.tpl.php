<?php
/* Smarty version 3.1.33, created on 2019-01-01 12:34:10
  from '/srv/disk4/2734291/www/progwithme.dx.am/templates/welcome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2b5e42bec0f1_20848294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cab748390a01f8a00c10383d3f087a2fbde77a43' => 
    array (
      0 => '/srv/disk4/2734291/www/progwithme.dx.am/templates/welcome.tpl',
      1 => 1546345889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2b5e42bec0f1_20848294 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
<link href="mystyle.css" rel="stylesheet" type="text/css">
<h1 id="head" align="center">WE PLAY COMPUTER SCIENCE<h2>
</head>
<body>
<ul id="nav">
<li><a href="welcome.php">HOME</a></li>
<li><a href="page2.php">SITE REVIEW</a></li>
<li><a href="page3.php">MEMBERS ARENA</a></li>
<li><a href="page4.php">DOWNLOADS</a></li>
<li><a href="page5.php">SITE STATUS</a></li>
<li><a href="page6.php">HELP</a></li>
</ul>
<div id="sidebar" align="left">
<p>This is a forum<br>for discussing about<br>
the topics related<br>
to computer science<br>
and engeneering.<br>We
can provide you with<br>
the solutions related<br>
of your homeworks and<br>
examination. We have<br> 
some of genius minds<br>
in computer science <br>
to guide you.</p>
</div>
<div id="main">
<div id="abc">
<div id="vgv">
<h1>Username:</h1><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
<br>
<h1>Name:</h1><?php echo $_smarty_tpl->tpl_vars['first']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['last']->value;?>
<br>
<h1>Email:</h1><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<br></div>
</div>
</div>
<div id="footer">
<li><a href="about.php">About Me</a></li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="faqs.php">FAQs</a></li>
</div>
</body>
</html>
<?php }
}
