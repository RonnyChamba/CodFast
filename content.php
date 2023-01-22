<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="asserts/css/content.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Codfast | Content</title>
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

            <a href="https://github.com/RonnyChamba" target="_blank" class="icon-">
            <i class="fa-brands fa-github"></i>
            </a>

            <a href="https://www.linkedin.com/in/ronny-chamba-8273911b7/" target="_blank" class="icon-">
            <i class="fa-brands fa-linkedin"></i>
            </a>
          </div>
        </div>
      </header>
      <main class="main">
        <div class="cards">
          <?php
            include (($_GET['nombre']));

          ?>
          
          <div class="botones">
            <a href="index.php">Regresar</a>
          </div>
        </div>
      </main>
      <footer class="footer">
        <p>Ronny Chamba &copy; 2021</p>
      </footer>
    </div>
     <script src="asserts/script/script.js" type="module"></script>
  </body>
</html>
