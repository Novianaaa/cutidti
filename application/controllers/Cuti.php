<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cuti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Pastikan user login
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    // Default ke pengajuan
    public function index()
    {
        redirect('cuti/pengajuan');
    }

    // Halaman pengajuan cuti
    public function pengajuan()
    {
        $data['title'] = 'Cuti';
        $data['subtitle'] = 'Pengajuan';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('cuti/pengajuan', $data);
        $this->load->view('templates/footer');
    }

    // Halaman approval cuti
    public function approval()
    {
        $data['title'] = 'Cuti';
        $data['subtitle'] = 'Approval';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('cuti/approval', $data);
        $this->load->view('templates/footer');
    }

    // Halaman riwayat cuti
    public function riwayat()
    {
        $data['title'] = 'Cuti';
        $data['subtitle'] = 'Riwayat';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('cuti/riwayat', $data);
        $this->load->view('templates/footer');
    }
}
