<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
    <fieldset>
    <?php if(isset($item->{$primary_key})): ?>
        <input type="hidden" name="id" value="<?php echo @$item->{$primary_key} ?>" />
    <?php endif ?>

    <?php if(isset($fields)): ?>
    <?php foreach($fields as $field): ?>
      <div class="control-group">
      <label class="control-label" for="nombre"><?php echo $field['label'] ?>:</label>
        <div class="controls">

            <?php if($field['widget']=='text' or $field['widget']=='file' or $field['widget']=='hidden'): ?>
              <input class="input-xlarge focused" name="<?php echo $field['name'] ?>" id="<?php echo $field['name'] ?>" type="<?php echo $field['widget'] ?>" placeholder="<?php echo $field['label'] ?>" value="<?php echo @$item->{$field['name']} ?>" required="required" <?php echo @$disabled ?> />

            <?php elseif($field['widget']=='textarea'): ?>
                <textarea name="<?php echo $field['name'] ?>"><?php echo @$item->{$field['name']} ?></textarea>

            <?php elseif($field['widget']=='select'): ?>
                <select class="input-xlarge" name="<?php echo $field['name'] ?>" id="<?php echo $field['name'] ?>">
                    <option value="0">--</option>
                    <?php var_dump($item->{$field['name']}) ?>
                    <?php foreach($item->{$field['name']} as $sub_item): ?>
                        <option value="<?php echo $sub_item->{$primary_key} ?>"><?php echo $sub_item ?></option>
                    <?php endforeach ?>
                </select>

            <?php endif ?>
        </div>
      </div>
    <?php endforeach ?>
    <?php endif ?>


  <div class="form-actions">
    <button type="submit" class="btn btn-primary"><?php echo $action ?></button>
    <button class="btn">Cancelar</button>
  </div>
  <fieldset>
</form>
