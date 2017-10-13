<?php
require_once '../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Categoria;

new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$categoria = new Categoria;
$categoria->categoria = $nombre_categoria;
$categoria->eliminar = 0;
$categoria->save();

header("Location: index.php");
die();