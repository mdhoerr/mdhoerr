<?php
echo("<!-- reading js_config.php file -->\n");
	$base_url = '/home/mdhoerr/public_html';
        require_once $base_url.'/core-base/configure.php';
        do_sql('USE mdhoerr_jobsearch', 'js_config.php file', 'N');
        echo("<!-- CONNECTED SUCCESSFULLY AND SWITCHED TO DB mdhoerr_jobsearch -->\n");
        require_once 'js_utilities.php';
?>