<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Strana\Paginator;
use Models\Categoria;
use Models\Producto;
use Models\Rubro;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$productos = new Producto;
$productos->origen_id = $origen;
$productos->rubro_id = $rubro;
$productos->presentacion_id = 0;
$productos->coste_id = $coste;
$productos->nombre = $nombre;
$productos->expresion_menor = ;
$productos->expresion_mayor = ;
$productos->tipo_empaque = ;
$productos->peso_volumen = ;
$productos->unidad_medida = ;	
$productos->eliminar = 0;
$productos->save();

header("Location: index.php");
die();