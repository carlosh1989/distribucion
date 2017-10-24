<?php
//SECCIÓN DE CARGA DE LIBRERIAS Y MODELOS
require_once '../vendor/autoload.php';
use DB\Eloquent;
use Models\Producto;

new Eloquent();
//\krumo::dump($comercios);
$idrubro = $_POST['idrubro'];
$productos = Producto::where('rubro_id',$idrubro)->get();
//var_dump($parroquias);
echo "<option value=''>PRODUCTOS</option>";
echo "<optgroup label='-------'></optgroup>";
foreach ($productos as $key => $p) {
	echo '<option value="'.$p->id.'">'.$p->detalle.'</option>';
}
?>