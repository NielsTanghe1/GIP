
<div class=flexbox-container>
    <div id ="content" class="flexbox-content">
            
        <form class="bestelling" action="winkelwagen.php" method="post">
            <?php
                require("D:/xampp/htdocs/GIP/sqlconfig/config.php");
                $sql="SELECT prijsperkilo FROM groenten WHERE naam = $_GET[groente]";  // Query to collect records
                $result = $con->query($sql);
            ?>

            <?php 
                $prijs = $_POST['hoeveelheid'] * $result;
                echo "Prijs = ".$prijs;
            ?>
            <label>Hoeveelheid (KG):</label>
            <input type="number" id="hoeveelheid" name="hoeveelheid">

            <input type="submit" id="submit" value="Volgende">

        </form>

    </div>
</div>
