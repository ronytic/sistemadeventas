<?php
class Prueba extends CI_Controller{
	function index(){
		$this->load->library("form_validation");
		$this->form_validation->set_message('min_length', '{field} minimo {param} caracteres.');
		
		$this->form_validation->set_rules("nombre","el campo Nombre","trim|required");
		$this->form_validation->set_rules("contrasena","el campo Contrasena","trim|required|min_length[4]|max_length[32]");
		$this->form_validation->set_rules("contrasena2","el campo Contraseña","trim|required");
		if($this->form_validation->run()==FALSE){
			$this->load->view("prueba");
		}else{
				echo "valido";
			}
		
	}
	function recibir(){
		print_r($_POST);
	}
}
?>