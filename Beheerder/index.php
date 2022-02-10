<!DOCTYPE html>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginsysteem/login.php");
    exit;
}
?>

<html>

    <head>
        <title>Welkom - Groenten Gerard</title>
        <link rel="stylesheet" type="text/css" href="/gip/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/gip/css/header.css" />
        <link rel="stylesheet" type="text/css" href="/gip/css/scrollbutton.css" />
        <link rel="stylesheet" type="text/css" href="/gip/css/login.css"/>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="JS/scrollknop.js"></script>
        <script src="JS/Loginmenu.js"></script>


<body>

<div class=flexbox-container>

    <section class="header">
       
        
        <h1>Groentenboer Gerard</h1>
        <p class=quote>"Recht uit de grond, een plezier voor uw mond"</p>
        
        
    </section>

    <ul>
      <li><a class="navbuttons" href="Stock.php">Stock</a></li>
      <li><a class="navbuttons" href="Bestellingen.php">Bestellingen</a></li>
    </ul>

  <div class="flexbox-content">
    
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