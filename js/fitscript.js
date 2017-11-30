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

function gtbutton(parameter2) {
    switch (parameter2) {
        case 1:
            document.location = "welcome.php";
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
