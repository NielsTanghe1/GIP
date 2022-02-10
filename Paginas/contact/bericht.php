<link rel="stylesheet" type="text/css" href="../Css/bericht.css" />


<?php
    require('../sqlconfig/config.php');
    session_start();
  

    $inhoud = $_POST['inhoud'];
    $klantid = $_SESSION['id'];
    $klant = $_SESSION['username'];
    $onderwerp = $_POST['onderwerp'];

    

      if(isset($_POST['submit'])){    
     
         $sql = "INSERT INTO berichten (inhoud, klantid, klant, onderwerp)
                  VALUES ('$inhoud', '$klantid', '$klant', '$onderwerp')";

         if (mysqli_query($con, $sql)) {
            ?>

            <div class="center">
            <h2>Bericht is succesvol verzonden!</h2>
            <button  type="button" class="button"  onclick="window.location.href='../index.php'">Terug naar website</button>
            </div>

            <?php
            

        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($con);
         }
      }

?>