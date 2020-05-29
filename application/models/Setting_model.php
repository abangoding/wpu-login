<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model 
{	

	public function getAllMenu()
	{
		return $this->db->get('user_menu')->result_array();
	}

	public function getAllSubmenu()
	{
		$this->db->select('user_sub_menu.*, user_menu.menu as nama_menu' );
		$this->db->from('user_sub_menu');
		$this->db->join('user_menu', 'user_menu.id = user_sub_menu.menu_id', 'left');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function addNewMenu()
	{
		$data = [
			"menu" => $this->input->post('menu', true),
		];

		$this->db->insert('user_menu', $data);
	}

	public function addNewSubmenu()
	{
		$data = [
			"menu_id" => $this->input->post('menu_id', true),
			"title" => $this->input->post('title', true),
			"url" => $this->input->post('url', true),
			"icon" => $this->input->post('icon', true),
			"is_active" => 1,
		];

		$this->db->insert('user_sub_menu', $data);
	}

	public function deleteMenu($id)
	{
		$this->db->delete('user_menu', ['id' => $id]);
	}

	public function deleteSubmenu($id)
	{
		$this->db->delete('user_sub_menu', ['id' => $id]);
	}

	public function getMenuById($id)
	{
		return $this->db->get_where('user_menu', ['id' => $id])->row_array();
	}

	public function getSubmenuById($id)
	{
		return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
	}

	public function updateMenu()
	{
		$data = [
			"menu" => $this->input->post('menu', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_menu', $data);
	}

	public function updateSubmenu()
	{
		$data = [
			"menu_id" => $this->input->post('menu_id', true),
			"title" => $this->input->post('title', true),
			"url" => $this->input->post('url', true),
			"icon" => $this->input->post('icon', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user_sub_menu', $data);
	}
}

/* End of file Setting_model.php */
/* Location: ./application/models/Setting_model.php */