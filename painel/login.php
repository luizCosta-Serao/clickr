<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>/css/style.css">
  <title>Login - Painel de Controle</title>
</head>
<body>
  <section class="login-painel">
    <form action="" method="get">
      <label for="user">User</label>
      <input type="text" name="user" id="user" required>
  
      <label for="password">Password</label>
      <input type="password" name="password" id="password">

      <input type="submit" name="login" id="login" value="Login">
    </form>
  </section>

  <script src="<?php echo INCLUDE_PATH ?>js/jquery.min.js"></script>
  <script type="module" src="<?php echo INCLUDE_PATH_PAINEL ?>js/index.js"></script>
</body>
</html>