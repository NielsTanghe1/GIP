<!DOCTYPE html>

  <?php
    //Start sessie
    session_start();
    
    // Als geen login is gedetecteerd, redirect terug naar de login-pagina
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: loginsysteem/login.php");
        exit;
    }
  ?>

<html>
  <head>
        <title>Contact - Groenten Gerard</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/header.css" />
        <link rel="stylesheet" type="text/css" href="css/scrollbutton.css" />
        <link rel="stylesheet" type="text/css" href="css/login.css"/>
        <link rel="stylesheet" type="text/css" href="css/contactform.css"/>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="JS/scrollknop.js"></script>
        <script src="JS/Loginmenu.js"></script>

        <!--Header-->
        <?php include('html_elements/header.html'); ?>
  </head>

  <body>
    <div class=flexbox-container>
      <div class="flexbox-content">
        <?php echo $_SESSION['username']." user id: ".$_SESSION['id']; ?>
      </div>
    </div>
    
    <!--Footer-->
    <?php include('html_elements/footer.html'); ?>
  </body>

</html>