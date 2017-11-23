<html>
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" type = "text/css" href="fitcss.css">
        <title>Fit-Bits</title>
    <h1>Welcome to Fit-Bits</h1>
    <h2>Please Log-In</h2>

    <form method="POST">

        <div class="container">
            <label><b>User</b></label>
            <input type="text" placeholder="Enter Username" name="user" required>
            <br>
            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>
            <br>
            <button type="submit" >Log In</button>
        </div>

        <div class="container" style="background-color:#f1f1f1">
        </div>
    </form>
</head>
<body>
    <?php
    $hostname = 'localhost';
    $databasenaam = 'fitbits';
    $username = 'root';
    $password = '';
    ?>
</body>
</html>
