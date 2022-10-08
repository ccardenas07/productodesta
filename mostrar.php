<?php
require_once('conexion/Trabajo.php');
$con=new Trabajo();
$co=$con->consulta();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/estilos.css" type="text/css" rel="stylesheet" />
<title>Mostrar Productos Indurama</title>
<style type="text/css">
.botomos{ background:url(img/sprite.png) no-repeat top center; width:100px; height:26px;float:left; background-position:20 0;}
#detalles{ background-position:0px 0px;}
#detalles:hover{ background-position:0px -26px; cursor:pointer;}
.botons {
    float: right;
}
</style>
</head>

<body>
 <div id ="maincontent">
        <div class="row1">
			<img src="upload/<?php echo $co[0]["image1"]?>" />
        </div>
		<div class="row2">
			<div class="solpreguntas">
				<div class="titulococ">
					<?php echo $co[0]["titulo"]?>
				</div>
				<div class="cocina">
                     <h2>Características</h2>
					<?php echo $co[0]["textdes"]?>
				</div>
				<div class="access">
					<h2>Accesorios</h2>
				</div>
				<div class="accesorios">
				<?php echo $co[0]["textoacc"]?>
				</div>
			</div>
			<div class="pro">
				<img src="upload/<?php echo $co[0]["image2"]?>" />
				<img src="upload/<?php echo $co[0]["image3"]?>" />
				<img src="upload/<?php echo $co[0]["imagen4"]?>" />
			</div>
			<div class="botons" >				
				<a href="<?php echo "http://".$co[0]["enlace"]?> " class="botomos" id="detalles" target="_blank"></a>                  
			</div>
		</div>
 </div>
</body>
</html>