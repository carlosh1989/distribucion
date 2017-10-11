<?php
//SECCIÓN DE CARGA DE LIBRERIAS Y MODELOS
require_once '../vendor/autoload.php';
use DB\Eloquent;
use Models\Bodega;
use Models\Comercio;
use Models\Parroquia;



new Eloquent();
//\krumo::dump($comercios);
$idparroquia = $_POST['idparroquia'];
$bodegas = Bodega::where('cod_parroquia',$idparroquia)->where('eliminar','==',0)->get();
//var_dump($bodegas);
echo "<option value=''>BODEGA</option>";
echo "<optgroup label='-------'></optgroup>";
foreach ($bodegas as $key => $bodega) {
	echo '<option value="'.$bodega->id.'">'.$bodega->rason_social.'</option>';
}
?>
