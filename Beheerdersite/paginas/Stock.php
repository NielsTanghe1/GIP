<!DOCTYPE html>

<html>

  <head>
        <title>Welkom - Groenten Gerard</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/header.css" />
        <link rel="stylesheet" type="text/css" href="../css/scrollbutton.css" />
        <link rel="stylesheet" type="text/css" href="../css/login.css"/>
		<link rel="stylesheet" type="text/css" href="../Css/stocktabel.css" />

        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="JS/scrollknop.js"></script>
        <script src="JS/Loginmenu.js"></script>

        <section class="header">
          <h1>Groentenboer Gerard</h1>
          <p class=quote>"Recht uit de grond, een plezier voor uw mond"</p>
        </section>

        <ul>
			<li><a class="navbuttons" href="index.php">Home</a></li>
          	<li><a class="navbuttons" href="bestellingen.php">Bestellingen</a></li>
          	<li><a class="navbuttons" href="berichten.php">Berichten</a></li>
          	<li><a class="navbuttons" href="stock.php">Stock</a></li>
         	<li><a class="navbuttons" href="gebruikers.php">Gebruikers</a></li>
         	 <li><a class="navbuttons" href="../loginsysteem/logout.php">Uitloggen</a></li>
        </ul>
    </head>
      
<body>
<div class=flexbox-container>

    

  <div class="flexbox-content">
      <?php
        /* connect to the db */
        require("D:/xampp/htdocs/GIP/sqlconfig/config.php");

        /* show tables */
          $sql = "SELECT * FROM groenten";
            $result = mysqli_query($con, $sql) or die('error');

          echo '<table class="stock">';

          $i = 0;
          while($row = $result->fetch_assoc())
          {
            if ($i == 0) {
            $i++;
            echo "<tr>";
            foreach ($row as $key => $value) {
              echo "<th>" . $key . "</th>";
            }
            echo "</tr>";
            }
            echo "<tr>";
            foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
          }
          echo "</table>";
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