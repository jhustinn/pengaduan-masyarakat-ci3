<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        is_logged_in();
    }

    public function index()
    {

        if ($this->session->userdata('level') != 'admin') {
            redirect('auth/blocked');
        }

        $this->load->model('Petugas_model', 'petugas');
        $this->load->model('Masyarakat_model', 'masyarakat');
        $this->load->model('Pengaduan_model', 'pengaduan');
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->petugas->getPetugas();
        // $data['masyarakat'] = $this->masyarakat->getMasyarakat();
        $data['pengaduan'] = $this->pengaduan->getPengaduan();
        // $data['petugas'] = $this->db->get_where('petugas', ['level' => 'petugas'])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambahPetugas()
    {
        $this->load->model('Petugas_model', 'petugas');
        $this->load->model('Masyarakat_model', 'masyarakat');
        $this->load->model('Pengaduan_model', 'pengaduan');
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->petugas->getPetugas();
        $data['masyarakat'] = $this->masyarakat->getMasyarakat();
        $data['pengaduan'] = $this->pengaduan->getPengaduan();

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('telp', 'No Telp', 'trim|required');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => "Password Tidak Sama!",
            'min_length' => "Password Terlalu Pendek!"
        ]);
        $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $name = $this->input->post('nama');
            $username = $this->input->post('username');
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $telp = $this->input->post('telp');

            $data = [
                'nama' => $name,
                'username' => $username,
                'password' => $password,
                'telp' => $telp,
                'level' => 'petugas',
                'dinas_id' => ''
            ];

            $this->db->insert('petugas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Petugas berhasil ditambahkan!
            </div>');
            redirect('admin');
        }
    }


    // public function delete($id)
    // {
    //     $this->db->where('id' == $id);
    //     $this->db->delete('user');
    //     redirect('admin');
    // }


}