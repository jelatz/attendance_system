<?php
    $hostname="localhost";
    $username="root";
    $password="";
    $db="skillstest";
    $conn;

    function connect()
    {
        global $hostname, $username, $password,  $db, $conn;
        $conn = mysqli_connect($hostname, $username, $password, $db);
    }

    function disconnect()
    {
        global $conn;
        mysqli_close($conn);
    }

    function getAll()
    {
        global $conn;
        $sql = "SELECT * FROM `book`" ;
        connect();
        $query = mysqli_query($conn, $sql);
        $result= mysqli_fetch_all($query);
        disconnect();
        return $result;
    }

    function addBook($isbn, $title, $copyright, $edition, $price, $quantity)
    {
        global $conn;
        $sql = "INSERT INTO  `book` VALUES($isbn, '$title', '$copyright', '$edition', $price,  $quantity)"; 
        connect();
        mysqli_query($conn, $sql);
        disconnect();
    }

    function search($isbn)
    {
        global $conn;
        $sql = "SELECT * FROM `book` WHERE `isbn` = $isbn" ;
        connect();
        $query = mysqli_query($conn, $sql);
        $result= mysqli_fetch_all($query);
        disconnect();
        return $result;
    }
    
    function delete($isbn)
    {
        global $conn;
        $sql = "DELETE `book` WHERE `isbn` = $isbn"; 
        connect();
        mysqli_query($conn, $sql);
        disconnect();
    }

    function edit($isbn, $title, $copyright, $edition, $price, $quantity)
    {
        global $conn;
        $sql = "UPDATE `book` SET `title` = '$title', `copyright` = '$copyright', `edition` = '$edition', `price` = '$price', `quantitiy` = '$quantity' WHERE `book`.`isbn` = $isbn;";
        connect();
        mysqli_query($conn, $sql);
        disconnect();
        return true;
    }

    function login($user, $pass)
    {
        global $conn;
        $sql = "SELECT * FROM `login` WHERE `login`.`username` = '$user' and `login`.`password`= '$pass'";
        connect();
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_all($query);
        disconnect();
        return $result;
    }

?>