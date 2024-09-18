<form class="editar-hero" id="editar-hero" action="<?php echo INCLUDE_PATH ?>ajax/editar-hero.php" method="post" enctype="multipart/form-data">
  <?php
    $sql = MySql::connect()->prepare("SELECT * FROM `conteudo-site`");
    $sql->execute();
    $conteudo_site = $sql->fetch();
  ?>
  <h2>Hero</h2>
  <label for="">Título do Hero</label>
  <input type="text" name="titulo-hero" id="titulo-hero" value="<?php echo $conteudo_site['titulo_hero'] ?>">

  <label for="">Descrição do Hero</label>
  <textarea type="text" name="descricao-hero" id="descricao-hero"><?php echo $conteudo_site['descricao_hero'] ?></textarea>

  <label for="">Botão do Hero</label>
  <input type="text" name="botao-hero" id="botao-hero" value="<?php echo $conteudo_site['botao_hero'] ?>">

  <h2>Adicionar Nova Foto</h2>
  
  <label for="nova-foto">Nova Foto</label>
  <input type="file" name="nova-foto" id="nova-foto">

  <input type="submit" value="Atualizar" id="atualizar-site">
</form>
