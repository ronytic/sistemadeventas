<div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="<?=base_url()?>"><i class="glyphicon glyphicon-home"></i> Inicio</a></li>

                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Producto
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="<?=base_url();?>producto/nuevo">Nuevo Producto</a></li>
                            <li><a href="<?=base_url();?>producto/listar">Listado de Productos</a></li>
                        </ul>
                    </li>
                    
                    
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Usuario
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="<?=base_url();?>usuario/nuevo">Nuevo Usuario</a></li>
                            <li><a href="<?=base_url();?>usuario/listar">Listado de Usuario</a></li>
                        </ul>
                    </li>
                </ul>
             </div>
		  </div>
          <div class="col-md-10">
		  	<div class="row">
				<div class="col-md-12">
                    <div class="content-box-header">
                        <div class="panel-title"><?=$titulo;?></div>
					</div>
                    <div class="content-box-large box-with-header"><!--Inicio del Contenido-->