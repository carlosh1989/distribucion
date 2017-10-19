<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Bodega;
use Models\Categoria;
use Models\Empaque;
use Models\Medida;
use Models\Presentacion;
use Strana\Paginator;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);
$Categoria = Categoria::where('eliminar',0)->get();
$empaques = Empaque::all();
$medidas = Medida::all();
$presentacion = Presentacion::all();
?>
<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/css/beyond.min.css">
<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
<link rel="stylesheet" href="../../assets/bower/trumbowyg/dist/ui/trumbowyg.min.css">
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/beyond.js"></script>
<br>
<div class="widget-header bordered-left bordered-darkorange">
	<span class="widget-caption"><a class="btn btn-danger shiny fa fa-home" href="../"></a><strong> PRESENTACION</strong></span>
	<button class="btn btn-danger shiny" data-toggle="modal" data-target="#agregarCategoria"><i class="fa fa-plus"></i> AGREGAR PRESENTACIÓN</button>
</div>
<div class="widget-body bordered-left">
	<table class="table  table-hover table-bordered" id="simpledatatable" style="font-size: 1em;color: #555;">
		<thead>
			<tr role="row">
				<th width='20%'><i class="fa fa-file"></i> DETALLE</th>
				<th width='20%'><i class="fa fa-address-card" aria-hidden="true"></i>
				CATEGORIA</th>
				<th width='20%'><i class="fa fa-address-card" aria-hidden="true"></i>
				RUBRO</th>
				<th width='5%'><i class="fa fa-gear"></i> Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php 	 
			$strana = new Paginator();
			$records = array_reduce((array) $presentacion, 'array_merge', array());
			$paginator = $strana->perPage(4)->make($records);
			?>
			<?php foreach ($paginator as $key => $p): ?>
			<tr>
				<td width='20%' >
					<?php echo $p->detalle ?>
				</td>
				<td width='10%' >
					<?php echo $p->rubro->categoria->categoria ?>
				</td>
				<td width='10%' >
					<?php echo $p->rubro->rubro ?>
				</td>
				<td>
					<div class="col-md-12">
						<div class="col-md-6">
							<a class="btn btn-info fa fa-search" href="show.php?id=<?php echo $p->id ?>"></a>
						</div>
						<div class="col-md-6">
							<form action="delete.php" method="POST">
								<input type="hidden" name="id" value="<?php echo $p->id ?>">
								<button class="btn btn-danger fa fa-times" type="submit"></button>
							</form>
						</div>
					</div>
				</td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
</div>
</div>
</div>
<!-- Modal -->
<div id="agregarCategoria" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title">AGREGAR PRESENTACIÓN</h4>
</div>
<div class="modal-body">
	<form action="store.php" method="POST">
		<!-- Select Categoria -->
		<script language="javascript">
		$(document).ready(function(){
		$("#categoria").change(function () {
		$("#categoria option:selected").each(function () {
		idcategoria = $(this).val();
		$.post("../../select/rubros.php", { idcategoria:idcategoria }, function(data){
		$("#rubros").html(data);
		});
		window.console&&console.log(idcategoria);
		});
		})
		});
		</script>

		<div class="form-group">
			<?php $categorias = Categoria::all(); ?>
			<select name="categoria" id="categoria" style="width:280px;height:34px">
				<option value="">CATEGORIA</option>
			<optgroup label='-------'></optgroup>
			<?php foreach ($categorias as $cat): ?>
			<option value="<?php echo $cat->id ?>"><?php echo $cat->categoria ?></option>
			<?php endforeach ?>
		</select>
		<select
			name="rubro" id="rubros" style="width:280px;height:34px">
			<option value="">RUBRO</option>
		</select>
	</div>
	<div class="form-group">
		<select name="minima" id="">
			<option value="">EMPRESIÓN MINIMA</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>

		<select name="maxima" id="">
			<option value="">EMPRESIÓN MAXIMA</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
		</select>

	</div>
	<div class="form-group">
		<select name="empaque" id="">
			<option value="">EMPAQUES</option>
			<?php foreach ($empaques as $key => $em): ?>
				<option value="<?php echo $em->id ?>"><?php echo $em->empaque ?></option>
			<?php endforeach ?>
		</select>

		<select name="medida" id="">
			<option value="">MEDIDAS</option>
			<?php foreach ($medidas as $key => $me): ?>
				<option value="<?php echo $me->id ?>"><?php echo $me->medida ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<input type=number step=any class="form-control" placeholder="PESO/VOLUMEN" name='peso_volumen' required="required" required autofocus onChange="javascript:this.value=this.value.toUpperCase();" style="width:100px;height:34px">
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
<script src="../../assets/bower/trumbowyg/dist/trumbowyg.min.js"></script>
<script>
/** Default editor configuration **/
$('.editor').trumbowyg();
</script>