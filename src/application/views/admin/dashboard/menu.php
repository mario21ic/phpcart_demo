<?php $current = $this->uri->segment(2);
$menus = array('dashboard', 'producto', 'moderador');
$active = array();
foreach ($menus as $id => $menu) {
  if($current == $menu) $active[$id] = 'active';
}
?>
              <li class="<?php echo @$active[0] ?>">
                <a href="/admin/dashboard/">Inicio</a>
              </li>
              <li class="dropdown <?php echo @$active[1] ?>"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Categoria <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/admin/categoria/nuevo">Nuevo</a></li>
                  <li><a href="/admin/categoria/index">Lista</a></li>
                </ul>
              </li>
              <li class="dropdown <?php echo @$active[1] ?>"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Producto <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/admin/producto/nuevo">Nuevo</a></li>
                  <li><a href="/admin/producto/index">Lista</a></li>
                </ul>
              </li>
              <li class="dropdown <?php echo @$active[1] ?>"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Cliente <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/admin/cliente/nuevo">Nuevo</a></li>
                  <li><a href="/admin/cliente/index">Lista</a></li>
                </ul>
              </li>
              <li class="dropdown <?php echo @$active[1] ?>"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Pedidos <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/admin/pedido/nuevo">Nuevo</a></li>
                  <li><a href="/admin/pedido/index">Lista</a></li>
                </ul>
              </li>
            <?php if($this->session->userdata('moderador_rol')<=1): ?>
              <li class="dropdown <?php echo @$active[2] ?>"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Moderadores <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="/admin/moderador/nuevo">Nuevo</a></li>
                  <li><a href="/admin/moderador/index">Lista</a></li>
                </ul>
              </li>
            <?php endif ?>
