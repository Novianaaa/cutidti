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
    //tombol simpan di form pengajuan 
    public function form()
    {
        $this->load->view('pengajuan');
    }
    public function simpan()
    {
        // Tidak ada penyimpanan ke database
        // Hanya redirect dengan pesan sukses
        $this->session->set_flashdata('success', 'Data cuti berhasil disimpan!');
        redirect('cuti/riwayat');
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
    public function detailriwayat()
    {

        $data['title'] = 'Cuti';
        $data['subtitle'] = 'Riwayat';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('cuti/detailriwayat', $data);
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

        $data['subtitle'] = 'Approval';

        // --- DUMMY data, ganti nanti dengan query model ---
        $data['pengajuan'] = [
            (object)[
                'id' => 1,
                'nama' => 'Budi Santoso',
                'tgl_pengajuan' => '2025-09-01',
                'tgl_mulai' => '2025-09-05',
                'tgl_masuk' => '2025-09-11',
                'keterangan' => 'Cuti tahunan keluarga'
            ],
            (object)[
                'id' => 2,
                'nama' => 'Ani Susanti',
                'tgl_pengajuan' => '2025-09-07',
                'tgl_mulai' => '2025-09-10',
                'tgl_masuk' => '2025-09-14',
                'keterangan' => 'Cuti sakit'
            ],
        ];
        // ---------------------------------------------------

        // load view (sesuaikan struktur template kamu)
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('cuti/approval', $data);   // pastikan file ini ada
        $this->load->view('templates/footer', $data);
    }

    // Form approval per item (dummy)
    public function approvalform($id = null)
    {
        $data['title'] = 'Cuti';
        $data['subtitle'] = 'Riwayat';
        $data['user'] = $this->db->get_where('user', [
            'email' => $this->session->userdata('email')
        ])->row_array();


        if ($id === null) show_404();

        $data['subtitle'] = 'Approval';
        // dummy single item
        $data['pengajuan'] = (object)[
            'id' => $id,
            'nama' => 'Budi Santoso',
            'tgl_pengajuan' => '2025-09-01',
            'tgl_mulai' => '2025-09-05',
            'tgl_masuk' => '2025-09-11',
            'keterangan' => 'Cuti tahunan keluarga'
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('cuti/approvalform', $data);
        $this->load->view('templates/footer', $data);
    }

    // Simpan approval (dummy)
    public function approval_save($id = null)
    {
        // di sini nanti proses update DB
        $this->session->set_flashdata('success', 'Status approval berhasil disimpan!');
        redirect('cuti/approval');
    }
}
