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
require_once "classes/Filter.php";

$con = DB::getconnection();
?>