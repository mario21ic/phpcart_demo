<legend>Cliente</legend>
<?php if($this->session->flashdata('mensaje')): ?>
<div class="alert alert-success"><?php echo $this->session->flashdata('mensaje') ?></div>
<?php endif ?>
<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($items as $item): ?>
    <tr>
      <td>#<?php echo $item->id ?></td>
      <td>
        <?php echo $item->codigo ?>
      </td>
      <td>
        <a href="/admin/pedido/editar/<?php echo $item->id ?>">Editar</a> | 
        <a href="/admin/pedido/eliminar/<?php echo $item->id ?>">Eliminar</a>
      </td>
    <tr>
    <?php endforeach ?>
  </body>
<table>
