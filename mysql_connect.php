<?php

	DEFINE('DB_USER','username');
	DEFINE('DB_PASSWORD', 'password');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_NAME', 'math');

	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSOWRD, DB_NAME);

	if (!$dbc) {
		trigger_error('Could not connect to MySQL: '. mysqli_connect_error() );
	}
?>