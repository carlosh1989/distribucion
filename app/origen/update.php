<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Origen;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$origenes = Origen::find($id);
$origenes->origen = $origen;
$origenes->save();

header("Location: index.php");
die();