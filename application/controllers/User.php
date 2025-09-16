<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User  extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard'; // <- ini kunci biar sidebar dashboard aktif
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->model('User_model');
        $data['users'] = $this->User_model->getAllUsers();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function profile()
    {
        $data['title'] = 'User';        // menu parent
        $data['subtitle'] = 'Profile'; // menu child yang aktif
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/footer');
    }
}
