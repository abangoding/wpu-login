<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Laptop_model');
    }

	public function index()
    {
        $data['title'] = 'Asset';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('inventory/inventory_index', $data);
        $this->load->view('templates/footer');
    }

    public function laptop()
    {
        $data['title'] = 'Asset';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['laptop'] = $this->Laptop_model->getAllLaptop();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('inventory/laptop/laptop_index', $data);
        $this->load->view('templates/footer');
    }

}

/* End of file Inventory.php */
/* Location: ./application/controllers/Inventory.php */