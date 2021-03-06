<?php
// just for errors
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

// sample Directory
$path = substr(realPath(__DIR__), 18);
define($path, true);
require_once 'application/Config/Env.php';
//echo $path;

// 'demo' some additional data for project
$env = new Env('demo');
// real data from env file
echo $env->dotEnv('db.default.hostname');

?>
