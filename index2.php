<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Comic+Neue&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Boolfy</title>
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="img/logo.png" alt="logo-spotify">
      </div>
    </header>
      <div class="container-fullwidth">
        <main>



        </main>
      </div>
      <!-- script di handlebars -->

        <script id="entry-template" type="text/x-handlebars-template">
          <div class="card">
            <div class="album-img">
                <img src="{{albumCover}}" alt="">
              </div>
              <div class="descrizione">
                <p>{{albumtitle}}</p>
                <p>{{artistname}}</p>
                <p>{{year}}</p>
              </div>
            </div>  
        </script>

  <script src="dist/js/main.js" charset="utf-8"></script>
  </body>
</html>
