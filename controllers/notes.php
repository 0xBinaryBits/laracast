<?php

$heading="My Notes";
$config= require "config.php";
$db = new Database($config["database"],"noot");
$id=$_GET['id']=1;
$posts= $db->query("select * from notes where user_id = :id",[":id" => $id])->fetchAll();


require ("views/notes.view.php");?>
