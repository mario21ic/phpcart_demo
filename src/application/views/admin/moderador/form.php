<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
  <fieldset>
  <input type="hidden" name="id" value="<?php echo @$item->id ?>" />
  <div class="control-group">
    <label class="control-label" for="username">Username:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="username" id="username" type="text" placeholder="username" value="<?php echo @$item->username ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Password:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="password" id="password" type="password" placeholder="clave" value="<?php echo @$item->password ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="rid">Rol:</label>
    <div class="controls">
      <input class="input-xlarge focused" name="rid" id="rid" type="text" placeholder="2" value="<?php echo @$item->rid ?>" required="required" <?php echo @$disabled ?> />
    </div>
  </div>
  <div class="form-actions">
    <button type="submit" class="btn btn-primary"><?php echo $action ?></button>
    <button class="btn">Cancelar</button>
  </div>
  <fieldset>
</form>
