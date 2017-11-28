<?php
session_start();
include 'fitBitsfunctions.php';
echo showHeader();
determinGroup($conn);

//echo $rowFunction;
echo "Welcome: ".$_SESSION['name']."<br>";
echo "You are logged in as a Trainer"."<br>";
if ($_SESSION['name'] = "thomas"){
    echo "Logged as thomas";
}else{
    echo "Loggen as spam";
}
?>
<br>
<a href=gtPage.php >Group Page</a><br>
<a href=ftPage.php >FT Page</a><br>
<a href=ptPage.php >PT Page</a>

