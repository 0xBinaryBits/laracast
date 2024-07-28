<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "functions.php";
//require "router.php";
require "Database.php";


// connect to our MySQL database.

$config=require "config.php";
$id =$_GET["id"];


$db = new Database($config["database"],"noot");
$post= $db->query("select * from posts where id =:id",[":id"=>$id])->fetchAll();
dd($post);

