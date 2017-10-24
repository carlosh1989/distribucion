<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Item;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$rubro = Item::find($id);
$rubro->cantidad = $cantidad;
$rubro->save();

header("Location: index.php?idcombo=".$idcombo);
die();