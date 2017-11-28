<?php
session_start();
include 'fitBitsfunctions.php';
echo showHeader();
?>

<html>
    <head>
        <script>
            function gtbutton(parameter2) {
                switch (parameter2) {
                    case 1:
                        document.location = "index.php";
                        break;
                    case 2:
                        document.location = "gtAfspraakVastleggen.php";
                        break;
                    case 3:
                        document.location = "gtIntakeGesprek.php";
                        break;
                    case 4:
                        document.location = "gtTimeslotOpzoek.php";
                        break;
                    case 5:
                        document.location = "gtChoreoInvoer.php";
                        break;
                    case 6:
                        document.location = "gtChoreoOpzoek.php";
                        break;
                }
            }
        </script>

    </head>
    <body>
        <button type="button" id = 1 onclick="gtbutton(1)">Home</button>
        <button type="button" id = 2 onclick="gtbutton(2)">Afspraak vastleggen</button>
        <button type="button" id = 3 onclick="gtbutton(3)">Intake gesprek</button>
        <button type="button" id = 4 onclick="gtbutton(4)">Timeslot opzoeken</button>
        <button type="button" id = 5 onclick="gtbutton(5)">Choreo invoeren</button>
        <button type="button" id = 6 onclick="gtbutton(6)">Choreo opzoeken</button>

    </body>
</html>


<!--<html>
    <head>
        <script>
            function voorbeeldfunctie(parameter2) {
                switch (parameter2) {
                    case 'a':
                        document.location = 'jojo.php';
                        break;
                    case 'b':
                        document.location = 'jojo2.php';
                }
            }
        </script>
    </head>
    <body>
        <span onclick="voorbeeldfunctie('a')">link1</span>
        <br>
        <span onclick="voorbeeldfunctie('b')">link2</span>        
    </body>
</html>-->
