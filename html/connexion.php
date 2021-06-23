<?php
	define('DNS', 'mysql:host=localhost;port=3306;dbname=fabrea');
	define('LOGIN','fabrea');
	define('PASSWORD', 'quahroh4pait');
	$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
			 PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
			 PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
	
				




?>