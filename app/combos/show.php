<?php
require_once '../../vendor/autoload.php';
ini_set('display_errors', 1);
use DB\Eloquent;
use Models\Combo;
use Strana\Paginator;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);
$rubros = Combo::where('eliminar',0)->where('id',$idcombo)->get();
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
	<span class="widget-caption"><a class="btn btn-danger shiny fa fa-home" href="../"></a><strong> COMBOS:</strong></span>
	<a class="btn btn-danger shiny" data-toggle="modal" data-target="#agregarRubro"><i class="fa fa-plus"></i> AGREGAR COMBOS</a>
</div>
<div class="widget-body bordered-left">
	<table class="table  table-hover table-bordered" id="simpledatatable" style="font-size: 1em;color: #555;">
		<thead>
			<tr role="row">
				<th width='5%'><i class="fa fa-file"></i> COD</th>
				<th width='30%'><i class="fa fa-address-card" aria-hidden="true"></i>
				DETALLE</th>
				<th width='10%'><i class="fa fa-address-card" aria-hidden="true"></i>
				KILOS</th>
				<th width='10%'><i class="fa fa-gear"></i> OPCIONES</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$strana = new Paginator();
			$records = array_reduce((array) $rubros, 'array_merge', array());
			$paginator = $strana->perPage(4)->make($records);
			?>
			<?php foreach ($paginator as $key => $p): ?>
			<tr>
				<td width='20%' >
					<?php echo $p->cod ?>
				</td>
				<td width='10%' >
					<?php echo $p->detalle ?>
				</td>
				<td width='10%' >
					<?php echo $p->kilos ?>
				</td>
				<td>
					<div class="col-md-12">
						<div class="col-md-6">
							<!-- Trigger the modal with a button -->
							<a type="button" class="btn btn-info fa fa-shopping-basket" href="../items/index.php?idcombo=<?php echo $p->id ?>"> ITEMS</a>
							<!-- Modal -->
							<div id="editarRubro<?php echo $p->id ?>" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">ACTUALIZAR COMBOS</h4>
										</div>
										<div class="modal-body">
											<form action="update.php" method="POST">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Tipo de Rubro" name='tipo' required="required" value="<?php echo $p->rubro ?>" required autofocus onChange="javascript:this.value=this.value.toUpperCase();" style="width:280px;height:34px">
													<input type="hidden" name="id" value="<?php echo $p->id ?>">
												</div>
												
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-danger shiny"><i class="fa fa-save"></i> ACTUALIZAR</button>
												<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
											</div>
										</form>
									</div>
								</div>
							</div>
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
<div id="agregarRubro" class="modal fade" role="dialog">
<div class="modal-dialog">
<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title">AGREGAR COMBO</h4>
</div>
<div class="modal-body">
	<form action="store.php" method="POST">
		<?php $cod = substr(md5(uniqid(mt_rand(), true)) , 0, 8); ?>
		<div class="form-group">
			<input type="text" class="form-control" placeholder="COD" name='cod' value="<?php echo $cod ?>" required="required" autofocus onChange="javascript:this.value=this.value.toUpperCase();" style="width:150px;height:34px">
		</div>

		<div class="form-group">
			<input type="text" class="form-control" placeholder="DETALLE" name='detalle' required="required" autofocus onChange="javascript:this.value=this.value.toUpperCase();">
		</div>

		<div class="form-group">
			<input type="number" class="form-control" placeholder="KILOS" name='kilos' required="required" autofocus style="width:150px;height:34px">
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