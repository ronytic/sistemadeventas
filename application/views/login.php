
<!DOCTYPE html>
<html>
  <head>
    <title>Sistema de Ventas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?=base_url()?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?=base_url()?>css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Sistemas de Ventas</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
                        	<div class="alert alert-danger">
                                <?php echo validation_errors(); ?>
                            </div>
			                <h6>Ingreso al Sistema</h6>
			                <form action="<?=base_url()?>login/ingresar" method="post">
			                <input class="form-control" type="text" name="nick" placeholder="Ingrese Nick" autofocus>
			                <input class="form-control" type="password" name="contra" placeholder="Contraseña">
                            <input class="form-control" type="password" name="contra2" placeholder="Repite la Contraseña">
			                <div class="action">
			                    <input type="submit" value="Ingresar" class="btn btn-primary">
			                </div>                
                            </form>
			            </div>
			        </div>

			        
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=base_url();?>js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>js/custom.js"></script>
  </body>
</html>