<?php

  include('../config.php');

  $categoria = $_POST['categorias'];
  $foto = $_FILES['foto'];
  echo $categoria;
  echo $foto;

  if ($foto['size'] !== 0 && Painel::imagemValida($foto)) {
    $foto = Painel::uploadFile($foto);
    $sql = MySql::connect()->prepare("INSERT INTO `imagens` VALUES (null, ?, ?)");
    $sql->execute(array($foto, $categoria));

  }

?>