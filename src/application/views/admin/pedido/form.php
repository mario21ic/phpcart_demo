<legend><?php echo $action ?> Pedido</legend>
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
  <fieldset>
  <input type="hidden" name="id" value="<?php echo @$item->id ?>" />
  <div class="control-group">
    <label class="control-label" for="codigo">Codigo:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="codigo" id="codigo" type="text" placeholder="Codigo" value="<?php echo @$item->codigo ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="total">Total:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="total" id="total" type="text" placeholder="Total" value="<?php echo @$item->total ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-primary"><?php echo $action ?></button>
    <button class="btn">Cancelar</button>
  </div>
  <fieldset>
</form>
