<?php
require_once __DIR__ . '/vendor/autoload.php';
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
use Models\Organismo;
use Models\Parroquia;
use Models\Problematica;
use Strana\Paginator;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/beyond.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/bower/trumbowyg/dist/ui/trumbowyg.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/beyond.js"></script>
<script language="javascript">
$(document).ready(function(){
$("#municipio").change(function () {
$("#municipio option:selected").each(function () {
idmunicipio = $(this).val();
$.post("select/parroquias.php", { idmunicipio:idmunicipio }, function(data){
$("#parroquia").html(data);
});
window.console&&console.log(idmunicipio);
});
})
});
</script>
<script language="javascript">
$(document).ready(function(){
$("#parroquia").change(function () {
$("#parroquia option:selected").each(function () {
idparroquia = $(this).val();
$.post("bodegas.php", { idparroquia:idparroquia }, function(data){
$("#bodega").html(data);
});
window.console&&console.log(idparroquia);
});
})
});
</script>
<script language="javascript">
$(document).ready(function(){
$("#municipioB").change(function () {
$("#municipioB option:selected").each(function () {
idmunicipio = $(this).val();
$.post("parroquias.php", { idmunicipio:idmunicipio }, function(data){
$("#parroquiaB").html(data);
});
window.console&&console.log(idmunicipio);
});
})
});
</script>
<script language="javascript">
$(document).ready(function(){
$("#parroquiaB").change(function () {
$("#parroquiaB option:selected").each(function () {
idparroquia = $(this).val();
$.post("bodegas.php", { idparroquia:idparroquia }, function(data){
$("#bodegaB").html(data);
});
window.console&&console.log(idparroquia);
});
})
});
</script>
<script language="javascript">
$(document).ready(function(){
$("#municipioC").change(function () {
$("#municipioC option:selected").each(function () {
idmunicipio = $(this).val();
$.post("parroquias.php", { idmunicipio:idmunicipio }, function(data){
$("#parroquiaC").html(data);
});
window.console&&console.log(idmunicipio);
});
})
});
</script>
<script language="javascript">
$(document).ready(function(){
$("#parroquiaC").change(function () {
$("#parroquiaC option:selected").each(function () {
idparroquia = $(this).val();
$.post("claps.php", { idparroquia:idparroquia }, function(data){
$("#clapC").html(data);
});
window.console&&console.log(idparroquia);
});
})
});
</script>
<br>
<div class="widget-header bordered-left bordered-darkorange">
	<span class="widget-caption"><strong> DISTRIBUCIÓN</strong></span>
	<a class="btn btn-danger shiny" href="rubros"><i class="fa fa-braille"></i>RUBROS</a>
	<a class="btn btn-danger shiny" href="productos"><i class="fa fa-cutlery"></i>PRODUCTOS</a>
	<button class="btn btn-danger shiny" href="combos"><i class="fa fa-shopping-basket"></i>COMBOS</button>
</div>
<div class="widget-body bordered-left">
	<form action="">
		
	</form>
	<div class="form-group">
		
		<?php $municipios = Municipio::all(); ?>
		<select name="municipio" id="municipio" style="width:280px;height:34px">
			<option value="">MUNICIPIO</option>
		<optgroup label='-------'></optgroup>
		<?php foreach ($municipios as $municipio): ?>
		<option value="<?php echo $municipio->id_municipio ?>"><?php echo $municipio->nombre_municipio ?></option>
		<?php endforeach ?>
	</select>
	
	
	<select name="parroquia" id="parroquia" style="width:280px;height:34px">
	</select>
</div>

</div>
</div>
</div>
</div>
<!-- Modal -->
<div id="agregarRubro" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">AGREGAR RUBRO</h4>
</div>
<div class="modal-body">
<form action="store.php" method="POST">
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Tipo de Rubro" name='tipo' required="required" required autofocus onChange="javascript:this.value=this.value.toUpperCase();" style="width:280px;height:34px">
	</div>
	
</div>
<div class="modal-footer">
	<button type="submit" class="btn btn-danger shiny"><i class="fa fa-save"></i> GUARDAR</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
</div>
</form>
</div>
</div>
</div>
<script src="assets/bower/trumbowyg/dist/trumbowyg.min.js"></script>
<script>
/** Default editor configuration **/
$('.editor').trumbowyg();
</script>