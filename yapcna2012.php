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
	<div class="headerphoto"><h1>YAPC::NA 2012</h1></div>
	<div id="content-wrap">
		<div id="content">
			<div id="sidebar">
<div class="sidebox">
<h1 class="clear">The Other OS</h1>
<ul class="sidemenu">
	<li><a href="http://www.mdhoerr.com/lightningOtherOS.odp">Open Document</a></li>
	<li><a href="http://www.mdhoerr.com/lightningOtherOS.pdf">pdf</a></li>	
</ul>
</div><!-- end sidebox div -->
<div class="sidebox">	
<h1 class="clear">Cool YAPC::NA 2012 links</h1>
<ul>
<li><a href="http://act.yapcna.org/2012/wiki/">wiki</a></li>
<li><a href="http://blog.yapcna.org/">blog</a></li>
<li><a href="http://www.facebook.com/yapcna/">facebook</a></li>
<li><a href="http://pinterest.com/mdhoerr/yapc-na-conference-2012-june-madison/">Pinterest</a>
<li><a href="http://blogs.perl.org/users/mithaldu/2012/06/early-set-of-yapcna-2012-videos-on-youtube.html">early videos on youtube</a></li>
</ul>
</div><!-- end sidebox div -->			
			</div><!-- end sidebar div -->
			<div id="main">
<h2>My Lightning talk: The Other Operating System</h2>
<p>I do my perl now on Windows 7 using Padre and don't normally use the command line, so when I was in <a href="http://blogs.perl.org/users/brian_d_foy/">brian d foy</a>'s <a href="http://yapcna.org/conference/zero-to-perl-workshop">Zero to Perl Workshop</a>, I found I couldn't keep up with his command line examples. I tried using the Windows cmd.exe, but had problems with admin rights, paths, and then some differences between *nix command line and cmd.exe. See the sidebar to get my talk in pdf and odt formats.</p>
<p>As a member of <a href="http://www.madmongers.org/">MadMongers</a>, JT thought I knew enough perl to be a mentor in the class, so I was there for that and to fill in many gaps in my perl knowledge. It turned out that no one there was at "Zero" when it came to programming, though it seemed like a fair number of them were at "Zero" for perl. If I'd had the command line thing on Windows figured out ahead of time, I would have been much more useful.</p>
<h2>My Bingo Card</h2>
<p>I gave a lightning talk so I could fill in my whole Bingo card. I didn't succeed, but I got 20 of the 25 squares and I had several Bingo's. Here are the five things I <em>didn't</em> get to:
<ul>
  <li>Buy someone a drink</li>
  <li>Take some photos</li>
  <li>Attend the Hackathon</li>
  <li>Donate to TPF</li>
  <li>Attend TPF Party</li>
</ul>
</p>
<h2>Stupid Perl Tricks</h2>
<p>Here's stuff I learned at YAPC::NA 2012 that can really mess you up.
</p>
<ul>
 <li>$Cat is not the same as $cat is not the same as $cAt is not the same as $caT</li>
 <li>The scalar context of the comma operator. Evaluate the item to the left of the comma, discard, evalutate the item to the right of the comma. Continue to the last item. Unless one item is something like a <pre>die</pre> you end up with the evaluation of the last item after the last comma. Think about it. <pre>scalar (1,2,3)</pre> is 3. <pre>scalar (1,899,388, 40)</pre> is 40. <br />Also, you waste time evaluated each item before and after each comma as well.</li>
 <li>Something that evaluates to true has the value 1. <pre>print !!37;</pre> prints 1. </li>
 <li>Something that evaluates to false has the value of the empty string. <pre>print !!37;</pre> prints nothing. </li>
</ul>
<h2>The YAPC::NA 2012 twitter stream:</h2>
<p>
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'FROM:yapcna OR #yapcna2012 OR #yapcna OR #yapc',
  interval: 30000,
  title: '',
  subject: 'FROM:yapcna OR #yapcna2012 OR #yapcna OR #yapc',
  width: 403,
  height: 1200,
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