<?php
define('DBSERVER', 'localhost'); // Database server
define('DBUSERNAME', 'root'); // Database gebruiker
define('DBPASSWORD', ''); // Database wachtwoord
define('DBNAME', 'gip'); // Database naam
 
/* connect to MySQL database */
$con = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);
 
// Check db connection
if($con === false){
    die("Error: connection error. " . mysqli_connect_error());
}
?>