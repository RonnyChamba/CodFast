<!DOCTYPE html>
<html lang="es-EC">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://file.myfontastic.com/JUwFAwWE8oUWFGdiTZSWaX/icons.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="asserts/css/normalize.css" />
    <link rel="stylesheet" href="asserts/css/styles.css" />
    <title>Codfast</title>
    <link rel="icon" type="image/png" href="./asserts/img/logo.png" />
  </head>
  <body>
    <div class="container-main">
      <header class="header">
        <div class="container container--header">
          <div class="logo">
            <img src="./asserts/img/logo.png" alt="logo" class="logo__icono" />
            <h1 class="logo__title" id ="title-js">CodFast</h1>
          </div>

          <div class="redes_sociales">
            <span class="icon-facebook" title="Facebook"></span>
            <span class="icon-mail" title="Email"></span>
            <span class="icon-phone" title="Teléfono"> </span>
          </div>
        </div>
      </header>

      <main class="main">
        <div class="busqueda">
          <input
            type="search"
            placeholder="Escribe algo..."
            class="busqueda__input"
            id="busqueda-js"
          />
        </div>
        <div class="cards">
          <?php
          include("card/StreamFiltrarString.php");
          include("card/CardConvertirListaEnteros.php");
          include("card/CardContarListaEnteros.php");
          include("card/CardOrdenarElementosLista.php");
          include("card/CardOrdenarElementosListaComparator.php");
        
          

          ?>
        </div>
      </main>
      <footer class="footer">
        <p>Ronny Chamba &copy; 2021</p>
      </footer>
    </div>
    <script src="asserts/script/script.js" type="module"></script>
  </body>
</html>
