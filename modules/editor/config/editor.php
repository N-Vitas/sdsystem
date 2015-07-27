<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	"type" => "Mysql",  // Database type: "Mysql", "Postgres", "Sqlite" or "Sqlserver"
	"user" => "admin",       // Database user name
	"pass" => "admin",       // Database password
	"host" => "localhost",       // Database host
	"port" => "3061",       // Database connection port (can be left empty for default)
	"db"   => "sdsystem",       // Database name
	"dsn"  => ""        // PHP DSN extra information. Set as `charset=utf8` if you are using MySQL
);
