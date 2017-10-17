<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Rubro;
use Models\Categoria;
use Models\Producto;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$rubro = Producto::find($id);
$rubro->eliminar = 1;
$rubro->save();

header("Location: index.php");
die();