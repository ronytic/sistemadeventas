<?php
class Producto_model extends CI_Model{
	public function __construct()
	{
			// Call the CI_Model constructor
			parent::__construct();
	}	
	function insertar($datos){
		$datos['fecha']=date("Y-m-d");
		$datos['hora']=date("H:i:s");
		$datos['activo']=1;
		$this->db->insert("producto",$datos);
		//$sql = $this->db->set($datos)->get_compiled_insert('producto');
		//echo $sql;	
	}
	function actualizar($datos,$id){
		$datos['fecha']=date("Y-m-d");
		$datos['hora']=date("H:i:s");
		$this->db->where("codproducto=$id");
		$this->db->update("producto",$datos);
		//$sql = $this->db->set($datos)->get_compiled_insert('producto');
		//echo $sql;	
	}
	function obtener($cantidad,$inicio){
		$this->db->limit($cantidad,$inicio);
		$this->db->where("activo=1");
		
		return $this->db->get("producto");
	}
	function totalfilas(){
		$this->db->where("activo=1");	
		$consulta = $this->db->get('producto');
 		return  $consulta->num_rows() ;
	}
	function obtenerUno($id){
		$this->db->where("codproducto=$id and activo=1");
		
		$d=$this->db->get("producto");	
		return $d->row();
	}
	
}
?>