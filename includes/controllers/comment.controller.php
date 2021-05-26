<?php

include_once '../classes/Database.php';

$db = new Database();

$userId = $_COOKIE['user'] / 234;

$dataArray = $db -> getById("name", $userId);

$name = $dataArray -> fetch_assoc()['name'];
$comment = $_POST['data'];
$data = date("Y.m.d");

if($db ->addComment($name, $comment, $data, $userId)){
    exit("Added");
}else{
    exit("Error");
}



