<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 22/05/2017
 * Time: 23.29
 */
class Admin extends CI_Controller{
    function __construct(){
        parent::__construct();
        if (!($this->session->userdata('level') === 'admin')) {
            if (!$this->session->userdata('username')){
                redirect('login');
            }
            redirect('login');
        }
        $this->load->model('ModelAdmin');
    }
    function index(){
        $this->load->view('admin/ringkasan');
    }
    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('beranda');
    }
}