<?php
	define("db_server","banjo5.readyhostingmysql.com");	// usually localhost
	define("db_user","renorigs");
	define("db_password","renorigs");
	define("db_database","renorigs");
	
	$server_link = mysql_connect (db_server, db_user, db_password);
	$db_link = mysql_select_db (db_database);
?>