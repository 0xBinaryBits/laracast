<?php

$heading="Note In Detail";
$config= require "config.php";
$db = new Database($config["database"],"noot");
$id=$_GET['id'];
$post= $db->query("select * from notes where id = :id",[":id" => $id])->fetch();
//dd($post);

if(! $post) {abort(Response::NOT_FOUND);}
if($post["user_id"]!=1) {abort(Response::FORBIDDEN);}


require ("views/note.view.php");?>
