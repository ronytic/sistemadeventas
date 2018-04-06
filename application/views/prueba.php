
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<div>
<?php echo validation_errors(); ?>
</div>
<?=form_open(base_url()."prueba/")?>
<?php
$config=array("name"=>"nombre",
				"id"=>"nombre");
?>
<?=form_label("Nombre","nombre")?>
<?=form_input($config,"");?>
<div><?php echo form_error("nombre"); ?></div>
<?php
$config=array("name"=>"contrasena",
				"id"=>"contra");
?>
<br>
<?=form_label("Contrasseña","contra")?>
<?=form_password($config,"");?>
<?php
$config=array("name"=>"contrasena2",
				"id"=>"contra2");
?>
<br>
<?=form_label("Contrasseña 2","contra2")?>
<?=form_password($config,"");?>
<br>
<?=form_submit("","Guardar");?>
<?=form_close()?>
</body>
</html>