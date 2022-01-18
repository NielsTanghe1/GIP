<!DOCTYPE html>

<html>
    <head>
        <title>Groenten Gerard</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/css/header.css" />
        <link rel="stylesheet" type="text/css" href="/css/scrollbutton.css" />
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(function(){
            $('a').each(function(){
                if ($(this).prop('href') == window.location.href) {
                    $(this).addClass('active'); $(this).parents('li').addClass('active');
                }
            });
        });
    </script>

<body>
    <div class=flexbox-container>
        <div class="flexbox-content">
        
            <?php

            echo "<h3>Koop hier je groente.</h3>";

            ?>
            

        </div>
    </div>
</div>

</body>

</html>