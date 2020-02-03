<?php
$username="bdan89"; $password="bd179an89"; $database="cs502bdan89";
mysql_connect('dbclass2.cs.nmsu.edu', $username, $password);
@mysql_select_db($database) or die( "Unable to select database\n");
//echo "\n fff \n";

$query="insert into User VALUES ('g','g','f','f', 00000000, 'b')";
mysql_query($query);
mysql_close();
echo "\nclosed\n";

?>
