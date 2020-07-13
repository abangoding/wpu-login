<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Laptop_model');
    }

	public function index()
    {
        $data['title'] = 'Inventory';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('inventory/inventory_index', $data);
        $this->load->view('templates/footer');
    }

}

/* End of file Asset.php */
/* Location: ./application/controllers/Asset.php */