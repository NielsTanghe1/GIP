<!DOCTYPE html>
<html>

  <head>
    <title>Contact - Groenten Gerard</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../css/header.css" />
    <link rel="stylesheet" type="text/css" href="../../css/scrollbutton.css" />
    <link rel="stylesheet" type="text/css" href="../../css/login.css"/>
    <link rel="stylesheet" type="text/css" href="../../css/contactform.css"/>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../JS/scrollknop.js"></script>

    <!--Header-->
    <?php include('../../html_elements/header.html'); ?>
  </head>

  <body>
    <div class=flexbox-container>
      <div class="flexbox-content">
        <div  id="content" class=flexbox-paragraph>

          <div class=titelp>
            <h1>Contacteer mij</h1>
          </div>

          <div class=paragraph-text>
            <p> Als u graag contact met mij wilt opnemen kan dat via deze webpagina.<br>
              Vul het volgende formulier in en duw op 'Submit'. Ik antwoord binnen de 2 werkdagen.<br>
              Indien u dit verkiest kan u ook contact opnemen met mij door te bellen of mailen. <br>
              U vind mijnt contactgegevens onderaan de pagina.<br></p>
          </div>

          <div  id="content" class=flexbox-paragraph style="margin-top: 60px;">
            <div class=titelp>
              <h2>Contactgegevens:</h2>
            </div>
            <div class=paragraph-text>
              <p>
                - Email:  Boeregerard@gmail.com<br>
                - Tel:    +32 12 34 56<br>
                - Adres:  <a class="link" href="https://www.google.be/maps/@51.0064502,2.9068301,495m/data=!3m1!1e3!5m1!1e4">Boerendreef 123 Boerenbeek</a><br>
              </p>
            </div>
          </div>
        </div>
        <div class="contactcontainer">
              <form action="bericht.php" method="POST">
                <h2>Contactformulier:</h2>

                <label for="onderwerp">Reden</label>
                  <select id="onderwerp" name="onderwerp" required>
                    <option value="klacht">Ik heb een klacht</option>
                    <option value="vraag">Ik heb een vraag</option>
                    <option value="andere">Andere</option>
                  </select>
            
                <label for="inhoud">Onderwerp</label>
                  <textarea id="inhoud" name="inhoud" placeholder="Schijf hier je bericht" style="height:200px"></textarea>
            
                <input type="submit" name="submit" id="submit" value="Verzenden">
              </form>
          </div>
      </div>
      <!--Footer-->
      <?php include('../../html_elements/footer.html'); ?>
    </div>

</body>

</html>