<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        is_logged_in();
    }

    public function index()
    {

        if ($this->session->userdata('level') != 'petugas') {
            redirect('auth/blocked');
        }

        $this->load->model('Petugas_model', 'petugas');
        $this->load->model('Masyarakat_model', 'masyarakat');
        $this->load->model('Pengaduan_model', 'pengaduan');
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['petugas'] = $this->petugas->getPetugas();
        // $data['masyarakat'] = $this->masyarakat->getMasyarakat();
        $data['pengaduan'] = $this->pengaduan->getPengaduan();
        $data['jmlpengaduan'] = $this->pengaduan->getJmlPengaduan();
        $data['selesai'] = $this->pengaduan->getAduanSelesai();
        $data['proses'] = $this->pengaduan->getAduanProses();
        $data['disposisi'] = $this->pengaduan->getAduanDisposisi();
        $data['title'] = 'Petugas';

        $data['button'] = function ($status, $d) {
            $button = '<td><button type="button" value=';
            $btnTanggapan = ' data-toggle="modal" class="btn btn-warning modalTanggapanBtn">Beri Tanggapan</button></td>';
            $btnLihat = ' data-toggle="modal" class="btn btn-primary modalLihatBtn">Lihat</button></td>';
            if ($status == 'disposisi') {
                echo $button . $d . $btnTanggapan;
            } else if ($status == 'proses') {
                echo $button . $d . $btnLihat;
            } else if ($status == 'selesai') {
                echo $button . $d . $btnLihat;
            }
        };

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('petugas/index', $data);
        $this->load->view('templates/footer', $data);
    }

    // Actions Button

    // Edit Room Modal
    public function modalTanggapan($id)
    {
        if (isset($id)) {
            $id_pengaduan = $id;

            $query = "SELECT * FROM pengaduan WHERE id_pengaduan = '$id_pengaduan' LIMIT 1";
            // $this->db->get_where('pengaduan', 'id_pengaduan' == $id); 
            $query_run = $query;

            if (mysqli_num_rows($query_run) == 1) {

                $room = mysqli_fetch_array($query_run);

                $res = [
                    'status' => 200,
                    'message' => 'Student Fetch Successfully',
                    'data' => $room
                ];
                echo json_encode($res);
                return false;
            } else {
                $res = [
                    'status' => 404,
                    'message' => 'Student ID Not Found'
                ];
                echo json_encode($res);
                return false;
            }
        }
    }

}