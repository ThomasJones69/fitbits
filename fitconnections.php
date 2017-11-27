<?php

$conn = new mysqli('localhost', 'root', '', 'fitbits');
//$conn = connectToDB();
//login($conn);
//function connectToDB() {
//    $hostname = 'localhost';
//    $databasenaam = 'fitbits';
//    $username = 'root';
//    $password = '';
//}

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);

//function login($conn) {
if (isset($_POST['user']) && isset($_POST['pass'])) {
//    if(isset($_REQUEST['pass'])){
    $name = $_REQUEST['user'];
    $password = $_REQUEST['pass'];
//    echo $name;
//    echo $password;
    $sql = "SELECT * FROM `trainer` WHERE `tname` = '$name' AND `tpassword` = '$password'";
//    echo $sql;
    $result = $conn->query($sql);
//    $row = mysqli_fetch_assoc($result);
    $row = $result->fetch_assoc();
//    echo $row;
//    echo $result;
    if ($result->num_rows === 0) {
        echo "Please log in with proper credentials";
    }else{
        header("Location: welcome.php");
    }
}

    
//    $row = mysqli_fetch_assoc($result);
//    echo $row;
//    if ($result->num_rows == 0) {
//        echo "<b>" . "Please log in with proper credentials. There is no account for " . $name . "!" . "</b>";
//        echo "<br>";
//    } else {
//        echo "Welcome " . $name . "." . " You have succesfully logged in.";
//        sleep(3);
////        header("Location: te-lezen-file.php");
//    }

