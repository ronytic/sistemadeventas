<table class="table table-bordered table-striped table-hover">
<thead>
<tr>
	<th>N</th>
    <th>Producto</th>
    <th>Precio</th>
    <th>Detalle</th>
    <th>Foto</th>
</tr>
</thead>
<?php 
$i=$this->uri->segment(3);
foreach($datos->result() as $fila){$i++;?>
<tr>
	<td><?=$i;?></td>
    <td><?=$fila->nombre;?></td>
    <td><?=$fila->precio;?></td>
    <td><?=$fila->detalle;?></td>
    <td>
		<a href="<?=base_url()?>imagenes/productos/<?=$fila->foto;?>" target="_blank">
			<img src="<?=base_url()?>imagenes/productos/<?=$fila->foto;?>" width="50">
    	</a>
    </td>
    <td>
    <a href="<?=base_url()?>producto/modificar/<?=$fila->codproducto?>" class="btn btn-md btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>
    <a href="<?=base_url()?>producto/eliminar/<?=$fila->codproducto?>" class="btn btn-md btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
    </td>
</tr>
<?php
}
?>
</table>
<?php echo $this->pagination->create_links() ?>