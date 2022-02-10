<!DOCTYPE html>
<html>


    <head>
        <title>Aanbod - Groenten Gerard</title>
        <link rel="stylesheet" type="text/css" href="css\style.css" />
        <link rel="stylesheet" type="text/css" href="css\header.css" />
        <link rel="stylesheet" type="text/css" href="css\aanbodgallerij.css" />
        <link rel="stylesheet" type="text/css" href="css\scrollbutton.css" />
        <link rel="stylesheet" type="text/css" href="css\login.css"/>
    
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="JS\clickscript.js"></script>

        <!--Dit script zorgt voor de terugscrollknop-->
        <script src="JS/scrollknop.js"></script>

<body>
    
    <div class=flexbox-container>
      <div class="top">
        <section class="header">
            <h1>Groentenboer Gerard</h1>
            <p class=quote>"Recht uit de grond, een plezier voor uw mond"</p>
        </section>
    
        <ul>
          <li><a class="navbuttons" href="index.php">Home</a></li>
          <li><a class="navbuttons" href="aanbod.php  ">Aanbod</a></li>
          <li><a class="navbuttons" href="klanten.php">Klanten</a></li>
          <li><a class="navbuttons" href="contact.html">Contact</a></li>
          <li><a class="navbuttons" href="loginsysteem/logout.php">Uitloggen</a></li>
        </ul>
      </div>

    <div id="content" class="gallerij">
      <div id="gallery">
 
        <?php

          $servername = "localhost"; 
          $username = "root"; 
          $password = ""; 
          $dbname = "gip"; 
          
          // Create connection 
          $conn = mysqli_connect($servername, $username, $password, $dbname); 
          // Check connection 
          if (!$conn) { 
              die("Connection failed: " . mysqli_connect_error()); 
          } 
        
          $sql = "SELECT naam FROM groenten";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each r  ow
            while($row = $result->fetch_assoc()) {
              echo <<<EOD
              <div id='$row[naam]' onClick="reply_click(this.id)" type="button" class="container" >
               <img src="Afbeeldingen\Aanbod groenten afbeeldingen/$row[naam].jfif" alt="$row[naam]" class="image">
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
          $conn->close();
        ?>
    </div>
  </div>


  <button onclick="topFunction()" id="myBtn" title="Go to top">Naar boven</button>
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>

        <div class="footer">
            <p>Deze website is de GIP van Niels Tanghe, 6IB</p>
        </div>
    </div>

</body>

</html>