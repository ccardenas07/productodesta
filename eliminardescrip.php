<?php
session_start();
require_once("conexion/Trabajo.php");
$des=new Trabajo();
$des-> borrardato($_GET["id"]);
?>