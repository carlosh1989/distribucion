<?php
//SECCIÓN DE CARGA DE LIBRERIAS Y MODELOS
require_once '../vendor/autoload.php';
use DB\Eloquent;
use Models\Rubro;

new Eloquent();
//\krumo::dump($comercios);
$idcategoria = $_POST['idcategoria'];
$rubros = Rubro::where('distribucion_categoria_id',$idcategoria)->get();
//var_dump($parroquias);
echo "<option value=''>RUBROS</option>";
echo "<optgroup label='-------'></optgroup>";
foreach ($rubros as $key => $r) {
	echo '<option value="'.$r->id.'">'.$r->rubro.'</option>';
}
?>