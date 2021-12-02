<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1 "> <!-- Malo istotne poki co linki -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
      <div class = "jumbotron main"> Wypozyczalnia Samochodow </div> <!-- stylizacja-->
        <div class="row"> <!-- podzial ekranu-->
            <div class ="col-md-3 col-sm-2 col-xs-2"> <!--podzial ekranu-->
            </div>
            <div class ="col-md-6 col-sm-4 col-xs-4"> <!-- podzial ekranu -->
                <div class="list">  <!-- stylizacja-->
                    Przejdź do listy samochodów
                </div>
            </div>
            <div class="padding-15 col-md-2 col-sm-3 col-xs-3"> <!--  podzial ekranu-->
             <form action="zaloguj.php" method="post"> <!--  Wysyla do pliku zaloguj.php wartosci z pola login i haslo-->
              <div class="form-login"> <!--  stylizacja-->
               <h4>Zaloguj się</h4> <!-- wystylizowany naglowek-->
               <input type="text" name="login" class="form-control input-sm chat-input" placeholder="login" /> <!--  wystylizowane pole do wpisywania loginu ktory potem wysylamy-->
               <br/>
               <input type="password" name="password" class="form-control input-sm chat-input" placeholder="hasło" /><!-- wystylizowane pole do wpisywania hasla ktore potem wysylamy-->
               <br/>
               <div class="wrapper">  <!--  stylizacja-->
                 <input type = "submit" class="btn btn-primary btn-md" value = "Zaloguj sie" /> <!--  wystylizowany przycisk ktory zatwierdza wysylanie do pliku zaloguj.php     -->      
              </div>
              </div>
             </form>
            </div>

        </div>

  </body>
</html>