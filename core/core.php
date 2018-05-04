<?php
session_start();
/**
 * Ruta absoluta del core
 * @var 'ABSPATH'
 */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
 

DEFINE('VENDOR', "vendor");
require_once(ABSPATH . VENDOR . '/less/lessc.inc.php');

DEFINE('LIBS', "libs");

if( !empty( $_DSH_MODE ) ){
    DEFINE ( 'DSHPATH' , $_SERVER['DOCUMENT_ROOT'] . '/dashboard/');
    DEFINE ( 'DSHTHEMES' , DSHPATH . 'template/');
    
    require_once( ABSPATH . LIBS . '/site.php');
}

//DEFINE('PLGNS', "plugins");
//require_once( ABSPATH . KDLBS . '/lock.php');
//require_once( ABSPATH . KDLBS . '/locksmith.php');
//require_once( ABSPATH . KDLBS . '/guy.php');
//require_once( ABSPATH . KDLBS . '/functions.php');
//require_once( ABSPATH . KDLBS . '/screws.php');
//require_once( ABSPATH . KDLBS . '/pipes.php');
//require_once( ABSPATH . KDLBS . '/plugins.php');
require_once( ABSPATH . LIBS . '/style.php');
//require_once( ABSPATH . KDLBS . '/user.php');
//require_once( ABSPATH . KDLBS . '/stuffs.php');

?>