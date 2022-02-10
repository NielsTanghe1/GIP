<?php

    require("D:/xampp/htdocs/GIP/sqlconfig/config.php");

    $hoeveelheidww = array();
    $groentenww = array();

    $hoeveelheid = $_POST['hoeveelheid'];
    $groente = $_POST['groente'];


    array_push($hoeveelheidww, $hoeveelheid);
    array_push($groentenww, $groente);


    $bestelling = array_combine($hoeveelheidww, $groentenww);

    print_r($bestelling);

?>
