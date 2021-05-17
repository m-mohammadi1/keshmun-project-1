<?php



date_default_timezone_set('Asia/Tehran');

session_start();
ob_start();

include "config/constants.php";
include "config/config.php";


// autloading classes
spl_autoload_register(function ($class_name) {
    $file = explode('\\', $class_name);
    $file_path = 'bootstrap' . DS . implode('/', $file) . '.php';
    require_once SITE_ROOT . DS .  $file_path;
}); 


use Classes\Utilities\Session;
use Classes\Utilities\Mysql;
use Classes\Traits\DatabaseTrait;

// global variables
$session = new Session($users);
$conn = new Mysql(DB_INFO['host'], DB_INFO['user'], DB_INFO['pass'], DB_INFO['name']);

DatabaseTrait::injectConnection($conn);