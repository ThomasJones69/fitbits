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
<!--<a href=gtPage.php >Group Page</a><br>
<a href=ftPage.php >FT Page</a><br>
<a href=ptPage.php >PT Page</a>-->
        <button onclick="location.href = 'http://localhost/fitbit/gtPage.php'" type="button">
            Group Page</button>
        <button onclick="location.href = 'http://localhost/fitbit/ftPage.php'" type="button">
            Fitness Page</button>
        <button onclick="location.href = 'http://localhost/fitbit/ptPage.php'" type="button">
            Personal Trainer Page</button>

