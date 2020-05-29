<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {

	public function getAllEmployee()
	{
		return $this->db->get('master_employee')->result_array();
	}

	public function addNewEmployee()
	{
		$data = [
			"name" => $this->input->post('name', true),
			"position" => $this->input->post('position', true),
			"department" => $this->input->post('department', true),
		];

		$this->db->insert('master_employee', $data);
	}

	public function getEmployeeById($id)
	{
		return $this->db->get_where('master_employee', ['id' => $id])->row_array();
	}

	public function updateEmployee()
	{
		$data = [
			"name" => $this->input->post('name', true),
			"position" => $this->input->post('position', true),
			"department" => $this->input->post('department', true),
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('master_employee', $data);
	}

	public function deleteEmployee($id)
	{
		$this->db->delete('master_employee', ['id' => $id]);
	}

}

/* End of file Master_model.php */
/* Location: ./application/models/Master_model.php */