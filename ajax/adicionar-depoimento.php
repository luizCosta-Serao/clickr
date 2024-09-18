<?php

  include('../config.php');

  $nome = $_POST['nome'];
  $profissao = $_POST['profissao'];
  $depoimento = $_POST['depoimento'];
  $foto_pessoa = $_FILES['foto-pessoa'];
  
  if (
    $nome !== '' &&
    $profissao !== '' &&
    $depoimento !== ''
  ) {
    if ($foto_pessoa['size'] !== 0 && Painel::imagemValida($foto_pessoa)) {
      $foto = Painel::uploadFile($foto_pessoa);
      $sql = MySql::connect()->prepare("INSERT INTO `depoimentos` VALUES (null, ?, ?, ?, ?)");
      $sql->execute(array($nome, $profissao, $depoimento, $foto));

    }

    echo 'Depoimento adicionado com sucesso';
  } 

?>