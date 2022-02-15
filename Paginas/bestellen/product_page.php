<!DOCTYPE html>

<html>
    <head>
        <title>Groenten Gerard</title>
        <link rel="stylesheet" type="text/css" href="/gip/Css/style.css" />
        <link rel="stylesheet" type="text/css" href="/gip/Css/bestelform.css" />
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <div class=flexbox-container>
        <div id ="content" class="flexbox-content">
            
        <form class="bestelling" action="winkelwagen.php" method="post">
            <?php
                require("D:/xampp/htdocs/GIP/sqlconfig/config.php");
                $sql="SELECT * FROM groenten";  // Query to collect records
                $result = $con->query($sql);
            ?>

            <?php echo $_GET['groente'].", Prijs per kilo: ".$_GET['prijsperkilo'];?><br>
            <label>Hoeveelheid (KG):</label>
            <input type="number" id="hoeveelheid" name="hoeveelheid">

            <input type="submit" id="submit" value="Volgende">

        </form>

        </div>
    </div>
</div>

</body>

</html>