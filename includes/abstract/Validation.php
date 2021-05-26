<?php

abstract class Validation
{
    public function isEmptyCheck($string){
        if($string == "") return false;
        else return true;
    }

    public function checkLength($maxLength, $minLength, $string)
    {
        if(strlen($string) > $maxLength || strlen($string) < $minLength) return false;
        else return true;
    }

    public function checkEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
        else return true;
    }

    public function onlyLettersCheck($text)
    {
        if (!preg_match('/^[a-zA-Z]+$/', $text)) return false;
        else return true;
    }

    public function lettersAndNumbersCheck($text){
        if(!preg_match('/^[a-zA-Z0-9_-]+$/', $text)) return false;
        else return true;
    }
}