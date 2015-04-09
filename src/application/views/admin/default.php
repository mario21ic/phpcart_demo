<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Panel Admin</title>

    <!--[if lt IE 9]>
    <script src="/js/admin/html5.js"></script>
    <![endif]-->
    
    <link href="/css/admin/bootstrap.min.css" rel="stylesheet">
    <style>
      body { padding-top: 60px; }
    </style>
    <link href="/css/admin/bootstrap-responsive.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/admin/dashboard">Panel Admin</a>
          <div class="nav-collapse">
            <ul class="nav">
              <?php echo $this->load->view('admin/dashboard/menu', null, true) ?>
            </ul>
            <ul class="nav pull-right">
            <li><a href="/admin/support">Soporte</a></li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $this->session->userdata('username') ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/admin/moderador/editar/<?php echo $this->session->userdata('id') ?>">Ver perfil</a></li>
                <li><a href="/admin/logout">Logout</a></li>
              </ul>
            </li>
          </ul>
          </div>
        </div>
      </div>
      <div id="menusecundario">
        <mp:Header />
      </div>
    </div>

    <div class="container">
        <legend><?php echo @$action.' '.@$module ?> </legend>
        <?php if($this->session->flashdata('mensaje')): ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('mensaje') ?></div>
        <?php endif ?>

        <?php $this->load->view($content); ?>
    </div>

    <div id="footer">
      Created by <a target="_blank" href="http://twitter.com/mario21ic">mario21ic</a>
      <mp:Footer />
    </div>

    <script src="/js/admin/jquery.min.js"></script>
    <script src="/js/admin/bootstrap.min.js"></script>
    <mp:Js />
  </body>
</html>
