<?php

$conn = connectToDB();
login($conn);

function connectToDB() {
    $hostname = 'localhost';
    $databasenaam = 'fitbits';
    $username = 'root';
    $password = '';
}

function login($conn) {
    $name = $_REQUEST['user'];
    $password = $_REQUEST['pass'];

    $sql = "SELECT * FROM `trainer` WHERE `name` = '$name' AND `password` = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        echo "<b>" . "There is no account for " . $name . "!" . "</b>";
        echo "<br>";
    } else {
        echo "Welcome " . $name . "." . " You have succesfully logged in.";
        sleep(5);
        header("Location: te-lezen-file.php");
    }
}
