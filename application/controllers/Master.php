<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Master_model');
    }

    public function employee()
    {
        $data['title'] = 'Employee';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['employee'] = $this->Master_model->getAllEmployee();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('master/employee_index', $data);
        $this->load->view('templates/footer');
    }

    public function add_employee()
    {
        $data['title'] = 'Employee';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('master/employee_tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Master_model->addNewEmployee();
            $this->session->set_flashdata('flash', 'created.');
            redirect('master/employee','refresh');
        }
    }

    public function update_employee($id)
    {
        $data['title'] = 'Employee';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['employee'] = $this->Master_model->getEmployeeById($id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('department', 'Department', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('master/employee_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Master_model->updateEmployee();
            $this->session->set_flashdata('flash', 'changed.');
            redirect('master/employee','refresh');
        }
    }

    public function delete_employee($id)
    {
        $this->Master_model->deleteEmployee($id);
        $this->session->set_flashdata('flash', 'deleted successfully.');
        redirect('master/employee','refresh');
    }

}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */