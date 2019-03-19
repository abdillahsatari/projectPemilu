<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	/*
	| -------------------------------------------------------------------
	| ADMIN CONTROLLER
	| -------------------------------------------------------------------
	| USAHAKAN BERIKAN KOMENTAR UNTUK SETIAP FUNGSI AGAR BISA DI MENGERTI
	| DENGAN CEPAT (^_^)9
    | sdfdsf
	|
	| MAIN INFORMATION :
	| $data 		=> digunakan untuk membungkus informasi - informasi terkait page tertentu
	| dataScript 	=> digunakan untuk memasukkan file javascript yang hanya digunakan pada
	| 				halaman tertentu , (untuk optimasi) di view/nama_folder/dataScript
	*/
    public function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('login');
        }
        $this->load->model('Crud');

    }

    public function index() {
        $data = array(  'title'     => 'Timsukses Dashboard',
                        'isi'       => 'admin/dashboard/beranda',
                    	'dataScript'=> 'admin/dataScript/beranda-script');
        $this->load->view('admin/_layout/wrapper', $data);
    }

     public function myformAjax($id) { 
        $result = $this->db->where("id_kecamatan",$id)->get("kelurahan")->result();
        echo json_encode($result);
    }

}
