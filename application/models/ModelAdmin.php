<?php
defined('BASEPATH') or exit('No direct script acces allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 23/05/2017
 * Time: 13.52
 */

class ModelAdmin extends CI_Model{

    // mengambil semua data user
    public function tampil_user(){
        return $this->db->get('user');
    }

    // menghapus user sesuai id-nya
    public function hapus_user($where){
        $this->db->where($where);
        $this->db->delete('user');
    }
}
?>