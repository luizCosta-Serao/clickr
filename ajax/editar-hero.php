<?php

  include('../config.php');

  $titulo_hero = $_POST['titulo-hero'];
  $descricao_hero = $_POST['descricao-hero'];
  $botao_hero = $_POST['botao-hero'];
  $nova_foto = $_FILES['nova-foto'];
  echo print_r($nova_foto);
  if (
    $titulo_hero !== '' &&
    $descricao_hero !== '' &&
    $botao_hero !== ''
  ) {
    $sql = MySql::connect()->prepare("UPDATE `conteudo-site` SET titulo_hero = ?, descricao_hero = ?, botao_hero = ? WHERE id = ?");
    $sql->execute(array($titulo_hero, $descricao_hero, $botao_hero, 1));
  
    if ($nova_foto['size'] !== 0 && Painel::imagemValida($nova_foto)) {
      $nome_imagem = Painel::uploadFile($nova_foto);
      $sql = MySql::connect()->prepare("INSERT INTO `imagens` VALUES (null, ?)");
      $sql->execute(array($nome_imagem));
    }

    echo 'Hero editado com sucesso';
  } 

?>