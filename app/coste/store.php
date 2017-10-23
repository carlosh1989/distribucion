<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Coste;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$costes = new Coste;
$costes->coste = $coste;
$costes->eliminar = 0;
$costes->save();

header("Location: index.php");
die();