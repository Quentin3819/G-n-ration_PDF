<?php

//Connect to the database
$host = "ls462055-001.dbaas.ovh.net";
$user = "Quentin";
$pass = "Quentin01";
$db = "testeQuentin";
$port = 35493;
$connection = mysqli_connect($host, $user, $pass, $db, $port);

//Logo 1
//Requete pour récupérer les logos
$logo1 = "SELECT `logo1` FROM `bdd_catalogue_2020_liste_formations` WHERE `ref`=\"$idTitle\"";
$resultlogo1 = mysqli_query($connection, $logo1);
foreach ($resultlogo1 as $row) {
    foreach ($row as $rows) {
        if (!empty($rows)){
            //affiche le logo si il y en a un
            $this->Image("/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/logo/$rows.PNG", 34, 280,12,6);
        }else{}
    }
}

//Logo 2 financeur
//Requete pour récupérer les logos
$logo2 = "SELECT `logo2` FROM `bdd_catalogue_2020_liste_formations` WHERE `ref`=\"$idTitle\"";
$resultlogo2 = mysqli_query($connection, $logo2);;
foreach ($resultlogo2 as $row) {
    foreach ($row as $rows) {
        if (!empty($rows)){
            //affiche le logo si il y en a un
            $this->Image("/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/logo/$rows.PNG", 47, 280,12,6);
        }else{}
    }
}

//Logo 3 financeur
//Requete pour récupérer les logos
$logo3 = "SELECT `logo3` FROM `bdd_catalogue_2020_liste_formations` WHERE `ref`=\"$idTitle\"";

$resultlogo3 = mysqli_query($connection, $logo3);;
foreach ($resultlogo3 as $row) {
    foreach ($row as $rows) {
        if (!empty($rows)){
            //affiche le logo si il y en a un
            $this->Image("/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/logo/$rows.PNG", 60, 280,12,6);
        }else{}
    }
}

//Logo 4 financeur
//Requete pour récupérer les logos
$logo4 = "SELECT `logo4` FROM `bdd_catalogue_2020_liste_formations` WHERE `ref`=\"$idTitle\"";
$resultlogo4 = mysqli_query($connection, $logo4);;
foreach ($resultlogo4 as $row) {
    foreach ($row as $rows) {
        if (!empty($rows)){
            //affiche le logo si il y en a un
            $this->Image("/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/logo/$rows.PNG", 73, 280,12,6);
        }else {}
    }
}

//Logo 5 financeur
//Requete pour récupérer les logos
$logo5 = "SELECT `logo5` FROM `bdd_catalogue_2020_liste_formations` WHERE `ref`=\"$idTitle\"";
$resultlogo5 = mysqli_query($connection, $logo5);;
foreach ($resultlogo5 as $row) {
    foreach ($row as $rows) {
        if (!empty($rows)){
            //affiche le logo si il y en a un
            $this->Image("/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/logo/$rows.PNG", 86, 280,12,6);
        }else {}
    }
}

//Logo 6 financeur
//Requete pour récupérer les logos
$logo6 = "SELECT `logo6` FROM `bdd_catalogue_2020_liste_formations` WHERE `ref`=\"$idTitle\"";
$resultlogo6 = mysqli_query($connection, $logo6);;
foreach ($resultlogo6 as $row) {
    foreach ($row as $rows) {
        if (!empty($rows)){
            //affiche le logo si il y en a un
            $this->Image("/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/logo/$rows.PNG", 99, 280,12,6);
        }else {}
    }
}