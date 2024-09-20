<?php

  include('../config.php');

  $nome_categoria = $_POST['nome_categoria'];

  function generateSlug($str) {
    $str = mb_strtolower($str);
    $str = preg_replace('/(â|á|ã)/', 'a', $str);
    $str = preg_replace('/(ê|é)/', 'e', $str);
    $str = preg_replace('/(í|Í)/', 'i', $str);
    $str = preg_replace('/(ú)/', 'u', $str);
    $str = preg_replace('/(ó|ô|õ|Ô)/', 'o', $str);
    $str = preg_replace('/(_|\/|!|\?|#)/', '', $str);
    $str = preg_replace('/( )/', '-', $str);
    $str = preg_replace('/ç/', 'c', $str);
    $str = preg_replace('/(-[-]{1,})/', '-', $str);
    $str = preg_replace('/(,)/', '-', $str);
    $str = strtolower($str);
    return $str;
  }
  
  if (
    $nome_categoria !== ''
  ) {
    $slug = generateSlug($nome_categoria);
    $sql = MySql::connect()->prepare("INSERT INTO `categorias` VALUES (null, ?, ?)");
    $sql->execute(array($nome_categoria, $slug));
  } 

?>