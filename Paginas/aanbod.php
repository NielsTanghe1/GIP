<!DOCTYPE html>
<html>


  <head>
    <title>Aanbod - Groenten Gerard</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/header.css" />
    <link rel="stylesheet" type="text/css" href="../css/aanbodgallerij.css" />
    <link rel="stylesheet" type="text/css" href="../css/scrollbutton.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css"/>

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="../JS/clickscript.js"></script>
    <script src="../JS/scrollknop.js"></script>

    <!--Header-->
    <?php include('../html_elements/header.html'); ?>
  </head>

  <body>
    <div class=flexbox-container>
      <div id="content" class="gallerij">
        <div id="gallery">
          <?php
            require('../sqlconfig/config.php');

          
            $sql = "SELECT naam FROM groenten";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo <<<EOD
                <div id='$row[naam]' onClick="reply_click(this.id)" type="button" class="container" >
                <img src="../Afbeeldingen/Aanbod groenten afbeeldingen/$row[naam].jfif" alt="$row[naam]" class="image">
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