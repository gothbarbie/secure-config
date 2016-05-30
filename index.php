<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

$dotenv = (new \Dotenv\Dotenv(__DIR__))->load();

$server = getenv('DB_HOST');
$datab = getenv('DB_DATABASE');
$uname = getenv('DB_USERNAME');
$passw = getenv('DB_PASSWORD');

try{
    $db = new PDO("mysql:host=$server;dbname=$datab;", $uname, $passw);
} catch(PDOException $e) {
    die( "Connection failed: " . $e->getMessage());
}
