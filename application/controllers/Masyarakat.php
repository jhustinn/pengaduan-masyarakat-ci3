<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masyarakat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // is_logged_in();
    }

    public function index()
    {

        $data['title'] = 'Masyarakat';
        $data['user'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();



        // echo 'Selamat datang ' . $data['user']['name'] . '!' ;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('masyarakat/index', $data);
        $this->load->view('templates/footer', $data);

    }

    public function pengaduan()
    {

        if (!$this->session->userdata('username')) {
            is_logged_in();
        } else {
            // $data['title'] = 'Dashboard';
            $data['user'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
            $nik = $this->session->userdata('nik');



            $this->form_validation->set_rules('isi_pengaduan', 'Isi Pengaduan', 'required|trim');
            // $this->form_validation->set_rules('foto', 'Bukti Foto', 'required|trim');

            if ($this->form_validation->run() == false) {
                $data['title'] = "Masyarakat";
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('masyarakat/index', $data);
                $this->load->view('templates/footer', $data);
            } else {

                $isi_pengaduan = $this->input->post('isi_pengaduan');
                // $foto = $this->input->post('foto');

                $upload_image = $_FILES['foto']['name'];

                // var_dump($upload_image);
                // var_dump($isi_pengaduan);
                // die;

                if ($upload_image) {
                    $config['upload_path'] = './assets/img/bukti_foto/';
                    $config['allowed_types'] = 'gif|jpg|png|webp';
                    $config['max_size'] = '2048';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('foto')) {
                        $new_image = $this->upload->data('file_name');
                        $this->db->set('foto', $new_image);
                    } else {
                        echo $this->upload->display_errors();
                    }
                }


                $data = [
                    'isi_pengaduan' => $isi_pengaduan,
                    'tgl_pengaduan' => date('y-m-d'),
                    'nik' => $nik,
                    'foto' => $new_image,
                    'status' => 'disposisi'
                ];

                // var_dump($data);
                // die;

                $this->db->insert('pengaduan', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Pengaduan berhasil dikirim!
            </div>');
                redirect('masyarakat');

            }
        }



    }



}