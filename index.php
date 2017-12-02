<?php
session_start();
include 'fitBitsFunctions.php';

?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="fitcss.css">
        <script src="js/fitscript.js"></script>
        <script src="js/jquery-3.2.1.js"></script>
        <meta charset="UTF-8">
        <title>Fit-Bits</title>
    <h1>Welcome to Fit-Bits</h1>
    <h2>Please Log-In</h2>
    </head>


    <form method="POST">

        <div class="container">
            <label><b>User</b></label><br>
            <input type="text" placeholder="Enter Username" name="user" required>
            <br>
            <label><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="pass" required>
            <br>
            <label><b>Function</b></label><br>
            <input type="radio" name="function" value="Personal"> Personal Trainer<br>
            <input type="radio" name="function" value="Fitness"> Fitness Trainer<br>
            <input type="radio" name="function" value="Group"> Group Trainer<br>
            <button type="submit" value="Get Selected Values" >Log In</button>
 
        </div>

    </form>

<body>

</body>
</html>
