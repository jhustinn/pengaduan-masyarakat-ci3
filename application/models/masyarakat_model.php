<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat_model extends CI_Model    
{

    public function getMasyarakat() {
        $nik = $this->session->userdata('nik');
        $query = "SELECT * FROM `masyarakat` WHERE `nik`= $nik ";

        return $this->db->query($query)->result_array();
    }
    // public function getAdmin() {
    //     $query = "SELECT * FROM `petugas` WHERE `level`= 'admin' ";

    //     return $this->db->query($query)->result_array();
    // }

}