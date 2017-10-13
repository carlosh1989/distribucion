<?php
require_once '../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Categoria;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$categoria = Categoria::find($id);
$categoria->categoria = $nombre_categoria;
$categoria->save();

header("Location: index.php");
die();