<?php

include_once '../classes/Registration.php';
include_once '../classes/Database.php';

$db = new Database();
$reg = new Registration(
    $_POST['name'],
    $_POST['surname'],
    $_POST['email'],
    $_POST['username'],
    $_POST['password'],
    $_POST['passwordRp']
);

$dataValidationAnswer = $reg -> dataValidation();
$userCheck = $db ->findUser($_POST['email']);

if($dataValidationAnswer == "Data validated!")
{
    if($userCheck == "Unique")
    {
        $dbAdd = $db -> addData($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['username'], $_POST['password']);
        if($dbAdd == "Created") echo "Added";
        else echo $dbAdd;
    }
    else echo "User already exists";
}else{
    echo $dataValidationAnswer;
}
