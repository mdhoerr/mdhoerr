<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
<meta name="verify-v1" content="t+Kk6QHlePcIif8VQ6Yg2HecF/duEoM1f8nLa/4M7NM=" />
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="description" content="Database and web developer portfolio for Mary D Hoerr" />
<meta name="keywords" content="database, SQL, web developer, php, open source, standards, LAMP, linux, apache, MySQL" />
<meta name="author" content="Mary Hoerr" />
<?php include ("message/core/msg_header.php"); ?>
<title>Mary Hoerr - database and web developer</title>
<!-- Netscape 3 and earlier and IE 2 and earlier do not recognize stylesheets -->
<!-- this is the default stylesheet. It is based on the w3c default stylesheet -->
<link 
        rel="stylesheet" 
        type="text/css"
        href="/core-base/core.css" 
        media="all" 
/>
<style type="text/css">
@import url(/index.css);
@import url(/message/core/msg_import.css);
<!--[if IE] -->
@import url(/index_ie.css);
@import url(/message/core/msg_import_ie.css);
<!--[endif] -->
</style>
<link rel="stylesheet" href="PixelGreen/PixelGreen.css" type="text/css" />
</head>
<body id="<?php echo($bodyid);?>">
<div id="wrapper">
	<div id="header">
		<div id="header-content">
<h1 id="logo"><a href="index.php" title="Mary D Hoerr">Mary D. <span class="gray">Hoerr</span></a></h1>
<h2 id="slogan">database and web developer: specializing in back-end programming and SQL database design</h2>
		<ul>

			<li><a href="index.php" id="current">Home</a></li>
			<li><a href="contact.php?messageid=0&action=select">Contact Me</a></li>
			<li><a rel="me" href="http://www.linkedin.com/in/mdhoerr" >LinkedIn</a></li>		
		</ul>	
		</div><!-- end header-content div -->
	</div><!-- end header div -->
	<div class="headerphoto"><h1>Contact Form</h1></div>
	<div id="content-wrap">
		<div id="content">
			<div id="sidebar">
<div class="sidebox">
<h1>Contact Info</h1>
<p>Something about contacting me.
<ul class="sidemenu">
<li><a href="yapcna2012.php">YAPC::NA 2012</a></li>
<li><a href="pdl.php">Perl Data Language</a></li>
</ul>
</p>
</div><!-- end sidebox div -->
<div class="sidebox">
<h1 class="clear">Current interests</h1>
</div><!-- end sidebox div -->
<div class="sidebox">
</div><!-- end sidebox div -->
<div class="sidebox">	
</div><!-- end sidebox div -->			
			</div><!-- end sidebar div -->
			<div id="main">
				<div id="expertise">
<h2>Send me a message</h2>

<form id ="<?php echo($bodyid);?>" action="contact.php" method="post">
<p>
			<span class="fieldname"> email:</span>  
			<span class="fieldvalue"> <?php echo(db2html($message->email));?> </span>
			<span class="fieldinput"> 
				<input name="email" id="email" class="messages" type="text" size="35" value="<?php echo(stripslashes($message->email));?>" /> 
			</span> 
</p>
<p>
<input type="hidden" name="created" id="created" value="<?php echo(date('Y-m-d H:i:s'));?>" />
			<span class="fieldname"> Message: </span>
			<span class="fieldvalue"> <?php echo(db2html($message->message));?> &nbsp;</span>
			<span class="fieldinput"> 
				<textarea name="message" class="messages" cols="40" rows="10"> 
					<?php echo(stripslashes($message->message));?>
				</textarea>
			</span>
</p>
<p><input type="hidden" name="messageid" id="messageid" value="<?php echo($message->messageid);?>" />
			<span class="fieldname"> First Name:</span>  
			<span class="fieldvalue"> <?php echo(db2html($message->fname));?> </span>
			<span class="fieldinput"> 
				<input name="fname" id="fname" class="messages" type="text" size="35" value="<?php echo(stripslashes($message->fname));?>" /> 
			</span> 
</p>
<p>
			<span class="fieldname"> Last Name:</span> 
			<span class="fieldvalue"> <?php echo(db2html($message->lname));?> </span>
			<span class="fieldinput"> 
				<input name="lname" id="lname" class="messages" type="text" size="35" value="<?php echo(stripslashes($message->lname));?>" /> 
			</span> 
</p>
<p>
			<span class="fieldname"> Country:</span>  
			<span class="fieldvalue"> <?php echo(db2html($message->country));?> </span>
			<span class="fieldinput"> 
				<input name="country" id="country" class="messages" type="text" size="35" value="<?php echo(stripslashes($message->country));?>" /> 
			</span> 
</p>
<p>
			<span class="fieldvalue">
				<?php echo($bodytitle);?>. Message number <?php echo(db2html($message->messageid));?> was sent from <?php echo($message->email);?> on <?php echo (db2html($message->created));?>.
			</span>
</p>
<p> 
			<span class="fieldname">Internal use only - please leave blank:</span>  
			<span class="fieldvalue"> <?php echo(db2html($message->honeypot));?> </span>
			<span class="fieldinput"> 
				<input name="honeypot" id="honeypot" class="messages" type="text" size="35" value="<?php echo(stripslashes($message->honeypot));?>" /> 
			</span> 
</p>
<div class="insert_button"> <input id="insert_message" name="action" class="messages" type="submit" value="send" /> </div> 
</p>
<p>
<div class="select_button"> <input id="select_message" name="action" type="submit" value="clear" /> </div> 
</p>
</form>
				</div><!-- end expertise div -->
			</div><!-- end main div -->
		</div><!-- end content div -->
	</div><!-- end content-wrap div -->
<!-- footer starts here -->	
	<div id="footer">
		<div id="footer-content">
<div class="col float-left">
<h1>Places I like</h1>
<ul>				
	<li><a href="http://www.infoworld.com/blogs/bob-lewis"><strong>Bob Lewis Advice Line</strong> - IT Blog</a></li>
	<li><a href="http://www.alistapart.com"><strong>Alistapart</strong> - Just go there</a></li>
	<li><a href="http://perl.meetup.com/108/"><strong>MadMongers</strong> - Perl Meetup Group</a></li>
	<li><a href="http://www.webgui.org/"><strong>WebGUI.org</strong> - OpenSource CMS in Perl</a></li>		
</ul>			
</div>
		
<div class="col float-left">
<h1>Twitterers I follow</h1>
<ul>				
	<li><a href="http://www.twitter.com/web_ready">web_ready (Russian)</a></li>
	<li><a href="http://www.twitter.com/inxaos">inxaos (Russian and English)</a></li>
	<li><a href="http://www.twitter.com/smashingmag">smashingmag (English)</a></li>
	<li><a href="http://www.twitter.com/frenchweb">frenchweb (French)</a></li>						
</ul>			
</div>		
<div class="col2 float-right">
<p>
&copy; copyright 2009 <strong>Mary D Hoerr</strong><br /> 
Design by: <a href="http://www.styleshout.com"><strong>styleshout</strong></a> &nbsp; &nbsp;
Valid <a href="http://jigsaw.w3.org/css-validator/check/referer"><strong>CSS</strong></a> | 
<a href="http://validator.w3.org/check/referer"><strong>XHTML</strong></a>
</p>
</div>	
		</div><!-- end footer-content div -->
	</div><!-- end footer div -->
</div><!-- end wrapper div -->
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/maryhoerr.json?callback=twitterCallback2&amp;count=10"></script>
</body>
</html>