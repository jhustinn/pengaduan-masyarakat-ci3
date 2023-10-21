<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model
{

    public function getPetugas()
    {
        $query = "SELECT * FROM `petugas` WHERE `level`= 'petugas' ";

        return $this->db->query($query)->result_array();
    }
    // public function getAdmin() {
    //     $query = "SELECT * FROM `petugas` WHERE `level`= 'admin' ";

    //     return $this->db->query($query)->result_array();
    // }

}
;