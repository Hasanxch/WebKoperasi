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
        $this->load->view('admin/dashboard');
    }

    function user() {
        $data['user'] = $this->ModelAdmin->tampil_user()->result();
        $this->load->view('admin/user', $data);
    }

    function tambah_user(){
        $this->load->view('admin/tambah_user');
    }

    function sistem(){
        $this->load->view('admin/sistem');
    }

    function pengaturan(){
        $this->load->view('admin/pengaturan');
    }

    function hapus_user($id) {
        $where = array('id_user' => $id);
        $this->ModelAdmin->hapus_user($where);
        redirect('user');
    }

    function update_user($id){

    }

    function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('login');
    }
}