<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "attendance_db";
$conn;

// CONNECTION TO DB
function connect()
{
    global $hostname, $username, $password, $db, $conn;
    $conn = mysqli_connect($hostname, $username, $password, $db);
    // Check for connection errors
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
}
// VALIDATE THE INPUT DATA
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//CLOSE CONNECTION TO DB
function disconnect()
{
    global $conn;
    mysqli_close($conn);
}
// LOGIN
function login($email, $pass)
{
    global $conn;
    session_start();
    connect();
    validate($email, $pass);
    $result = mysqli_query($conn, "SELECT * FROM user_tbl WHERE email = '$email' AND password = '$pass'");
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $_SESSION['lastname'] = $row['lastname'];
    }
    disconnect();
    return $row;
}
