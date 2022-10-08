<?php
//clase conectora
class Coneccion
{
	//funcion para crear coneccion
	public static function con()
	{
		//datos de servidor
		//$con=mysql_connect("localhost","appigluc_proddes","%IN.producto.destacado-aa2014");
		//base de datos
		//datos de servidor
		$con=mysql_connect("localhost","root","");
		//base de datos
		mysql_select_db("appigluc_fb_proddestacad");
		return $con;
	}
	
	public static function invierte_fecha($fecha,$op){
	
	switch ($op)
	{
		case '1':
		$dia=substr($fecha,8,2);
		$mes=substr($fecha,5,2);
		$anio=substr($fecha,0,4);
		$correcta=$dia."-".$mes."-".$anio;
		break;
		case '2':
		
		$dia=substr($fecha,0,2);
		$mes=substr($fecha,3,2);
		$anio=substr($fecha,6,4);	
		$correcta=$anio."-".$mes."-".$dia;
		break;		
	}	
	
	return $correcta;
	}
}
?>