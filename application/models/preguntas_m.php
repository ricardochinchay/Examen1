<?php

class Preguntas_m extends CI_Model {
/*
	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}
*/
	// List all your items
	public function guardar_pregunta( $body, $seccion )
	{
		$data['pregunta'] = $body;
		$data['seccion'] = $seccion;

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

/* End of file preguntas_m.php */
/* Location: ./application/models/preguntas_m.php */
