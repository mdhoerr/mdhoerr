<?php
        require_once 'core/js_header.php';
?>
<!-- opening html tag and head tag section are in core/js_header.php -->
<body id="jobsearch_home">
<?php
        include ("js_menu.php");
?>
<h1>Job Search Application</h1>
<p>I created this application to demonstrate a simple MVC database-driven web 
application. See "about" for more techical details or <a href="js_code.php">view the php code</a></p>
<p>When complete, this application will keep track of your job history and skill sets so you can 
automatically generate a resume, a list of skills, and a list of references.</p>
<h2>Status - in work</h2>
<p>The jobs table is set up and jobs can be added, modified or selected from the 
web interface. There is one alternate style sheet for the job list, to demonstrate 
the extreme flexibility of the tagging scheme used. The idea is to let the end user 
make the page look however they like (as in, making it match the paper form they're 
used to using) without touching the base php code or sql tables.</p>
<h2>What you can do</h2>
<ul>
<li>Read the "about" section to understand my design philosophy, setup, and 
technical details. Click the link to the php code.</li>
<li>Go to the jobs listing. Use the alternate style sheet to change the order of 
the columns in the list. Open the core/js_import.css stylesheet to see how the ids 
and classes are defined. Then play around with your own stylesheets.</li>
<li>Click through to a job from the jobs listing. Add a job or modify a job. Then 
play around with your own stylesheet to change the appearance.</li>
</ul>
 <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10-blue"
        alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
  </p>
  <p>
<a href="http://jigsaw.w3.org/css-validator/">
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Valid CSS!" />
</a>
</p>
  
</body>
</html>