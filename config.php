<?php
// CONNECTION TO DATABASE
class Connection{
    
    private $localhost;
    private $username;
    private $password;
    private $db;

    private function connect(){
        $this->localhost = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->db = 'attendance';


        $conn = mysqli_connect($this->localhost, $this->username, $this->password, $this->db);

        if(!$conn){
            die("Connection Failed: " . mysqli_connect_error());
        }

        return $conn;
    }
}

?>