<?php
defined('BASEPATH') or exit('No direct script acces allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 22/05/2017
 * Time: 23.43
 */

class ModelUser extends CI_Model{
    function cek_user($data){
        return $this->db->get_where('user', $data);
    }
}

?>