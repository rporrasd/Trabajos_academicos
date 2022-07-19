<?php require_once('connection/config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo APP_NAME ?>: Billing Success</title>
<link href="stylesheets/user_styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page">
  <div id="menu"><ul>
  <li><a href="index.php">Inicio</a></li>
  <li><a href="cart.php">Mi Carrito de Compras</a></li>
  <li><a href="member-index.php">Mi cuenta</a></li> 
  </ul>
  </div>
<div id="header">
  <div id="company_name"><?php echo APP_NAME ?> Restaurante</div>
</div>
<div id="center">
<h1>Facturación exitosa</h1>
  <div style="border:#bd6f2f solid 1px;padding:4px 6px 2px 6px">
<p>&nbsp;</p>
<div class="error">Información de facturación agregada con éxito!</div>
<p><a href="member-index.php">Haga clic aquí</a> para volver a tu cuenta.</p>
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
