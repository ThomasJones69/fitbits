<?php
session_start();
include 'fitBitsfunctions.php';
echo showHeader();
?>
<html>
    <head>        
        <script>
            function rowid(id) {
                alert(id);
            }
        </script>
    </head>

    <body>
        <div class="transbox">
            <h2>View Clients</h2>
        </div>
        <button onclick="location.href = 'http://localhost/fitbit/ptPage.php'" type="button">
            Back to Home</button>
        <?php
//        ptKlantBekijk($conn);

        $sql = "SELECT * FROM `clients`;";
        $result = $conn->query($sql);
        echo "<table id='clients'>";
        echo "<th>" . "Name" . "</th>";
        echo "<th>" . "Address" . "</th>";
        echo "<th>" . "Reg. Date" . "</th>";
        echo "<th>" . "Age" . "</th>";
        echo "<th>" . "D.o.B." . "</th>";
        echo "<th>" . "Weight" . "</th>";
        echo "<th>" . "Body Fat" . "</th>";
        echo "<th>" . "Blood Press." . "</th>";
        echo "<th>" . "Gender" . "</th>";
        while ($row = $result->fetch_assoc()) {
            echo "\n<tr onclick='rowid(" . $row['id'] . ")'>";
            echo "<td>" . $row['cname'] . "</td>";
            echo "<td>" . $row['caddress'] . "</td>";
            echo "<td>" . $row['cregDate'] . "</td>";
            echo "<td>" . $row['cage'] . "</td>";
            echo "<td>" . $row['cDob'] . "</td>";
            echo "<td>" . $row['cweight'] . "</td>";
            echo "<td>" . $row['cbodyFat'] . "</td>";
            echo "<td>" . $row['cbloodPressure'] . "</td>";
            echo "<td>" . $row['cgender'] . "</td>";
            echo "</tr>";
        }
        ?>
    </body>
