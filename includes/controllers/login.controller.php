<?php

include_once '../classes/Login.php';
include_once '../classes/Database.php';
include_once '../classes/Cookie.php';

$login = new Login($_POST['data'][0]['value'], $_POST['data'][1]['value']);
$db = new Database();
$dbArray = $db -> getData("id", $_POST['data'][0]['value']);
$cookie = new Cookie($dbArray -> fetch_assoc()['id']);

$dataValid = $login -> dataValidation();

if($dataValid == "")
{
    if($db -> findUser($_POST['data'][0]['value']) == "Account already exists")
    {
        $dbArray = $db -> getData("password", $_POST['data'][0]['value']);
        $password = $dbArray -> fetch_assoc()['password'];
        $currentPassword = $_POST['data'][1]['value'];
        if(password_verify($currentPassword, $password))
        {

            $cookie -> setCookie();
            echo("Success login!");
        }else
            {
                echo "Incorrect data";
            }
    }
}else
    {
        echo $dataValid;
    }

