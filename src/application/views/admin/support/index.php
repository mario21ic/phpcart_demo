<?php if($this->session->flashdata('mensaje')): ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('mensaje') ?></div>
<?php endif ?>
      <form class="form-horizontal" method="post">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
        <fieldset>
          <legend>Formulario de soporte</legend>
          <div class="control-group">
            <label class="control-label" for="nombres">Nombre de usuario</label>
            <div class="controls">
              <input class="input-xlarge focused" id="nombres" name="nombres" type="text" placeholder="Nombre completo">
            </div>
          </div>
          <div class="control-group error">
            <label class="control-label" for="asunto">Asunto</label>
            <div class="controls">
              <input type="text" id="asunto" name="asunto" placeholder="Soporte">
              <span class="help-inline">Este campo es obligatorio</span>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="mensaje">Mensaje</label>
            <div class="controls">
              <textarea rows="3" id="textarea" class="input-xlarge" id="mensaje" name="mensaje" ></textarea>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button class="btn">Cancelar</button>
          </div>
        </fieldset>
      </form>
