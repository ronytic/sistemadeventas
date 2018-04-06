<?php
class Inicio extends CI_Controller{
	function __construct(){
		parent::__construct();
		
	}
	function index(){
		$datos=array("titulo"=>"Página de Inicio");
		$this->load->view("plantilla/cabecerahtml");
		$this->load->view("plantilla/cabecera");
		$this->load->view("plantilla/menu",$datos);
		$this->load->view("inicio");
		$this->load->view("plantilla/pie");
	}	
}
?>