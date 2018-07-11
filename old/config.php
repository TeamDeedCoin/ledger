<?php
	session_start();

	/* Basic Info */
	define('SITE_TITLE', 'Ledger Leap - Blockchain Enterprise');

	$whitelist = array(
	    '127.0.0.1',
	    '::1'
	);

	/* Database Info */
	if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
		define('DB_HOST', 'localhost');
		define('DB_USER', 'root');
		define('DB_PASS', 'root');
		define('DB_NAME', '');
	}else{
		define('DB_HOST', 'localhost');
		define('DB_USER', 'root');
		define('DB_PASS', 'root');
		define('DB_NAME', '');
	}

	define('USER_TABLE', 'user');
	define('FROM_EMAIL', 'charles@ledgerleap.com');

	/* Load Modules */
	// require_once('./modules/mydb.class.php');
	require_once('./modules/library.class.php');
	require_once('./modules/mail.class.php');

	// $mydb = new MyDB();
	$library = new Library();
	$myMail = new Mail();
?>