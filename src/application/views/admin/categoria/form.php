<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
  <fieldset>
  <input type="hidden" name="id" value="<?php echo @$item->id ?>" />
  <div class="control-group">
    <label class="control-label" for="nombre">Nombre:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="nombre" id="nombre" type="text" placeholder="Nombre" value="<?php echo @$item->nombre ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="categoria">Categoria:</label>
    <div class="controls">
      <select class="input-xlarge" name="categoria" id="categoria">
        <option value="0">--</option>
        <?php foreach($categorias as $cat): ?>
        <option value="<?php echo $cat->id ?>"><?php echo $cat->nombre ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="resumen">Resumen:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="resumen" id="resumen" type="text" placeholder="Descripcion" value="<?php echo @$item->resumen ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-primary"><?php echo $action ?></button>
    <button class="btn">Cancelar</button>
  </div>
  <fieldset>
</form>
