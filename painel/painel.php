<?php

  if (isset($_GET['loggout'])) {
    session_destroy();
    header('Location: '.INCLUDE_PATH_PAINEL);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>/css/style.css">
  <title>Painel de Controle</title>
</head>
<body>
  <header class="header">
    <p>Seja bem vindo <?php echo $_SESSION['user-painel'] ?></p>
    <a href="<?php echo INCLUDE_PATH_PAINEL; ?>?loggout">
      Sair
    </a>
  </header>
  <section class="container">
    <aside class="sidebar">
        <a href="<?php echo INCLUDE_PATH_PAINEL; ?>">Início</a>
        <a href="<?php echo INCLUDE_PATH_PAINEL; ?>editar-hero">Editar Hero</a>
    </aside>
    <div class="content">
      <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        if (file_exists('pages/'.$url.'.php')) {
          include('pages/'.$url.'.php');
        } else {
          include('pages/home.php');
        }
      ?>
    </div>
  </section>

  <script src="<?php echo INCLUDE_PATH ?>js/jquery.min.js"></script>
  <script type="module" src="<?php echo INCLUDE_PATH_PAINEL ?>js/index.js"></script>
</body>
</html>