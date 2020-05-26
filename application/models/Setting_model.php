<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model 
{	

	public function getAllMenu()
	{
		return $this->db->get('user_menu')->result_array();
	}
	
	public function addNewMenu()
	{
		$data = [
			"menu" => $this->input->post('menu', true),
		];

		$this->db->insert('user_menu', $data);
	}

	public function deleteMenu($id)
	{
		$this->db->delete('user_menu', ['id' => $id]);
	}

	public function getMenuById($id)
	{
		return $this->db->get_where('user_menu', ['id' => $id])->row_array();
	}

	public function updateMenu()
	{
		$data = [
			"menu" => $this->input->post('menu', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_menu', $data);
	}
}

/* End of file Setting_model.php */
/* Location: ./application/models/Setting_model.php */