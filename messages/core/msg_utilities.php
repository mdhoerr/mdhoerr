<?php
echo("<!-- reading msg_utilties.php -->\n");

class messages{
## define members ##
        public $messageid = 0;
        public $fname = '';
        public $lname = '';
        public $country = '';
        public $email = '';
        public $created;
        public $updated;
        public $message = '';
        public $honeypot = '';

## define methods ##
        //SELECT MESSAGE
        function selectmessage($p_calledfrom){
                if(!$p_calledfrom){
                        $p_calledfrom = "not supplied";
                }
                $sql = "SELECT * from messages where messageid = '%s'";
                $sql =  sprintf($sql,
                        mysql_real_escape_string($this->messageid)
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
        // UPDATE MESSAGE
        function updatemessage($p_calledfrom){
                if(!$p_calledfrom){
                        $p_calledfrom = "not supplied";
                }
                if ($this->honeypot != '') {
                	die($p_calledfrom.". You are a spammer.");
                }
                $sql = "UPDATE messages SET ";
                $sql.= "fname = '%s', ";
                $sql.= "lname = '%s', ";
                $sql.= "country = '%s', ";
                $sql.= "email = '%s', ";
                $sql.= "created = '%s', ";
                $sql.= "updated = '%s', ";
                $sql.= "message = '%s' ";
                $sql.= "WHERE messageid = '%s'";
                $sql =  sprintf($sql,
                        mysql_real_escape_string($this->fname),
                        mysql_real_escape_string($this->lname),
                        mysql_real_escape_string($this->country),
                        mysql_real_escape_string($this->email),
                        mysql_real_escape_string($this->created),
                        mysql_real_escape_string($this->updated),
                        mysql_real_escape_string($this->message),
                        mysql_real_escape_string($this->messageid)
                        );
                echo("<!-- UPDATE SQL statment is: ".$sql." -->\n");
                $p_calledfrom .= " and sql query is: ".$sql;
                $result = do_sql($sql, $p_calledfrom,'N');
print_r($sql);
// print_r($message);
                        return '0';
        }
        // INSERT MESSAGE
        function insertmessage($p_calledfrom){
                if(!$p_calledfrom){
                        $p_calledfrom = "not supplied";
                }
                if ($this->honeypot != '') {
                	die($p_calledfrom.". You are a spammer.");
                }
                $sql = "INSERT into messages (";
                $sql.= "fname, lname, country, email, created, updated, message";
                $sql.= ") VALUES (";
                $sql.= "'%s', '%s', '%s', '%s', '%s', '%s', '%s'";
                $sql.= ")";
                $sql =  sprintf($sql, 
                        mysql_real_escape_string($this->fname),
                        mysql_real_escape_string($this->lname),
                        mysql_real_escape_string($this->country),               
                        mysql_real_escape_string($this->email),
                        mysql_real_escape_string($this->created),
                        mysql_real_escape_string($this->updated),
                        mysql_real_escape_string($this->message)
                        );
                $p_calledfrom .= " and the sql query is: ".$sql;
                $lastid = do_sql($sql, $p_calledfrom, 'Y'); 
print_r($sql);
                        return $lastid;
        }
}

function messagelist($p_fieldname, $p_comparison, $p_value){
        if(!$p_fieldname){
                $p_fieldname = 'lname';
        }
        if(!p_comparison){
                $p_comparison = ' LIKE ';
        }
echo("<!-- value in is: ".$p_value." -->");
        if(!$p_value && $p_value != '0'){
                $p_value = '%*%';
        }
        $sql = "SELECT * from  messages WHERE ";
        $sql.= $p_fieldname.$p_comparison."'%s'";
        $sql =  sprintf($sql,
                        mysql_real_escape_string($p_value)
                );
echo("<!-- sql is: ".$sql." -->");
        $calledfrom = "messagelist function with fieldname = ".$p_fieldname." and comparison = ".$p_comparison." and value = ".$p_value." with sql query: ".$sql;
        $result = do_sql($sql, $calledfrom,'N');
        $ids = array('0');
        if (mysql_num_rows($result) > 0) {
                for($i=0; $i<mysql_num_rows($result); $i++){
                        $row = mysql_fetch_assoc($result);
                        $ids[$i] = $row['messageid'];
                }
        }
        mysql_free_result($result);
                return $ids;
}

?>