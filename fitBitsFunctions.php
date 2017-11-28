<?php

//session_start();

$conn = new mysqli('localhost', 'root', '', 'fitbits');

if (mysqli_connect_errno()) {
    print_f("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
login($conn);

function login($conn) {
//    if (isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['radio'])) {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $name = $_REQUEST['user'];
        $_SESSION['name'] = $name;
        $password = $_REQUEST['pass'];
        $_SESSION['pwd'] = $password;
//        $tfunction = $_REQUEST['radio'];
//        $_SESSION['position'] = $tfunction;
//        echo $name . $password . $tfunction;
//        $sql = "SELECT * FROM `trainer` WHERE `tname` = '$name' AND `tpassword` = '$password' AND `tfunction` = '$tfunction'";
        $sql = "SELECT * FROM `trainer` WHERE `tname` = '$name' AND `tpassword` = '$password'";
        echo $sql;
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($result->num_rows == 0) {
            echo "Please log in with proper credentials";
        } else {
            header("Location: welcome.php");
            return $name;
        }
    }
}

function determinGroup($conn) {
    $sqlFunction = "SELECT * FROM `trainer` WHERE `tfunction` = 'Group'";
    $result = $conn->query($sqlFunction);
    $functionname = $result;
    return $functionname;
}

function showHeader() {
    $returnString = <<<HEADSTRING
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="fitcss.css">
        <script src="fitscript.js"></script>
    </head>
    <body>
        <a href=logout.php >log out</a>
HEADSTRING;
    return $returnString;
}

?>
