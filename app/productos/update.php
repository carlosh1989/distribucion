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

if($opcion == 1)
{
	$cantidad_nueva = $productos->cantidad + $cantidad;
}
else
{
	$cantidad_nueva = $productos->cantidad - $cantidad;
}


$productos->cantidad = $cantidad_nueva;
$productos->save();

header("Location: index.php");
die();