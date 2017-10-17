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

$productos = Producto::find($id);
$productos->origen_id = $origen;
$productos->rubro_id = $rubro;
$productos->presentacion_id = 0;
$productos->coste_id = $coste;
$productos->nombre = $nombre;
$productos->save();

header("Location: index.php");
die();