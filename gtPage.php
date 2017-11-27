<?php
session_start();
include 'fitBitsfunctions.php';
echo showHeader();
?>

<html>
    <body>

        <button type="button" id = 1 onclick="alert('Afspraak Vastleggen!')">Afspraak vastleggen</button>
        <button type="button" id = 2 onclick="alert('Intake gesprek!')">Intake gesprek</button>
        <button type="button" id = 3 onclick="alert('Timeslot opzoeken!')">Timeslot opzoeken</button>
        <button type="button" id = 4 onclick="alert('Choreo invoeren!')">Choreo invoeren</button>
        <button type="button" id = 5 onclick="alert('Choreo opzoeken!')">Choreo opzoeken</button>

    </body>
</html>



