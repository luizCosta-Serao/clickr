<?php
  include('../config.php');
  header('Content-Type: application/json');

  $user = $_GET['user'];
  $password = $_GET['password'];

  $sql = MySql::connect()->prepare("SELECT * FROM `usuarios_admin` WHERE user = ? AND password = ?");
  $sql->execute(array($user, $password));
  if ($sql->rowCount() === 1) {
    $_SESSION['login-painel'] = true;
    $_SESSION['user-painel'] = $user;
    $_SESSION['password-painel'] = $password;
    echo 'true';
  } else {
    echo 'false';
  }

?>