<?php

  include('../config.php');

  if (isset($_SESSION['login-painel']) === false) {
    include('login.php');
  } else {
    include('painel.php');
  }

?>