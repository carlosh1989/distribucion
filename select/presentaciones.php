<?php
//SECCIÓN DE CARGA DE LIBRERIAS Y MODELOS
require_once '../vendor/autoload.php';
use DB\Eloquent;
use Models\Presentacion;

new Eloquent();
//\krumo::dump($comercios);
$idrubro = $_POST['idrubro'];
$presentacion = Presentacion::where('rubro_id',$idrubro)->get();
//var_dump($parroquias);
echo "<option value=''>PRESENTACIONES</option>";
echo "<optgroup label='-------'></optgroup>";
foreach ($presentacion as $key => $p) {
	echo '<option value="'.$p->id.'">'.$p->detalle.'</option>';
}
?>