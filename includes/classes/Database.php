<?php

class Database
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $database = "user_data";

    public function dbConnect()
    {
        return new mysqli($this->servername, $this->username, $this->password, $this->database);
    }

    public function addData($name, $surname, $email, $username, $password)
    {
        $conn = $this->dbConnect();
        if($conn -> connect_error) return "Try a bit later. Error code: 102";
        $password = password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO `user_info` (id, `name`, `surname`, `email`, `username`, `password`) VALUES (NULL, '$name', '$surname', '$email', '$username', '$password')";
        if($conn -> query($sql))
        {
            return "Created";
        }
        else {
            return "User creation mistake, try later. Error code: 103";
        }
    }

    public function addComment($name, $comment, $data, $users_id)
    {
        $conn = $this->dbConnect();
        if($conn -> connect_error) return "Try a bit later. Error code: 102";
        $sql = "INSERT INTO `comments` (id, `name`, `comment`, `data`, `users_id`) VALUES (NULL, '$name', '$comment', '$data', '$users_id')";
        if($conn -> query($sql))
        {
            return true;
        }
        else {
            return false;
        }
    }

    public function findUser($email)
    {
        $conn = $this->dbConnect();
        if($conn -> connect_error) return "Try a bit later. Error code: 102";
        $sql = "SELECT * FROM `user_info` WHERE email = '$email'";
        $result = $conn->query($sql);
        if($result -> num_rows > 0) return "Account already exists";
        else return "Unique";
    }

    public function getData($toGet, $email)
    {
        $conn = $this->dbConnect();
        if($conn -> connect_error) return "Try a bit later. Error code: 102";
        $sql = "SELECT `$toGet` FROM `user_info` WHERE email = '$email'";
        return $conn -> query($sql);
    }

    public function getById($toGet, $id)
    {
        $conn = $this->dbConnect();
        if($conn -> connect_error) return "Try a bit later. Error code: 102";
        $sql = "SELECT `$toGet` FROM `user_info` WHERE id = '$id'";
        return $conn -> query($sql);
    }

    public function getAllData($table)
    {
        $conn = $this->dbConnect();
        if($conn -> connect_error) return "Try a bit later. Error code: 102";
        $sql = "SELECT * FROM `$table`";
        return $conn -> query($sql);
    }

    public function findComment($id)
    {
        $conn = $this->dbConnect();
        if($conn -> connect_error) return "Try a bit later. Error code: 102";
        $sql = "SELECT * FROM `comments` WHERE id = '$id'";
        $result = $conn -> query($sql);
        if($result -> num_rows > 0){
            return false;
        }else{
            return true;
        }
    }
}