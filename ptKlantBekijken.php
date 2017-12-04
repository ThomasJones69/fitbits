<?php
session_start();
include 'fitBitsFunctions.php';
echo showHeader();
?>
<html>
    <head>        
        <script>
//            function rowid(id) {
//                alert(id);
//            }
//            
//            function deleterec(id) {
//                alert("The Delete button was clicked");
//            }
//            
            function deleteuser(id) {
                    var searchString = document.getElementById("id").selectedIndex;
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            var jsonResponse = JSON.parse(xhttp.responseText);
                            document.getElementById("id").value = jsonResponse.id;
                        }
                    };
                    xhttp.open("GET", "deleteuser.php?orderSearch=" + searchString, true);
                    xhttp.send();
               }

            function updateuser(id) {
                var rowid = document.getElementById("id").value;
                var xhr;
                if (window.XMLHttpRequest) { // Mozilla, Safari, ...
                    xhr = new XMLHttpRequest();
                } else if (window.ActiveXObject) { // IE 8 and older
                    xhr = new ActiveXObject("Microsoft.XMLHTTP");
                }
                var data = "id" + rowid;
                xhr.open("POST", "book-suggestion.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send(data);
            }
        </script>
    </head>

    <body>
        <div class="transbox">
            <h2>View Clients</h2>
        </div>
        <button onclick="location.href = 'ptPage.php'" type="button">
            Back to Home</button>
        <?php
        $sql = "SELECT * FROM `tj_clients`;";
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
        echo "<th>" . "Update" . "</th>";
        echo "<th>" . "Delete" . "</th>";
        while ($row = $result->fetch_assoc()) {
//            echo "\n<tr onclick='rowid(" . $row['id'] . ")'>";
            echo "<tr >";
            echo "<td>" . $row['cname'] . "</td>";
            echo "<td>" . $row['caddress'] . "</td>";
            echo "<td>" . $row['cregDate'] . "</td>";
            echo "<td>" . $row['cage'] . "</td>";
            echo "<td>" . $row['cDob'] . "</td>";
            echo "<td>" . $row['cweight'] . "</td>";
            echo "<td>" . $row['cbodyFat'] . "</td>";
            echo "<td>" . $row['cbloodPressure'] . "</td>";
            echo "<td>" . $row['cgender'] . "</td>";
            echo "<td><button onclick='updateuser(" . $row['id'] . ")'  class='delete'>Update </button></td>";
            echo "<td><button onclick='deleteuser(" . $row['id'] . ")'  class='delete'>Delete </button></td>";
            echo "</tr>";
        }
        ?>
    </body>
