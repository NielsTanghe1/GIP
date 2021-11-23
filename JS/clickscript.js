
          var groente;

          function reply_click(clicked_id){
            groente = clicked_id;
            console.log(groente)
            $("#content").load("https://raw.githubusercontent.com/Perry01/GIP/main/Aanbod%20HTML/" + groente + ".html");
          }