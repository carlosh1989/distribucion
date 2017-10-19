<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Presentacion;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$rubro_detalle = \Models\Rubro::find($rubro);
$peso_volumen_detalle = $peso_volumen;
$empaque_detalle = \Models\Empaque::find($empaque);
$medida_detalle = \Models\Medida::find($medida);
$detalle = $rubro_detalle->rubro.' de '.$minima.'X'.$maxima.' '.$empaque_detalle->empaque.' '.$peso_volumen.' '.$medida_detalle->medida.' ';

$presentacion = new Presentacion;
$presentacion->rubro_id = $rubro;
$presentacion->detalle = $detalle;
$presentacion->expresion_menor = $minima;
$presentacion->expresion_maxima = $maxima;
$presentacion->empaque_id = $empaque;
$presentacion->medida_id = $medida;
$presentacion->peso_volumen = $peso_volumen;
$presentacion->eliminar = 0;
$presentacion->save();

header("Location: index.php");
die();