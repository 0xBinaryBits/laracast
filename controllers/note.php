<?php

$heading="Note In Detail";
$config= require "config.php";
$db = new Database($config["database"],"noot");
$id=$_GET['id']=1;
$post= $db->query("select * from notes where id = :id",[":id" => $id])->fetch();


require ("views/note.view.php");?>
