<?php

    require("D:/xampp/htdocs/GIP/sqlconfig/config.php");

    $hoeveelheidww = array();
    $groentenww = array();

    array_push($hoeveelheidww, $_POST['hoeveelheid']);
    array_push($groentenww, $_POST['groenten']);


    $bestelling = array_combine($hoeveelheidww, $groentenww);

    print_r($bestelling);

?>
