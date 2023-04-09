<?php 
if(!defined( '__CONFIG__'))
{
    exit('You do not have a config file');
}

error_reporting(-1);
ini_set('display_errors', 'On');

if(!isset($_SESSION))
{
    session_start();
}

require_once "classes/DB.php";
require_once "classes/filter.php";
require_once "functions.php";

$con = DB::getconnection();
?>