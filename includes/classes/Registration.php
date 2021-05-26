<?php

include_once "../abstract/Validation.php";

class Registration extends Validation
{

    public $_infoArray = [];

    public function __construct($name, $surname, $email, $username, $password, $passwordRp)
    {
        $this->_infoArray = [$name, $surname, $email, $username, $password, $passwordRp];
    }

    public function dataValidation()
    {
        for($i = 0; $i < 6; $i++)
        {
            if(!$this->isEmptyCheck($this->_infoArray[$i]))
            {
                return "Empty fields";
            }
        }
        for($i = 0; $i < 2; $i++)
        {
            if(!$this->onlyLettersCheck($this->_infoArray[$i]))
            {
                return "Name and Surname should contain only letters!";
            }
        }
        if(!$this->checkEmail($this->_infoArray[2])) return "Wrong email!";
        if(!$this->lettersAndNumbersCheck($this->_infoArray[3])) return "Incorrect username format!";
        if(!$this->checkLength(999, 6, $this->_infoArray[4])) return "Password should be longer than 6 symbols!";
        if($this->_infoArray[4] != $this->_infoArray[5]) return "Passwords didn't match";
        return "Data validated!";
    }
}
