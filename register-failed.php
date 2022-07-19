<?php require_once('connection/config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo APP_NAME ?>:Registration Failed</title>
<link href="stylesheets/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="validation/user.js">
</script>
</head>
<body>
<div id="page">
  <div id="menu"><ul>
  <li><a href="index.php">Inicio</a></li>
  <li><a href="foodzone.php">Carta</a></li>
  <!--<li><a href="specialdeals.php">Ofertas especiales</a></li>-->
  <li><a href="member-index.php">Mi cuenta</a></li>
   <!--<li><a href="contactus.php">Contáctenos</a></li>-->
    
  </ul>
  </div>
<div id="header">
  <!--<div id="logo"> <a href="index.php" class="blockLink"></a></div>-->
  <div id="company_name"><?php echo APP_NAME ?> Restaurante</div>
</div>
<div id="center">
<h1>Registro fallido</h1>
  <div style="border:#bd6f2f solid 1px;padding:4px 6px 2px 6px">
<p>&nbsp;</p>
<div class="error">Registro fallido!</div>
<p>Está viendo esta página porque ha fallado su intento de crear una cuenta nueva. Has usado una dirección de correo electrónico que ya está en uso.
 <a href="login-register.php">Click aqui</a> para volver a intentarlo. <!--O <a href="JavaScript: resetPassword()">Click aqui</a> para restablecer su contraseña.</p>-->
</div>
</div>
<?php include 'footer.php'; ?>
</div>
</body>
</html>