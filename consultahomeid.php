<?php
require_once('conexion/Trabajo.php');
require_once('conexion/Coneccion.php');
//if (isset($_SESSION["admin"]))
//{
$t=new Trabajo();
$cd=$t->consultaid($_GET["id"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRACION</title>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />
<!--<link href="css/calendario.css" type="text/css" rel="stylesheet">-->
<script src="js/funciones.js" type="text/javascript"></script>
<script type="text/javascript" src="tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="ejemploTinyMCE_1.js"></script>
<style type="text/css">
.fecha1
{
	margin-left: 225px;
    margin-top: -28px;
}
.fecha2
{
	 margin-left: 225px;
    margin-top: -28px;
}
.text2
{
	margin-top: 20px;
}
.text3
{
	margin-top: 16px;
}
.fecha3
{
	margin-left: 225px;
    margin-top: -25px;
}
.text4
{
	margin-top: 12px;	
}
.fecha4
{
	margin-left: 225px;
    margin-top: -22px;
}



.salir
{
	margin: 0 1091px;
    width: 96px;

}
</style>
</head>

<body onload="cargarTinyMCE();">

<div id="maincontentadmin">

<div class="inscripcion">
<div class="tituloed">
<h1 >EDICIÓN </h1>
</div>

<div class="formul">
 
<form name="form" action="actualiza.php" method="post" enctype="multipart/form-data">
<?php
if (isset($_GET["m"]) and $_GET["m"]==1)
{
	?>
	<h2 style="color:green;">Datos Modificado</h2>
	<?php
}
?>
<div class="cont">
<h1>T&iacute;tulo</h1>
       <input type="text" name="textotit" value="<?php echo  $cd[0]["titulo"];?>" />
       <h1>Caracter&iacute;sticas</h1>

<textarea id="editor" name="editor" ><?php echo  $cd[0]["textdes"];?></textarea>
<h1>Accesorios</h1>
<textarea id="sencillo" name="sencillo" ><?php echo  $cd[0]["textoacc"];?></textarea>
          <div class="imagen1 imagenHolder">
          
        <img src="upload/<?php echo $cd[0]["image1"];?>" width="100px" height="100px" />
              </div>
        <div class="imagen1">
           <p>Imagen (270x400)</p>
           <input type="file" name="foto"  />
          </div>
       
</div>


<div class="cont">
      <div class="imagen1 imagenHolder">
      
    <img src="upload/<?php echo $cd[0]["image2"];?>" width="100px" height="100px" />
       </div>
    <div class="imagen1">
       <p>Imagen (137x115) </p>
       <input type="file" name="foto2"  />
      </div>
    
</div>
<div class="cont">    
      <div class="imagen1 imagenHolder">
      
    <img src="upload/<?php echo $cd[0]["image3"];?>" width="100px" height="100px" />
   
    </div>
    <div class="imagen1">
       <p>Imagen (137x115) </p>
       <input type="file" name="foto3"  />
      </div>
    
</div>

<div class="cont">
  <div class="imagen1 imagenHolder">
  
<img src="upload/<?php echo $cd[0]["imagen4"];?>" width="100px" height="100px" />
</div>
<div class="imagen1">
   <p>Imagen (137x115) </p>
   <input type="file" name="foto4"  />
  </div>

</div>
<div class="textoenl">
Enlace(www.enlace.com)<br />
  <input type="text" name="enlace" value="<?php echo $cd[0]["enlace"];?>" />
</div>
<!----------------------------->

  
  <!--************************-->

<div class="boton">
  <input type="hidden" name="datehost" id="datehost"  value="<?php echo date("Y-m-d H:i:s");?>" />
<input type="hidden" name="id" value="<?php echo $_GET["id"];?>" />
<input type="hidden" name="image1" value="<?php echo $cd[0]["image1"]?>"/>
 <input type="hidden" name="image2" value="<?php echo $cd[0]["image2"]?>"/>
  <input type="hidden" name="image3" value="<?php echo $cd[0]["image3"]?>"/>
   <input type="hidden" name="image4" value="<?php echo $cd[0]["imagen4"]?>"/>
<div id="error"></div>
<input type="button" value="Editar" onclick="document.form.submit();" />
<!--<input type="button" name="editar" value="editar" onclick="valida_descripcionid()" />-->
</div>

<a href="home.php">Regresar</a>

</form>
</div>

</div>
<!--<div class="salir">
<a href="salir.php">Cerrar Sesi&oacute;n</a>
</div>-->
</div>
</body>
</html>

<?php
/*}else
{
	echo "
	<script type='text/javascript'>
	alert('Debe loguearse primero para acceder a este contenido');
	window.location='ingreso.php';
	</script>
	";
}*/
?>
