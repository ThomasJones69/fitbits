<?php
//session_start();

$conn = new mysqli('localhost', 'root', '', 'fitbits');

if (mysqli_connect_errno()) {
    print_f("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
login($conn);
function login($conn) {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $name = $_REQUEST['user'];
        $_SESSION['name'] = $name;
        $password = $_REQUEST['pass'];
        $sql = "SELECT * FROM `trainer` WHERE `tname` = '$name' AND `tpassword` = '$password'";
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

function determinGroup($conn){
    $sqlFunction = "SELECT * FROM `trainer` WHERE `tfunction` = 'Group'";
    $result = $conn->query($sqlFunction);
//    $rowFunction = $result->fetch_assoc();
//      $tFunction = mysqli_fetch_arry($result);
//    $tFunction = $result[`tfunction`];
//    $_SESSION['tFunction'] = $tFunction;
//    $_SESSION['tfunction'] = printf ("%s \n",$rowFunction["tfunction"]);
//    $tFunction = printf ("%s \n",$rowFunction["tfunction"]);
//    return $rowFunction;
//    return $tFunction;

    
    
}

//function getDataFromTableByID(table, id){
//    
//}
function showHeader(){
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
