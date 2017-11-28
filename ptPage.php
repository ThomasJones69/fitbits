<?php
session_start();
include 'fitBitsfunctions.php';
echo showHeader();
?>
<html>
    <head>
        <script>
            function ptbutton(parameter2) {
                switch (parameter2) {
                    case 1:
                        document.location = "welcome.php";
                        break;
                    case 2:
                        document.location = "ptKlantInvoer.php";
                        break;
                    case 3:
                        document.location = "ptKlantBekijken.php";
                        break;
                    case 4:
                        document.location = "ptVoedingsInvoer.php";
                        break;
                    case 5:
                        document.location = "ptTrainingsInvoer.php";
                        break;
                    case 6:
                        document.location = "gtAfspraakVastleggen.php";
                        break;
                }
            }
        </script>
    </head>
    <body>
        <div class="transbox">
            <h1>Personal Trainers Page</h1>
        </div>
        <button type="button" id = 1 onclick="ptbutton(1)">Home</button>    
        <button type="button" id = 2 onclick="ptbutton(2)">New Client</button>
        <button type="button" id = 3 onclick="ptbutton(3)">View Client</button>
        <button type="button" id = 4 onclick="ptbutton(4)">Nutrition plans</button>
        <button type="button" id = 5 onclick="ptbutton(5)">Training plans</button>
        <button type="button" id = 6 onclick="ptbutton(6)">Appointments</button>

    </body>
    </html>