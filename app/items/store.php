<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Item;
use Models\Producto;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

//var_dump($_POST);
$productos = Producto::find($producto);
$nombre = $productos->origen->origen.' '.$productos->rubro->rubro.' '.$productos->coste->coste;

$items = new Item;
$items->categoria_id = $categoria;
$items->rubro_id = $rubro;
$items->producto_id = $producto;
$items->coste_id = $productos->coste->id;
$items->cantidad = $cantidad;
$items->origen_id = $productos->origen->id;
$items->nombre = $nombre;
$items->detalle = $productos->detalle;
$items->eliminar = 0;
$items->save();

header("Location: index.php");
die();