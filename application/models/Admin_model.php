<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function getRole()
	{
		$query = "SELECT * FROM `user_role`";

		return $this->db->query($query)->result_array(); 
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */