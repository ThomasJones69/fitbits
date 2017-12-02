<?php
session_start();
include 'fitBitsFunctions.php';
echo showHeader();
determinGroup($conn);

//echo $rowFunction;
echo "Welcome: ".$_SESSION['name']."<br>";
echo "You are logged in as a Trainer"."<br>";
if ($_SESSION['name'] == "thomas"){
    echo "Logged in as thomas";
}else{
    echo "Logged in as other user!";
}
?>
<br>
        <button onclick="location.href = 'gtPage.php'" type="button">
            Group Page</button>
        <button onclick="location.href = 'ftPage.php'" type="button">
            Fitness Page</button>
        <button onclick="location.href = 'ptPage.php'" type="button">
            Personal Trainer Page</button>

