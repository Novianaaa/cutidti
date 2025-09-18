<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // Tambahkan baris-baris ini
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model'); // Baris ini yang paling penting
    }

    public function index()
    {
        $data['title'] = 'Dashboard'; // <- ini kunci biar sidebar dashboard aktif
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    // Halaman User
    public function datastaff($id = null)
    {
        $data['title'] = 'User';
        $data['subtitle'] = 'Data Staff';

        // Data user login (profile)
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Logika utama: Cek apakah ID ada atau tidak
        if ($id) {
            // Jika ada ID, tampilkan data user tunggal
            $data['staff'] = $this->User_model->getUserById($id);
            // Periksa apakah data ditemukan
            if (empty($data['staff'])) {
                // Jika data tidak ada, tampilkan pesan atau alihkan
                // Ini akan mencegah kesalahan "Trying to get property of non-object" di view
                $data['staff'] = 'Data tidak ditemukan.';
            }
        } else {
            // Jika tidak ada ID, tampilkan semua data user
            $data['staff'] = $this->User_model->getAllUsers();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datastaff', $data);
        $this->load->view('templates/footer');
    }

    //Datail Data Staff
    public function detailStaff($id)
    {
        // Form Pencarian 
        $keyword = $this->input->get('keyword');

        if ($keyword) {
            $data['staff'] = $this->User_model->searchStaff($keyword);
        } else {
            $data['staff'] = $this->User_model->getAllUsers();
        }
        // Cek apakah user login
        $data['title'] = 'User';
        $data['subtitle'] = 'Data Staff';

        // Data user login (profile)
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Panggil fungsi model untuk mendapatkan data user berdasarkan ID
        $data['user'] = $this->User_model->getUserById($id);
        // Load view
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detailstaff', $data); // Buat view baru
        $this->load->view('templates/footer');
    }

    public function datacuti()
    {
        $data['title'] = 'User';
        $data['subtitle'] = 'Data Cuti';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datacuti', $data);
        $this->load->view('templates/footer');
    }

    public function laporan()
    {
        $data['title'] = 'User';
        $data['subtitle'] = 'Laporan';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('templates/footer');
    }
}
