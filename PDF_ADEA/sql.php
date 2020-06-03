<?php

// Connection a la DB
//global $wpdb;


$host = "ls462055-001.dbaas.ovh.net";
$user = "Quentin";
$pass = "Quentin01";
$db = "testeQuentin";
$port = 35493;
$connection = mysqli_connect($host, $user, $pass, $db, $port);

$categorie = "SELECT `categorie` FROM `bdd_catalogue_2020_liste_formations` WHERE `ref`=\"$idTitle\"";
$resultcategorie = mysqli_query($connection, $categorie);

foreach ($resultcategorie as $row) {
    foreach ($row as $rows) {
        $rows = utf8_encode($rows);
        if ($rows === "Prévention - Hygiène - Sécurité") {
            $header = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/bleu-header.jpeg";
            $bandeau = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/bandeau-bleu.jpg";

            $pourcentColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/icone/pourcentBleu.png';
            $tarifColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/icone/tarifBleu.png';
            $financeursColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/icone/financeursBleu.png';
            $coutColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/icone/cout-complementaireBleu.png';
            $CPFColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/icone/CPFBleu.png';
            $nbreColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/icone/nbre-persBleu.png';
            $blocColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/icone/bloc-competencesBleu.png';
            $equivalenceColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/icone/equivalenceBleu.png';
            $passerelleColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/icone/passerelleBleu.png';

            $bandeauContact = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleu/contact-zoneBleu.png';

            $rHeader = 37;
            $gHeader = 179;
            $bHeader = 232;

            $rPresenta = 8;
            $gPresenta = 93;
            $bPresenta = 169;

            $rTextIcone = 28;
            $gTextIcone = 68;
            $bTextIcone = 131;

            $rProgramme = 120;
            $gProgramme = 198;
            $bProgramme = 215;

        }elseif ($rows === "Intervention sociale - Aide à la personne") {
            $header = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/violet-header.jpeg";
            $bandeau = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/bandeau-violet.jpg";

            $pourcentColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/icone/pourcentViolet.png';
            $tarifColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/icone/tarifViolet.png';
            $financeursColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/icone/financeursViolet.png';
            $coutColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/icone/cout-complementaireViolet.png';
            $CPFColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/icone/CPFViolet.png';
            $nbreColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/icone/nbre-persViolet.png';
            $blocColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/icone/bloc-competencesViolet.png';
            $equivalenceColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/icone/equivalenceViolet.png';
            $passerelleColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/icone/passerelleViolet.png';

            $bandeauContact = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/violet/contact-zoneViolet.png';
            $rHeader = 253;
            $gHeader = 31;
            $bHeader = 195;

            $rPresenta = 104;
            $gPresenta = 32;
            $bPresenta = 122;

            $rTextIcone = 115;
            $gTextIcone = 32;
            $bTextIcone = 123;

            $rProgramme = 237;
            $gProgramme = 119;
            $bProgramme = 186;

        }elseif ($rows === "Communication digitale" || "Bureautique" || "Numérique - Digital") {
            $header = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/vert-header.jpg";
            $bandeau = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/bandeau-vert.jpg";

            $pourcentColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/icone/pourcentVert.png';
            $tarifColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/icone/tarifVert.png';
            $financeursColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/icone/financeursVert.png';
            $coutColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/icone/cout-complementaireVert.png';
            $CPFColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/icone/CPFVert.png';
            $nbreColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/icone/nbre-persVert.png';
            $blocColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/icone/bloc-competencesVert.png';
            $equivalenceColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/icone/equivalenceVert.png';
            $passerelleColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/icone/passerelleVert.png';

            $bandeauContact = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/vert/contact-zoneVert.png';
            $rHeader = 137;
            $gHeader = 255;
            $bHeader = 0;

            $rPresenta = 86;
            $gPresenta = 149;
            $bPresenta = 18;

            $rTextIcone = 49;
            $gTextIcone = 93;
            $bTextIcone = 1;

            $rProgramme = 188;
            $gProgramme = 205;
            $bProgramme = 41;

        }elseif ($rows === "Communication" || "Management" || "Outils professionnels" || "Conseil - Accompagnement" || "Thématiques transversales" || "Ingenierie de formation") {
            $header = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/jaune-header.png";
            $bandeau = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/bandeau-jaune.jpg";

            $pourcentColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/icone/pourcentJaune.png';
            $tarifColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/icone/tarifJaune.png';
            $financeursColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/icone/financeursJaune.png';
            $coutColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/icone/cout-complementaireJaune.png';
            $CPFColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/icone/CPFJaune.png';
            $nbreColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/icone/nbre-persJaune.png';
            $blocColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/icone/bloc-competencesJaune.png';
            $equivalenceColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/icone/equivalenceJaune.png';
            $passerelleColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/icone/passerelleJaune.png';

            $bandeauContact = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/jaune/contact-zoneJaune.png';
            $rHeader = 255;
            $gHeader = 255;
            $bHeader = 0;

            $rPresenta = 245;
            $gPresenta = 164;
            $bPresenta = 39;

            $rTextIcone = 124;
            $gTextIcone = 75;
            $bTextIcone = 0;

            $rProgramme = 245;
            $gProgramme = 205;
            $bProgramme = 39;

        }elseif ($rows === "Personnes porteuses de handicap") {
            $header = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/bleuClaire-header.png";
            $bandeau = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/bandeau-bleuClaire.jpg";

            $pourcentColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/pourcentbleuClaire.png';
            $tarifColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/tarifbleuClaire.png';
            $financeursColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/financeursJbleuClaire.png';
            $coutColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/cout-complementairebleuClaire.png';
            $CPFColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/CPFbleuClaire.png';
            $nbreColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/nbre-persbleuClaire.png';
            $blocColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/bloc-competencesbleuClaire.png';
            $equivalenceColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/equivalencebleuClaire.png';
            $passerelleColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/passerellebleuClairebleuClaire.png';

            $bandeauContact = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/contact-zonebleuClaire.png';
            $rHeader = 0;
            $gHeader = 255;
            $bHeader = 196;

            $rPresenta = 29;
            $gPresenta = 147;
            $bPresenta = 134;

            $rTextIcone = 0;
            $gTextIcone = 80;
            $bTextIcone =71;

            $rProgramme = 25;
            $gProgramme = 216;
            $bProgramme = 208;

        }else {
            $header = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/bleuClaire-header.png";
            $bandeau = "/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/bandeau-bleuClaire.jpg";

            $pourcentColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/pourcentbleuClaire.png';
            $tarifColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/tarifbleuClaire.png';
            $financeursColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/financeursJbleuClaire.png';
            $coutColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/cout-complementairebleuClaire.png';
            $CPFColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/CPFbleuClaire.png';
            $nbreColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/nbre-persbleuClaire.png';
            $blocColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/bloc-competencesbleuClaire.png';
            $equivalenceColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/equivalencebleuClaire.png';
            $passerelleColor = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/icone/passerellebleuClairebleuClaire.png';

            $bandeauContact = '/home/adeaformis/www/wp-content/plugins/PDF_ADEA/img/bleuClaire/contact-zonebleuClaire.png';
            $rHeader = 0;
            $gHeader = 255;
            $bHeader = 196;

            $rPresenta = 29;
            $gPresenta = 147;
            $bPresenta = 134;

            $rTextIcone = 0;
            $gTextIcone = 80;
            $bTextIcone =71;

            $rProgramme = 25;
            $gProgramme = 216;
            $bProgramme = 208;
        }
    }
}