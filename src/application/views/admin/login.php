<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Admin</title>
  <link type="text/css" href="/css/admin/smoothness/jquery-ui-1.7.3.custom.css" rel="stylesheet" />
  <script type="text/javascript" src="/js/admin/jquery/jquery-1.3.2.min.js"></script>
  <script type="text/javascript" src="/js/admin/jquery/jquery-ui-1.7.3.custom.min.js"></script>
  <mp:Js />
</head>
<body>
  <div id="header">
    <h1>Panel</h1>
  </div>
  
  <div id="content">
    <form action="" method="post">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash();?>" />
      <input type="text" name="username" />
      <input type="password" name="password" />
      <input type="submit" value="Aceptar" />
    </form>
  </div>

  <div id="footer">
    Powered by CodeIgniter
  </div>
</body>
<html>
