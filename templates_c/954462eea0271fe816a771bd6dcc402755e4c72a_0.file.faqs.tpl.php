<?php
/* Smarty version 3.1.33, created on 2018-12-29 13:07:48
  from '/srv/disk4/2734291/www/progwithme.dx.am/templates/faqs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2771a48e52e7_61211601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '954462eea0271fe816a771bd6dcc402755e4c72a' => 
    array (
      0 => '/srv/disk4/2734291/www/progwithme.dx.am/templates/faqs.tpl',
      1 => 1545830544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2771a48e52e7_61211601 (Smarty_Internal_Template $_smarty_tpl) {
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
<div id="abc"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 we will get you soon.</div>
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
