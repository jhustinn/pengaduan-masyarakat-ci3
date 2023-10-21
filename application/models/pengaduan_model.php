<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan_model extends CI_Model
{

    public function getPengaduan()
    {
        // $nik = $this->session->userdata('nik');
        $query = "SELECT * FROM `pengaduan` JOIN `masyarakat` ON `pengaduan`.`nik` = `masyarakat`.`nik`";

        return $this->db->query($query)->result_array();
    }

    public function getJmlPengaduan()
    {
        $query = "SELECT * FROM `pengaduan` JOIN `masyarakat` ON `pengaduan`.`nik` = `masyarakat`.`nik`";

        return $this->db->query($query)->num_rows();
    }
    public function getAduanSelesai()
    {
        $query = "SELECT * FROM `pengaduan` WHERE `status` = 'selesai'";

        return $this->db->query($query)->num_rows();
    }
    public function getAduanProses()
    {
        $query = "SELECT * FROM `pengaduan` WHERE `status` = 'proses'";

        return $this->db->query($query)->num_rows();
    }
    public function getAduanDisposisi()
    {
        $query = "SELECT * FROM `pengaduan` WHERE `status` = 'disposisi'";

        return $this->db->query($query)->num_rows();
    }

}