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
use Models\Organismo;
use Models\Parroquia;
use Models\Problematica;
use Strana\Paginator;
use Models\Rubro;
new Eloquent();
session_start();
extract($_GET);
extract($_POST);

$rubro = Rubro::where('eliminar',0)->where('id',$id)->first();
?>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/beyond.min.css">
<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/bower/trumbowyg/dist/ui/trumbowyg.min.css">
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/beyond.js"></script>

<br>
<div class="widget-header bordered-left bordered-darkorange">
	<span class="widget-caption"><a class="btn btn-danger shiny fa fa-arrow-left"" href="index.php"></a><strong> RUBRO</strong></span>
</div>
<div class="widget-body bordered-left">
	<table class="table  table-hover table-bordered" id="simpledatatable" style="font-size: 1em;color: #555;">
		<thead>
			<tr role="row">
				<th width='20%'><i class="fa fa-file"></i> TIPO</th>
				<th width='20%'><i class="fa fa-address-card" aria-hidden="true"></i>
				CANTIDAD</th>
				<th width='5%'><i class="fa fa-gear"></i> Opciones</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td width='20%' >
					<?php echo $rubro->rubro ?>
				</td>
				<td width='10%' >
					<?php echo $rubro->cantidad ?>
				</td>
				<td>
					<div class="col-md-12">
						<div class="col-md-6">
							<!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-info fa fa-pencil" data-toggle="modal" data-target="#editarRubro<?php echo $rubro->id ?>"></button>
							<!-- Modal -->
							<div id="editarRubro<?php echo $rubro->id ?>" class="modal fade" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">ACTUALIZAR RUBRO</h4>
										</div>
										<div class="modal-body">
											<form action="update.php" method="POST">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Tipo de Rubro" name='tipo' required="required" value="<?php echo $rubro->rubro ?>" required autofocus onChange="javascript:this.value=this.value.toUpperCase();" style="width:280px;height:34px">
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
								<input type="hidden" name="id" value="<?php echo $rubro->id ?>">
								<button class="btn btn-danger fa fa-times" type="submit"></button>
							</form>
						</div>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
</div>
</div>

<script src="../assets/bower/trumbowyg/dist/trumbowyg.min.js"></script>
<script>
/** Default editor configuration **/
$('.editor').trumbowyg();
</script>