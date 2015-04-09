<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Categoria</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($items as $item): ?>
    <tr>
      <td>#<?php echo $item->id ?></td>
      <td>
        <?php echo $item->nombre ?>
      </td>
      <td>
        <?php echo @$categorias[$item->id]->nombre ?>
      </td>
      <td>
        <a href="/admin/producto/editar/<?php echo $item->id ?>">Editar</a> | 
        <a href="/admin/producto/eliminar/<?php echo $item->id ?>">Eliminar</a>
      </td>
    <tr>
    <?php endforeach ?>
  </body>
<table>
