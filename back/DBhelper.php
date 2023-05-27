<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "attendance";
$conn;

// CONNECTION TO DB
function connect(){
    global $hostname, $username, $password, $db, $conn;
    $conn = mysqli_connect($hostname, $username, $password, $db);
// Check for connection errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
}
// VALIDATE THE INPUT DATA
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//CLOSE CONNECTION TO DB
function disconnect(){
    global $conn;
    mysqli_close($conn);
}
// LOGIN
function login ($user, $pass){
    global $conn;
    connect();
    validate($user,$pass);
    $result = mysqli_query($conn, "SELECT * FROM accounts WHERE email = '$user' AND password = '$pass'");
    $row = mysqli_fetch_all($result);
    disconnect();
    return $row;
}









?>