<?php

error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set("display_errors", 1);

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

require_once __DIR__.DS.'vendor'.DS.'autoload.php';
require_once __DIR__.DS.'lib'.DS.'liveBackup.php';

$shortopts  = "";
$shortopts .= "f:";  // Required value
$shortopts .= "v::"; // Optional value
$shortopts .= "abc"; // These options do not accept values

$longopts  = array(
    "required:",     // Required value
    "optional::",    // Optional value
    "option",        // No value
    "opt",           // No value
);
$options = getopt($shortopts, $longopts);

echo liveBackup::init($argv, $options).PHP_EOL;