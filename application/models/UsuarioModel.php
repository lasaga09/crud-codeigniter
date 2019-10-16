<?php 


class UsuarioModel extends CI_Model
{
	public function Listado(){
		return $this->db->get('alumno')->result();
	}

	public function Listadoxid($id){

		return $this->db->query("SELECT * FROM alumno where id=$id")->row();
	}

	public function Insertar($a){
		$sql = "INSERT INTO alumno(nombre,edad) values(?,?)";
		$this->db->query($sql,$a);
	}

	public function Delete($id){
		$this->db->query("DELETE FROM alumno where id=$id");

	}
	
}
 ?>