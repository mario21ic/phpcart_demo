<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
  <fieldset>
  <input type="hidden" name="id" value="<?php echo @$item->id ?>" />
  <div class="control-group">
    <label class="control-label" for="nombres">Nombres:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="nombres" id="nombres" type="text" placeholder="Nombres" value="<?php echo @$item->nombres ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="apellidos">Apellidos:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="apellidos" id="apellidos" type="text" placeholder="Apellidos" value="<?php echo @$item->apellidos ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="email">Email:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="email" id="email" type="text" placeholder="Correo electronico" value="<?php echo @$item->email ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="telefono">Telefono:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="telefono" id="telefono" type="text" placeholder="051-32321" value="<?php echo @$item->telefono ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-primary"><?php echo $action ?></button>
    <button class="btn">Cancelar</button>
  </div>
  <fieldset>
</form>
