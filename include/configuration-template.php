<?php

/** Database Information */

/** Your MySQL userid */
define("CONF_ADMINID", "root");
/** Your MySQL password in plain text */
define("CONF_ADMINPASS", "");
/** Location of database */
define("CONF_LOCATION", "127.0.0.1");
/** Database to connect to */
define("CONF_DATABASE", "gitchallenge");

/** Git Configuration */

/** Git Organization */
define("GIT_ORG", "github-tools");
/** Git Client */
define("GIT_CLIENT", "Git Client");
/** Git Secret */
define("GIT_SECRET", "Git Secret");

/** App Options */
define("SIGN_UP", "FALSE");
define("DEBUG", "OFF");
define("MAXCALLS", "1000");

/** Point Scaling */
define("ADDITIONS", "1");
define("DELETIONS", "1");
define("CHALLENGES", "1");
define("COMMITS", "10");
define("ISSUES", "25");
define("PULLREQUESTS", "50");

return (object) array(
	'host' => '127.0.0.1',
	'username' => 'root',
	'password' => '',
	'database' => 'gitchallenge',
	'git' => array(
		'org' => 'github-tools',
		'client' => '',
		'secret' => ''
	),
	'options' => array(
		'pool' => true,
		'debug' => false,
		'maxcalls' => 1000
	),
	'points' => array(
		'additions' => 1,
		'deletions' => 1,
		'challenges' => 1,
		'commits' => 10,
		'issues' => 25,
		'pullRequests' => 50
	)
);
