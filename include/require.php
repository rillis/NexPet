<?php
	$host = "127.0.0.1";
	$user = "root";
	$pass = "";
	$db = "dbnp";
	$connect = @mysql_connect($host, $user, $pass) or die(mysql_error());
	$connectDB = @mysql_select_db($db) or die(mysql_error());
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
	
function hashSSHA($password) {
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
}
?>