<?php
//SECCIÓN DE CARGA DE LIBRERIAS Y MODELOS
require_once '../vendor/autoload.php';
use DB\Eloquent;
use Models\Comercio;
use Models\Parroquia;
use Models\Sector;

new Eloquent();
//\krumo::dump($comercios);
$id_parroquia = $_POST['idparroquia'];
$sectores = Sector::where('cod_parroquia',$id_parroquia)->get();
//var_dump($parroquias);
echo "<option value=''>SECTORES</option>";
echo "<optgroup label='-------'></optgroup>";
foreach ($sectores as $key => $sector) {
	echo '<option value="'.$sector->id_sector.'">'.$sector->nombre_sector.'</option>';
}
?>

