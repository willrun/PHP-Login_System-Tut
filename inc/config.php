<?php 
if(!defined( '__CONFIG__'))
{
    exit('You do not have a config file');
}


require_once "classes/DB.php";
require_once "classes/Filter.php";

$con = DB::getconnection();
?>