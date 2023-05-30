<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "attendance";
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
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        $_SESSION['name'] = [$row['lastname'],$row['firstname']];
    }
    disconnect();
    return $row;
}
// ADD EVENT
function addEvent($eventName, $date, $time, $venue, $department, $compulsory)
{
    global $conn;
    connect();
    validate($eventName, $date, $time, $venue, $department, $compulsory);
    $result = mysqli_query($conn, "INSERT INTO event (department_id,event_name,event_time,event_venue,compulsory,event_date) VALUES ('$department','$eventName','$time','$venue','$compulsory' , '$date')");
    if (!$result) {
        die('Error: ' . mysqli_error($conn)); // Handle the error appropriately
    }

    disconnect(); // Assuming this function disconnects from the database

    return $result;
}
