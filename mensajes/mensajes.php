<?php if (isset($_SESSION["telefono_actualizar"]) and $_SESSION["telefono_actualizar"] == 'si'): ?>
<div class="alert alert-info fade in">
	<button class="close" data-dismiss="alert">
	×
	</button>
	<i class="fa-fw fa fa-info"></i>
	<strong>Enhorabuena !</strong>El telefono de contacto fue actualizado.
</div>
<?php unset($_SESSION["telefono_actualizar"]); ?>

<?php endif ?>	
<!-- SI EL CLAP SE ENCUENTRA EN EL SISTEMA SE PASA A MOSTRAR A
LA TABLA DE INTEGRANTES Y UN BOTON PARA AGREGARLOS -->
<?php if (isset($_SESSION["integrante_registro"]) and $_SESSION["integrante_registro"] == 'si'): ?>
<div class="alert alert-info fade in">
	<button class="close" data-dismiss="alert">
	×
	</button>
	<i class="fa-fw fa fa-info"></i>
	<strong>Enhorabuena !</strong>El responsable fue agregado al CLP
</div>
<?php unset($_SESSION["integrante_registro"]); ?>
<?php endif ?>

<?php if (isset($_SESSION["integrante_eliminado"]) and $_SESSION["integrante_eliminado"] == 'si'): ?>
<div class="alert alert-info fade in">
	<button class="close" data-dismiss="alert">
	×
	</button>
	<i class="fa-fw fa fa-info"></i>
	<strong>Enhorabuena !</strong>El responsable fue eliminado.
</div>
<?php unset($_SESSION["integrante_eliminado"]); ?>
<?php endif ?>

<?php if (isset($_SESSION["estatus_update"]) and $_SESSION["estatus_update"] == 'si'): ?>
<div class="alert alert-info fade in">
	<button class="close" data-dismiss="alert">
	×
	</button>
	<i class="fa-fw fa fa-info"></i>
	<strong>Enhorabuena !</strong>Estatus modificado con Exito...!
</div>
<?php unset($_SESSION["estatus_update"]); ?>
<?php endif ?>

<?php if (isset($_SESSION["integrante_registro_existe"]) and $_SESSION["integrante_registro_existe"] == 'si'): ?>
<div class="alert alert-warning fade in">
	<button class="close" data-dismiss="alert">
	X
	</button>
	<i class="fa-fw fa fa-warning"></i>
	<strong>Advertencia !</strong> El responsable del CLP ya se encuentra registrado.
</div>
<?php unset($_SESSION["integrante_registro_existe"]); ?>
<?php endif ?>

<?php if (isset($_SESSION["integrante_registro_existe_cargo"]) and $_SESSION["integrante_registro_existe_cargo"] == 'si'): ?>
<div class="alert alert-warning fade in">
	<button class="close" data-dismiss="alert">
	X
	</button>
	<i class="fa-fw fa fa-warning"></i>
	<strong>Advertencia !</strong> Ese cargo ya esta ocupado.
</div>
<?php unset($_SESSION["integrante_registro_existe_cargo"]); ?>
<?php endif ?>


<?php if (isset($_SESSION["integrante_registro"]) and $_SESSION["integrante_registro"] == 'no'): ?>
<div class="alert alert-warning fade in">
	<button class="close" data-dismiss="alert">
	X
	</button>
	<i class="fa-fw fa fa-warning"></i>
	<strong>Advertencia !</strong> El responsable no se encuentra en el sistema CADIP.
</div>
<?php unset($_SESSION["integrante_registro"]); ?>
<?php endif ?>

<?php if (isset($_SESSION["clp_eliminado"]) and $_SESSION["clp_eliminado"] == 'si'): ?>
<div class="alert alert-info fade in">
	<button class="close" data-dismiss="alert">
	×
	</button>
	<i class="fa-fw fa fa-info"></i>
	<strong>Enhorabuena !</strong>El CLP fue eliminado.
</div>
<?php unset($_SESSION["clp_eliminado"]); ?>
<?php endif ?>

<?php if (isset($_SESSION["clp_registro"]) and $_SESSION["clp_registro"] == 'si'): ?>
<div class="alert alert-info fade in">
	<button class="close" data-dismiss="alert">
	×
	</button>
	<i class="fa-fw fa fa-info"></i>
	<strong>Enhorabuena !</strong>El CLP fue Ingresado.
</div>
<?php unset($_SESSION["clp_registro"]); ?>
<?php endif ?>

