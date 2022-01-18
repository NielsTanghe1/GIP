<!DOCTYPE html>

<html>
    <head>
        <title>Groenten Gerard</title>
        <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/Perry01/GIP/main/Css/style.css" />
        <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/Perry01/GIP/main/Css/scrollbutton.css" />
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://raw.githubusercontent.com/Perry01/GIP/main/JS/clickscript.js"></script>

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
        
            <p id=Titel> TEST </p>
            

        </div>
    </div>
</div>

</body>

</html>