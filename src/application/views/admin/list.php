<table class="table">
  <thead>
    <tr>
      <?php foreach($fields as $field): ?>
          <th><?php echo $field['label'] ?></th>
      <?php endforeach ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach($items as $item): ?>
    <tr>
      <?php foreach($fields as $field): ?>
          <td><?php echo $item->{$field['name']} ?></td>
      <?php endforeach ?>
      <td>
        <a href="/admin/<?php echo $module ?>/editar/<?php echo $item->{$primary_key} ?>">Editar</a> | 
        <a href="/admin/<?php echo $module ?>/eliminar/<?php echo $item->{$primary_key} ?>">Eliminar</a>
      </td>
    <tr>
    <?php endforeach ?>
  </body>
<table>
