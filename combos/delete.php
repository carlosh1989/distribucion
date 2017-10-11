<?php
require_once '../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Bodega;
use Models\Cargo;
use Models\Clap;
use Models\Clp;
use Models\ClpResponsable;
use Models\Consulta;
use Models\ConsultaContacto;
use Models\Familia;
use Models\Integrante;
use Models\Jefe;
use Models\Municipio;
use Models\Parroquia;
use Models\Problematica;
use Models\Rubro;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$rubro = Rubro::find($id);
$rubro->eliminar = 1;
$rubro->save();

header("Location: index.php");
die();