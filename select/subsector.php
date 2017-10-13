<?php
//SECCIÓN DE CARGA DE LIBRERIAS Y MODELOS
require_once '../vendor/autoload.php';
use DB\Eloquent;
use Models\Comercio;
use Models\Parroquia;
use Models\Subsector;

new Eloquent();
//\krumo::dump($comercios);
$id_sector = $_POST['idsector'];
$subsectores = Subsector::where('id_sector',$id_sector)->get();
//var_dump($parroquias);
echo "<option value=''>SUBSECTOR</option>";
echo "<optgroup label='-------'></optgroup>";
foreach ($subsectores as $key => $subsector) {
	echo '<option value="'.$subsector->id_subsector.'">'.$subsector->nom_subsector.'</option>';
}
?>
