<!DOCTYPE html>
<html>


  <head>
    <title>Klanten - Groenten Gerard</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/header.css" />
    <link rel="stylesheet" type="text/css" href="../css/klantengallerij.css" />
    <link rel="stylesheet" type="text/css" href="../css/scrollbutton.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css"/>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="../JS/scrollknop.js"></script>

    <!--Header-->
    <?php include('../html_elements/header.html'); ?>
  </head>

  <body> 
    <div class=flexbox-container>
      <div class="gallerij">
        <div id="customergallery">
          <?php
            require('../sqlconfig/config.php');
          
            $sql = "SELECT naam FROM klanten";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo <<<EOD
                <div class="container">
                <img src="../Afbeeldingen/Klanten Afbeeldingen/$row[naam].png" alt="$row[naam]" class="image">
                <div class="overlay">
                <div class="text">$row[naam]</div>
                </div>
                </div>
                EOD;
              }
            } 
            else {
              echo "Foutmelding";
            }
            $con->close();
          ?>
        </div>
      </div>
    </div>
    <!--Footer-->
    <?php include('../html_elements/footer.html'); ?>
  </body>
</html>