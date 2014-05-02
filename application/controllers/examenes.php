<?php

class Examenes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function mostrar_principal()
	{
		$data['is_admin'] = $this->session->userdata('isAdmin');
		$this->load->view('administrador/admin_examenes',$data);
	}

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file examenes.php */
/* Location: ./application/controllers/examenes.php */