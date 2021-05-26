<?php

include_once "../abstract/Validation.php";

class Login extends Validation
{

    public $_email;
    public $_password;

    public function __construct($email, $password)
    {
        $this->_email = $email;
        $this->_password = $password;
    }

    public function dataValidation()
    {
        if(!$this->isEmptyCheck($this->_email)) return "All fields are required";
        if(!$this->isEmptyCheck($this->_password)) return "All fields are required";
        if(!$this->checkEmail($this->_email)) return "Incorrect email format";
        if(!$this->checkLength(999, 6, $this->_password)) return "Incorrect password";
        return "";
    }

}