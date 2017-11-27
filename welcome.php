<?php
session_start();
include 'fitBitsfunctions.php';
echo showHeader();
determinGroup($conn);

//echo $rowFunction;
echo "Welcome: ".$_SESSION['name']."<br>";
echo "You are logged in as a: ". "Trainer";
if ($_SESSION['name'] = "thomas"){
    echo "Logged as thomas";
}else{
    echo "Loggen as spam";
}
?>
    <a href=gtPage.php >Group Page</a>

