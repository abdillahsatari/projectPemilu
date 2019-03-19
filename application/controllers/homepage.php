<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	/*
	| -------------------------------------------------------------------
	| HOMEPAGE CONTROLLER
	| -------------------------------------------------------------------
	| USAHAKAN BERIKAN KOMENTAR UNTUK SETIAP FUNGSI AGAR BISA DI MENGERTI
	| DENGAN CEPAT (^_^)9
	|
	| MAIN INFORMATION :
	| $data 		=> digunakan untuk membungkus informasi - informasi terkait page tertentu
	| dataScript 	=> digunakan untuk memasukkan file javascript yang hanya digunakan pada
	| 				halaman tertentu , (untuk optimasi) di view/nama_folder/dataScript
	*/
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array( 'title'     => 'Timses Adni Vivin' );
        $this->load->view('homepage/index', $data);
    }

}
