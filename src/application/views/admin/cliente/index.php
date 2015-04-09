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
        <?php echo $item->nombres ?>
      </td>
      <td>
        <a href="/admin/cliente/editar/<?php echo $item->id ?>">Editar</a> | 
        <a href="/admin/cliente/eliminar/<?php echo $item->id ?>">Eliminar</a>
      </td>
    <tr>
    <?php endforeach ?>
  </body>
<table>
