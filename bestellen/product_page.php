<!DOCTYPE html>

<html>
    <head>
        <title>Groenten Gerard</title>
        <link rel="stylesheet" type="text/css" href="/gip/Css/style.css" />
        <link rel="stylesheet" type="text/css" href="bestelform.css" />
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <div class=flexbox-container>
        <div class="flexbox-content">
            
        <form class="bestelling" action="winkelwagen.php" method="post">
            <?php

               require("D:/xampp/htdocs/GIP/sqlconfig/config.php");

                $sql="SELECT naam FROM groenten";  // Query to collect records
                $result = $con->query($sql);
               
                echo <<<EOD
                Selecteer groente: 
                <input list="groenten" id="groenten "required>
                <datalist id="groente">
                EOD;

                if ($result->num_rows > 0) {

                    foreach ($result as $row) {
                        echo  "<option value='$row[naam]'/>"; // Format for adding options 
                    }
                } 
                else {
                    echo "Foutmelding";
                }
                
                echo "</datalist><br><br>";
                
                $con->close();

            ?>

            Hoeveelheid: <input type="number" id="hoeveelheid" min="1" max="5" required>

            <input type="submit" value="Voeg toe aan winkelwagen">

        </form>

        </div>
    </div>
</div>

</body>

</html>