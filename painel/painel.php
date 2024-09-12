<?php

  if (isset($_GET['loggout'])) {
    session_destroy();
    header('Location: '.INCLUDE_PATH_PAINEL);
  }

?>

<a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout">Loggout</a>
estou np painel