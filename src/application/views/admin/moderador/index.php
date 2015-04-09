<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>username</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($items as $item): ?>
    <tr>
      <td>#<?php echo $item->id ?></td>
      <td>
        <?php echo $item->username ?>
      </td>
      <td>
        <a href="/admin/moderador/editar/<?php echo $item->id ?>">Editar</a> | 
        <a href="/admin/moderador/eliminar/<?php echo $item->id ?>">Eliminar</a>
      </td>
    <tr>
    <?php endforeach ?>
  </body>
<table>
