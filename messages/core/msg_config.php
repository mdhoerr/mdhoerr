<?php
echo("<!-- reading msg_config.php file -->\n");
	$base_url = '/home/mdhoerr/public_html';
        require_once $base_url.'/core-base/configure.php';
        do_sql('USE mdhoerr_messages', 'msg_config.php file', 'N');
        echo("<!-- CONNECTED SUCCESSFULLY AND SWITCHED TO DB mdhoerr_messages -->\n");
        require_once 'msg_utilities.php';
?>