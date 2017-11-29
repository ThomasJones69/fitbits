<?php
session_start();
include 'fitBitsfunctions.php';
echo showHeader();
?>
<html>
    <head>        

        <script>

        </script>
    </head>

    <body>

        <div class="transbox">
            <h2>New Client's Page</h2>
        </div>
        <form method="POST">

            <div class="container">
                <fieldset>
                    <label><b>Client Name</b></label><br>
                    <input type="text" placeholder="Enter Clients Name" name="cname" required>
                    <br>
                    <label><b>Address</b></label><br>
                    <input type="text" placeholder="Enter Clients Address" name="caddress" required>
                    <br>
                    <label><b>Registration Date</b></label><br>
                    <input type="date" name="cregDate">
                </fieldset>
            </div><br>
            <fieldset>
                <label><b>Age:</b></label><br>
                <input type="number" name="cage"><br> 
                <label><b>Date of Birth:</b></label><br>
                <input type="date" name="cDob"><br>
                <label><b>Weight:</b></label><br>
                <input type="number" name="cweight"><br>
                <label><b>Bodyfat:</b></label><br>
                <input type="text" name="cbodyFat"><br>
                <label><b>Blood Pressure:</b></label><br>
                <input type="text" name="cbloodPressure"><br>
                <label><b>Gender:</b></label><br>
                <input type="radio" name="cgender" value="Male">Male
                <input type="radio" name="cgender" value="Female">Female<br>
            </fieldset>
            <button type="submit">Save</button>
            <button onclick="location.href='http://localhost/fitbit/ptPage.php'" type="button">
     Back to Home</button>
        </form>
        <?php ptKlantInvoer($conn); ?>
    </body>

</html>
