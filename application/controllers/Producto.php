<?php
class Producto extends Ci_Controller{
	function nuevo(){
		$datos=array("titulo"=>"Nuevo Producto");
		$this->load->view("plantilla/cabecerahtml");
		$this->load->view("plantilla/cabecera");
		$this->load->view("plantilla/menu",$datos);
		$this->load->view("producto/nuevo");
		$this->load->view("plantilla/pie");
	}	
	function guardar(){
		$nombre=$this->input->post("nombre");
		echo $nombre;
		$precio=$this->input->post("precio");
		echo $precio;
		$detalle=$this->input->post("detalle");
		echo $detalle;
		
		
		$this->load->library("upload");
		$config['upload_path']="./imagenes/productos/";
		$config['allowed_types']="gif|jpg|png";
		$config['max_size']="1024";
		$config['overwrite']=TRUE;
		$this->upload->initialize($config);
		if(!$this->upload->do_upload("foto")){
			print_r( $this->upload->display_errors());
		}else{
			
		}
		$datos=$this->upload->data();
		$nombrefoto=$datos['file_name'];
		echo $nombrefoto;
		
		
		$this->load->model("producto_model");
		$datos=array("nombre"=>$nombre,
					"precio"=>$precio,
					"detalle"=>$detalle,
					"foto"=>$nombrefoto);
		//print_r($datos);
		$this->producto_model->insertar($datos);
        $datos=array("titulo"=>"Nuevo Producto");
		$this->load->view("plantilla/cabecerahtml");
		$this->load->view("plantilla/cabecera");
		$this->load->view("plantilla/menu",$datos);
		$this->load->view("producto/resultado");
		$this->load->view("plantilla/pie");
	}
	function listar(){
		$this->load->model("producto_model");
		
		$this->load->library("pagination");
		
		$config['full_tag_open'] = '<ul class="pagination pagination-md">';
		$config['full_tag_close'] = '</ul>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><span>';
		$config['cur_tag_close'] = '</span></li>';
		
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>'; 
		
		$config['base_url'] = base_url().'producto/listar/'; // parametro base de la aplicación, si tenemos un .htaccess nos evitamos el index.php
		$config['total_rows'] = $this->producto_model->totalfilas();//calcula el número de filas  
		$config['per_page'] = 10; //Número de registros mostrados por páginas
		$config['num_links'] = 2; //Número de links mostrados en la paginación
		$config['first_link'] = 'Primera';//primer link
		$config['last_link'] = 'Última';//último link
		$config["uri_segment"] = 3;//el segmento de la paginación
		$config['next_link'] = 'Siguiente';//siguiente link
		$config['prev_link'] = 'Anterior';//anterior link
		$this->pagination->initialize($config); //inicializamos la paginación
		
		
		$datos=$this->producto_model->obtener($config['per_page'],$this->uri->segment(3));
		$datosenviar=array("datos"=>$datos);
		$datos=array("titulo"=>"Listado de  Productos");
		$this->load->view("plantilla/cabecerahtml");
		$this->load->view("plantilla/cabecera");
		$this->load->view("plantilla/menu",$datos);
		$this->load->view("producto/listar",$datosenviar);
		$this->load->view("plantilla/pie");	
	}
	function modificar($id){
		$this->load->model("producto_model");
		$dato=$this->producto_model->obtenerUno($id);
		$datos=array("titulo"=>"Modificar Producto");
		$this->load->view("plantilla/cabecerahtml");
		$this->load->view("plantilla/cabecera");
		$this->load->view("plantilla/menu",$datos);
		$this->load->view("producto/modificar",array("id"=>$id,"dato"=>$dato));
		$this->load->view("plantilla/pie");	
	}
	function actualizar(){
		$nombre=$this->input->post("nombre");
		//echo $nombre;
		$precio=$this->input->post("precio");
		//echo $precio;
		$detalle=$this->input->post("detalle");
		//echo $detalle;
		$id=$this->input->post("id");
		$datos=array("nombre"=>$nombre,
					"precio"=>$precio,
					"detalle"=>$detalle);
		
		
		$this->load->library("upload");
		$config['upload_path']="./imagenes/productos/";
		$config['allowed_types']="gif|jpg|png";
		$config['max_size']="1024";
		$config['overwrite']=TRUE;
		$this->upload->initialize($config);
		
		if($_FILES['foto']['name']!=""){
			if(!$this->upload->do_upload("foto")){
				print_r( $this->upload->display_errors());
			}else{
				
			}
			$datos=$this->upload->data();
			$nombrefoto=$datos['file_name'];
			echo $nombrefoto;
			$datos['foto']=$nombrefoto;
		
		}
		
		$this->load->model("producto_model");
		
		//print_r($datos);
		$this->producto_model->actualizar($datos,$id);
		header("Location:listar");
	}
	function eliminar($id){
		$this->load->model("producto_model");
		$this->producto_model->actualizar(array("activo"=>"0"),$id);
		header("Location:".base_url()."/producto/listar");	
	}
}
?>