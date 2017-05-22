<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 22/05/2017
 * Time: 23.37
 */

class Beranda extends CI_Controller {
    function index(){
        $data['user'] = $this->session->userdata('username');
        $this->load->view('public/beranda', $data);
    }
    function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('public/login');
    }
}

?>