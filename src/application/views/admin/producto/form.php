<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
  <fieldset>
  <input type="hidden" name="id" value="<?php echo @$item->id ?>" />
  <div class="control-group">
    <label class="control-label" for="nombre">Nombre:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="nombre" id="username" type="text" placeholder="nombre" value="<?php echo @$item->nombre ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="categoria">Padre:</label>
    <div class="controls">
      <select name="categoria" id="categoria">
        <option value="0">--</option>
        <?php foreach($categorias as $cat): ?>
        <option value="<?php echo $cat->id ?>"><?php echo $cat->nombre ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="foto">Foto:</label>
    <div class="controls">
    <?php if(isset($item->foto) && $item->foto!=null): ?>
      <img src="/img/<?php echo $item->foto ?>" height="100" width="200" /><br />
    <?php endif ?>
      <input class="input-xlarge focused" name="foto" id="foto" type="file" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="precio">Precio:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="precio" id="precio" type="text" placeholder="10.00" value="<?php echo @$item->precio ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="resumen">Resumen:</label>
    <div class="controls">
      <textarea class="input-xlarge focused" name="resumen" id="resumen" type="text"><?php echo @$item->resumen ?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="resumen">Descripcion:</label>
    <div class="controls">
      <textarea class="input-xlarge focused" name="descripcion" id="descripcion" type="text"><?php echo @$item->descripcion ?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="activo">Activo:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="activo" id="activo" type="checkbox"/>
    </div>
  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-primary"><?php echo $action ?></button>
    <button class="btn">Cancelar</button>
  </div>
  <fieldset>
</form>
