<?php
echo("<!-- reading js_utilties.php -->\n");

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
        public $honeypot = '';

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
                if ($this->honeypot != '') {
                	die($p_calledfrom.". You are a spammer.");
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
                if ($this->startyear == 0) {
                	die($p_calledfrom.". Please provide start year.");
                }
                if ($this->honeypot != '') {
                	die($p_calledfrom.". You are a spammer.");
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
## define members ##
        public $orgid = 0;
        public $orgname = '';
        public $sec = '';
        public $city = '';
        public $state = '';
        
## define methods ##
        //SELECT ORGANIZATION
        function selectorg($p_orgid){
        	$p_calledfrom = "not supplied";
                if(!$p_orgid){
                        $p_orgid = 0;
                }
                $sql = "SELECT * from organizations where orgid = '%s'";
                $sql =  sprintf($sql,
                        mysql_real_escape_string($p_orgid)
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
?>