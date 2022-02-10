<?php

/* connect to the db */
require("D:/xampp/htdocs/GIP/sqlconfig/config.php");

/* show tables */
	$sql = "SELECT * FROM groenten";
    $result = mysqli_query($con, $sql) or die('error');

    while($row = $result->fetch_assoc()) {

	print_r($row);

	}

	

?>