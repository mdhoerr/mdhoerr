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
<title>Mary Hoerr - language geek</title>
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
<!--[if IE] -->
@import url(/index_ie.css);
<!--[endif] -->
</style>
<link rel="stylesheet" href="PixelGreen/PixelGreen.css" type="text/css" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="header-content">
<h1 id="logo"><a href="index.php" title="Mary D Hoerr">Mary D. <span class="gray">Hoerr</span></a></h1>
<h2 id="slogan">language geek</h2>
		<ul>

			<li><a href="index.php" id="current">Home</a></li>
			<li><a href="contact.php?messageid=0&action=select">Contact Me</a></li>
			<li><a rel="me" href="http://www.linkedin.com/in/mdhoerr" >LinkedIn</a></li>		
		</ul>	
		</div><!-- end header-content div -->
	</div><!-- end header div -->
	<div class="headerphoto"><h1>Perl Data Language</h1></div>
	<div id="content-wrap">
		<div id="content">
			<div id="sidebar">
<div class="sidebox">
<h1 class="clear">Links</h1>
<ul class="sidemenu">
	<li><a href="http://www.mdhoerr.com/lightningOtherOS.odp">Open Document</a></li>
	<li><a href="http://www.mdhoerr.com/lightningOtherOS.pdf">pdf</a></li>	
</ul>
</div><!-- end sidebox div -->
<div class="sidebox">	
<h1 class="clear">Another side box</h1>
<ul>
<li>Available if I ever decide to use it</li>
</ul>
</div><!-- end sidebox div -->			
			</div><!-- end sidebar div -->
			<div id="main">
<h2>Using PDL</h2>
<ul>
<li><pre>
use strict;
use warnings;
use PDL;
my $data=sequence(100_000);
say "The sum of 0 to 99,999 is ", $data->sum;
</pre></li>
<li>Save as first.pl </li>
<li>Run from the command line with <pre>perl first.pl</pre> where "first" is what you named the file.</li>
</ul>

<h2>PDL twitter stream</h2>
<p>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '#perldatalanguage OR #perlpdl',
  interval: 30000,
  title: '',
  subject: '#perldatalanguage OR #perlpdl',
  width: 403,
  height: 120,
  theme: {
    shell: {
      background: '#65944A',
      color: '#FFFFFF',
      font: '1em',
      padding: '5em',
      margin: '5em'
    },
    tweets: {
      background: '#FFFFFF',
      color: '#000000',
      links: '#FF0000'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    behavior: 'all'
  }
}).render().start();
</script>
</p>
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