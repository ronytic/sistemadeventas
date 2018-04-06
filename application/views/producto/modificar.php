<?=form_open_multipart(base_url()."producto/actualizar","",array("id"=>$id))?>
<?=form_label("Nombre del Producto","nombre");?>
<?php $config=array("name"=>"nombre",
				"class"=>"form-control",
				"id"=>"nombre");
echo form_input($config,$dato->nombre);?>
<?=form_label("Precio del Producto","precio");?>
<?php $config=array("name"=>"precio",
				"class"=>"form-control",
				"id"=>"precio",
				"type"=>"number");
echo form_input($config,$dato->precio);?>
<?=form_label("Detalle del Producto","detalle");?>
<?php $config=array("name"=>"detalle",
				"class"=>"form-control",
				"id"=>"detalle",
				"rows"=>3);
echo form_textarea($config,$dato->detalle);?>
<?=form_label("Foto del Producto","foto");?>
<?php $config=array("name"=>"foto",
				"class"=>"form-control",
				"id"=>"foto");
echo form_upload($config,"");?>

<img src="<?=base_url();?>imagenes/productos/<?=$dato->foto?>" width="150" class="img-thumbnail">
<br>
<?php $config=array("name"=>"",
				"class"=>"btn btn-success",
				"id"=>"");
	echo form_submit($config,"Guardar")?>
<?=form_close()?>
