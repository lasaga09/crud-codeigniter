<?php 
/**
 * 
 */
class Usuario extends CI_Controller
{
	public function index(){
		$dts=$this->cargar();
		$this->load->view('usuario/index',compact('dts'));
	}

	public function Store(){
		$a=[$_POST['nombre'], $_POST['edad']];
		$this->UsuarioModel->Insertar($a);
		redirect('/');


		


	}

	public function cargar(){
		$dts=$this->UsuarioModel->Listado();
		return $dts;
	}

	public function Edit(){
		   $id = $this->uri->segment(3);
			$datos = $this->UsuarioModel->Listadoxid($id);

			$this->load->view('usuario/edit',compact('datos'));

	}

	public function Actualizar(){

	}

	public function Eliminar(){
		
		$id=$this->uri->segment(3);
		$this->UsuarioModel->Delete($id);
		redirect('/');
	}


	
}

 ?>