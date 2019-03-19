<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Makassar');
    }

    public function index() {
         
            // $where      = array( 'id_customer' => $id_customer );
            // $content    = 'admin/dashboard/customer/customerDetail';
        $id      = array( 	'id_user' => $this->session->userdata('id_user') );
        $data 	 = array(  	'title'     => 'Super Admin | Tim Sukses',
                        	'isi'       => 'admin/form/formRegister',
                        	'data'      => $this->Crud->gw( 'daftar_pemilih', $id ),
                        	'dataScript'=> 'admin/dataScript/tabel-script' );
    

        // $this->load->view('admin/_layout/wrapperv2', $data);
        $this->load->view('admin/register/register_view');
    }

    public function tambahAnggota(){

    	$no_ktp 	= $this->input->post('no_ktp_anggota');
    	$nama 		= $this->input->post('nama_anggota');
    	$alamat 	= $this->input->post('alamat_anggota');
    	$no_hp 		= $this->input->post('no_hp_anggota');
    	$username 	= $this->input->post('username_anggota');
        $cek_pass 	= $this->input->post('password_anggota');
        $password 	= md5($cek_pass);
        $this->HomeModel->daftarAnggota($no_ktp, $nama, $alamat, $no_hp, $username, $password);
	}
}