<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','id19481844_root');
define('DB_PASS','cM9|H+)G#7Y3UVzC');
define('DB_NAME','id19481844_obcsdb');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>