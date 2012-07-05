<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<head>
<!-- reading js_header.php -->
<link rel="shortcut icon" href="/jobsearch/core/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="description" content="Work history application demonstrating a simple MVC LAMP application." />
<meta name="author" content="Mary Hoerr" />
<script type="text/javascript" src="/core-base/bubblesort.js" ></script>
<!-- this will be where the print stylesheet goes -->
<link 
        rel="stylesheet" 
        type="text/css" 
        href="/jobsearch/core/js_print.css" 
        media="print" 
/>
<title>Job Search Application</title>
<!-- Netscape 3 and earlier and IE 2 and earlier do not recognize stylesheets -->
<!-- this is the default stylesheet. It is based on the w3c default stylesheet -->
<link 
        rel="stylesheet" 
        type="text/css"
        href="/jobsearch/core/js_main.css" 
        media="all" 
/>
<!-- the primary stylesheet is imported, to avoid giving it to IE 3 and Netscape 4 -->
<!-- which have problems with all but the most basic styles -->
<style type="text/css">
@import url(/jobsearch/core/js_import.css);
<!--[if IE] -->
@import url(/jobsearch/core/js_import_ie.css);
<!--[endif] -->
</style>
<?php
        require_once 'js_config.php';
        $app_name = "Job Search";
        $altstyle = $_REQUEST['altstyle'];
if ($altstyle){
	switch($altstyle){
	case "Y":
		$alturl = "/jobsearch/core/js_alt_joblist_ie.css";
		break;
	case "1":
	default:
		$alturl = "/jobsearch/core/js_alt1.css";
	}
?>
<style type="text/css">
@import url(<?php echo($alturl);?>);
</style>
<?php
}
?>
</head>