<form class="form-fotos" id="form-fotos" action="" method="post" enctype="multipart/form-data">
  <h2>Adicionar Foto</h2>

  <select name="categorias" id="categorias">
    <?php
      $sql = MySql::connect()->prepare("SELECT * FROM `categorias`");
      $sql->execute();
      $categorias = $sql->fetchAll();
      foreach ($categorias as $key => $value) {
    ?>
      <option value="<?php echo $value['slug'] ?>"><?php echo $value['nome'] ?></option>
    <?php } ?>
  </select>

  <label for="foto">Foto</label>
  <input type="file" name="foto" id="foto">

  <input type="submit" name="adicionar-foto" value="Adicionar Foto">
</form>