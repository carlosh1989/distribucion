<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Combo;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

var_dump($_POST);

$combos = new Combo;
$combos->cod = $cod;
$combos->detalle = $detalle;
$combos->kilos = $kilos;
$combos->eliminar = 0;
$combos->save();

header("Location: index.php");
die();