<?php
ob_start();
// ===================================================================================================
// Version      : 1.2.5
// Author       : Discord: pulse1986
// ===================================================================================================
$host = isset($_SERVER['HTTP_HOST']) ? htmlspecialchars($_SERVER['HTTP_HOST']) : htmlspecialchars(getenv('HTTP_HOST'));
$self = isset($_SERVER['PHP_SELF']) ? htmlspecialchars($_SERVER['PHP_SELF']) : htmlspecialchars(getenv('PHP_SELF'));

if(file_exists('constants.php')) {
    require_once('constants.php');
    require_once(BASEDIR . 'vendor/autoload.php');
} else {
    exit('file constants.php not found.');
}

if(defined('INSTALLED') && INSTALLED == false) {
    header("Location: http://" . $host . rtrim(dirname($self), '/\\') . "/setup/index.php");
} else {
    if(defined('ENVIRONMENT')) {
        switch(ENVIRONMENT) {
            case 'development':
                error_reporting(E_ALL & ~E_DEPRECATED);
                ini_set('display_errors', '1');
                break;
            default:
                error_reporting(0);
                break;
        }
    }
    require_once(SYSTEM_PATH . DS . 'common.php');
    require_once(SYSTEM_PATH . DS . 'cms.php');
}

ob_end_flush();
