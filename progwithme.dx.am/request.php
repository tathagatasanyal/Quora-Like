<!doctype html>
<html>
<head>
<link href="mystyle.css" rel="stylesheet" type="text/css">
<h1 id="head" align="center">WE PLAY COMPUTER SCIENCE<h2>
</head>
<body>
<ul id="nav">
<li><a href="index.html">HOME</a></li>
<li><a href="page2.html">SITE REVIEW</a></li>
<li><a href="page3.html">MEMBERS ARENA</a></li>
<li><a href="page4.html">DOWNLOADS</a></li>
<li><a href="page5.html">SITE STATUS</a></li>
<li><a href="page6.html">HELP</a></li>
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
<div align="center" id="loghead">Contact Form</div>
<div class="forma">
First Name:
<input type="text" name="firstname" class="field" id="k1">
<br><br>
</div>
<div class="forma">
Last Name:
<input type="text" name="lastname" class="field" id="k2">
<br><br>
</div>
<div class="forma">
Email Address:
<input type="text" name="email" class="field" id="k3">
<br><br>
</div>
<div class="forma">
Username :
<input type="text" name="username" class="field" onmouseover="abc()" id="xyz"><br><br>
<div id="gig12"></div>
<br>
<input type="button" id="sub1" value="Send Email" onclick="abcd()"><br><br><div id="gig"></div>
<br>
</div>
</div>
<div id="footer">
<li><a href="about.html">About Me</a></li>
<li><a href="contact.html">Contact Us</a></li>
<li><a href="faqs.html">FAQs</a></li>
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
$("#sub1").click(function(){$.post("passreset.php",{firstname:$("#k1").val(),lastname:$("#k2").val(),email:$("#k3").val(),username:$("#xyz").val()},function(data){$("#gig").html(data)});});
}
</script>
</body>
</html>
