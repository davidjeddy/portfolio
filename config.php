<?php
/* Standard configs */
define('SITEOWNER', "David J Eddy");
define('SITEEMAIL', "me@davidjeddy.com");
define('SITETITLE', "Portfolio");
define('SITEROOT', 	"./views/");

/* DB conn info */
define('DB_ADDY',	"localhost");
define('DB_NAME',	"dje_portfolio");
define('DB_USRNM',	"root");
define('DB_PASS',	"Asdf1234");

/* Edit for your locality */
date_default_timezone_set("UTC");

/* DO NOT CHANGE! */
define('DATEFORMATE',	"YYYY-MM-DD");
define('TIMEFORMATE',	"HH-mm-ss");
define('NOW_YEAR', 	date("Y"));
define('NOW_MONTH', date("M"));
define('NOW_DAY',	date("D"));



//Iteration 1 of DB conn management
//if the db core can not be includes
if (!include_once( './models/database.php')) {
	echo '<p>Sorry, we had an error and can not display the site at this time. DB Error 1</p>';
	exit;
}

//Make sure we can connect to the DB
try {
    $dbconn = new PDO('mysql:host='.DB_ADDY.';dbname='.DB_NAME.'', DB_USRNM, DB_PASS);
    
    $dbconn->query( "
    	SELECT * FROM projects WHERE id = 1
    " );

    $dbconn = null;
} catch (PDOException $e) {
    print $e->getMessage()." DB2 Error 2";
    exit;
}