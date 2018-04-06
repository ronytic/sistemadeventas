<?php
class Login extends CI_Controller{
	function index(){
		$this->load->view("login");	
	}	
	function ingresar(){
		$this->load->library("form_validation");
				$this->form_validation->set_message('required', '{field} es Requerido');
		$this->form_validation->set_message('min_length', '{field} minimo {param} caracteres.');
		
		$this->form_validation->set_rules("nick","Nick","trim|required");
		$this->form_validation->set_rules("contra","Contrasena ","trim|required|min_length[4]|max_length[32]");
		$this->form_validation->set_rules("contra2","Contraseña 2","trim|required|min_length[4]|max_length[32]|matches[contra]");
		if($this->form_validation->run()==FALSE){
			$this->load->view("login");	
		}else{
			echo "Correcto";
			$contra=$this->input->post("contra");
			$contra2=$this->input->post("contra2");
			echo md5($contra);
		}
	}
}
?>