<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Strana\Paginator;
use Models\Categoria;
use Models\Producto;
use Models\Origen;
use Models\Rubro;
use Models\Coste;
use Models\Presentacion;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);


$origenes = Origen::find($origen);
$costes = Coste::find($coste);
$presentaciones = Presentacion::find($presentacion);
$detalle = $origenes->origen." ".$costes->coste.' '.$presentaciones->detalle;

$productos = new Producto;
$productos->categoria_id = $categoria;
$productos->rubro_id = $rubro;
$productos->origen_id = $origen;
$productos->coste_id = $coste;
$productos->presentacion_id = $presentacion;
$productos->detalle = $detalle;
$productos->eliminar = 0;
$productos->save();

header("Location: index.php");
die();