<?php
require_once('conexion/Trabajo.php');
$rec=new Trabajo();
$oo=$rec->cons();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php echo "si entra" ?>
<?php echo $oo[0]["id"]?>
<?php echo $oo[0]["titulo"]?>
<?php echo $oo[0]["textdes"]?>
<?php echo $oo[0]["textoacc"]?>
<?php echo $oo[0]["image1"]?>
<?php echo $oo[0]["image2"]?>
<?php echo $oo[0]["image3"]?>
<?php echo $oo[0]["image4"]?>
<?php echo "si deberia" ?>
</body>
</html>