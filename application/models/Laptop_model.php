<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptop_model extends CI_Model {

	public function getAllLaptop()
	{
		return $this->db->get('inv_laptop')->result_array();
	}

}

/* End of file Laptop_model.php */
/* Location: ./application/models/Laptop_model.php */