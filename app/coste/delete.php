<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Coste;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$origenes = Coste::find($id);
$origenes->eliminar = 1;
$origenes->save();

header("Location: index.php");
die();