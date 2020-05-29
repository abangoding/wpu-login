<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->load->model('Setting_model');
    }
    
    public function menu()
    {
        $data['title'] = 'Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->Setting_model->getAllMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('setting/menu_index', $data);
        $this->load->view('templates/footer');
    }

    public function submenu()
    {
        $data['title'] = 'Submenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['submenu'] = $this->Setting_model->getAllSubmenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('setting/submenu_index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('menu', 'Menu', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('setting/menu_tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Setting_model->addNewMenu();
            $this->session->set_flashdata('flash', 'created.');
            redirect('setting/menu','refresh');
        }
    }

    public function tambah_submenu()
    {
        $data['title'] = 'Submenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Setting_model->getAllMenu();

        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('setting/submenu_tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Setting_model->addNewSubmenu();
            $this->session->set_flashdata('flash', 'created.');
            redirect('setting/submenu','refresh');
        }
    }

    public function hapus($id)
    {
        $this->Setting_model->deleteMenu($id);
        $this->session->set_flashdata('flash', 'deleted successfully.');
        redirect('setting/menu','refresh');
    }

    public function hapus_submenu($id)
    {
        $this->Setting_model->deleteSubmenu($id);
        $this->session->set_flashdata('flash', 'deleted successfully.');
        redirect('setting/submenu','refresh');
    }

    public function ubah($id)
    {
        $data['title'] = 'Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->Setting_model->getMenuById($id);

        $this->form_validation->set_rules('menu', 'Menu', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('setting/menu_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Setting_model->updateMenu();
            $this->session->set_flashdata('flash', 'changed.');
            redirect('setting/menu','refresh');
        }
    }

    public function ubah_submenu($id)
    {
        $data['title'] = 'Submenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['submenu'] = $this->Setting_model->getSubmenuById($id);
        $data['menu'] = $this->Setting_model->getAllMenu();

        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('setting/submenu_ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Setting_model->updateSubmenu();
            $this->session->set_flashdata('flash', 'changed.');
            redirect('setting/submenu','refresh');
        }
    }
}
