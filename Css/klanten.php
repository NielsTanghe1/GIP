  <!DOCTYPE html>
<html>


    <head>
        <title>Groenten Gerard</title>
        <link rel="stylesheet" type="text/css" href="css\style.css" />
        <link rel="stylesheet" type="text/css" href="css\header.css" />
        <link rel="stylesheet" type="text/css" href="css\klantengallerij.css" />
        <link rel="stylesheet" type="text/css" href="css\scrollbutton.css" />
        <link rel="stylesheet" type="text/css" href="css\login.css"/>
    
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="JS/scrollknop.js"></script>

<body>
    
    <div class=flexbox-container>
        <section class="header">
            <h1>Groentenboer Gerard</h1>
            <p class=quote>"Recht uit de grond, een plezier voor uw mond"</p>
        </section>
    
        <ul>
          <li><a class="navbuttons" href="index.php">Home</a></li>
          <li><a class="navbuttons" href="aanbod.php">Aanbod</a></li>
          <li><a class="navbuttons" href="klanten.php">Klanten</a></li>
          <li><a class="navbuttons" href="contact.html">Contact</a></li>
          <li><a class="navbuttons" href="loginsysteem/logout.php">Uitloggen</a></li>          
        </ul>  

        
        <div id="id01" class="modal">
          <form class="modal-content animate" action="/action_page.php" method="post">
              <div class="imgcontainer">
               <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
               <img src="Afbeeldingen/Avatar.PNG" alt="Avatar" class="avatar">
             </div>
        
             <div class="logincontainer">
                <label for="uname"><b>Gebruikersnaam</b></label>
                <input type="text" placeholder="Vul hier je gebruikersnaam in..." name="uname" required>
        
                <label for="psw"><b>Wachtwoord</b></label>
                <input type="password" placeholder="Vul hier je wachtwoord in..." name="psw" required>
                
                <button type="submit" class="loginbutton">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Onthouden
                </label>
             </div>
        
             <div class="container" style="background-color:#f1f1f1">
               <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuleer</button>
               <button type="button" onclick="document.getElementById('id01').style.display='none'" class="forgotbtn">Wachtwoord vergeten?</button>
              </div>
          </form>
        </div>
       
          
          <div class="gallerij">
            <div id="customergallery">
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
            
              $sql = "SELECT naam FROM klanten";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  echo <<<EOD
                  <div class="container">
                  <img src="Afbeeldingen/Klanten Afbeeldingen/$row[naam].png" alt="$row[naam]" class="image">
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
    

</body>

</html>