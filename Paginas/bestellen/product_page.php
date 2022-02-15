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

            <?php echo $_GET['groente'];?>
            
            <?php
                if ($result->num_rows > 0) {

                    foreach ($result as $row) {
                        echo  "<option value='$row[naam]'>"; // Voegt optie toe per item in db
                    }
                } 
                else {
                    echo "Foutmelding";
                }

                echo "</datalist><br><br>";
              $con->close();
            ?>

            <input type="submit" id="submit" value="Voeg toe aan winkelwagen">

        </form>

        </div>
    </div>
</div>

</body>

</html>