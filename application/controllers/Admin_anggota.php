<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_anggota extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('login');
        }

    }

    // read
    public function index() {

        $id      = array( 'id_user' => $this->session->userdata('id_user') );
        $data = array(  'title'     => 'Admin Kelurahan | Tim Sukses',
                        'isi'       => 'admin/dashboard/adminAnggota/daftar_pemilih',
                        'data'      => $this->Crud->gw( 'daftar_pemilih', $id ),
                        'dataScript'=> 'admin/dataScript/tabel-script' );
    
        $this->load->view('admin/_layout/wrapper', $data);
    }

    // public function getKelurahanPosition(){
    //     $location_id = $this->input->post('kecamatan');
    //     $FeesPeriod = $this->HomeModel->getKelurahanP($location_id);
    //     if (count($FeesPeriod)>0) {
    //         $fee_select_box = '';
    //         $fee_select_box .= '<option id="">Select Fee Period</option>';
    //         foreach ($FeesPeriod as $fees) {
    //         $fee_select_box .= '<option id="' . $fees->admission_fee_1 . '">Monthly</option>+
    //                             <option id="' . $fees->admission_fee_3 . '">Quarterly</option>+
    //                             <option id="' . $fees->admission_fee_6 . '">Half Yearly</option>+
    //                             <option id="' . $fees->admission_fee_12 . '">Yearly</option>';
    //         }
    //         echo json_encode($fee_select_box);
    //     }

    // }

    public function myformAjax($id) { 
        $result = $this->db->where("id_kecamatan",$id)->get("kelurahan")->result();
        echo json_encode($result);
    }

    //Tambah Pemilih
    //Direct
    public function tambahPemilih(){
            
            $data   = array(    'title'     => 'Admin Anggota | Tim Sukses',
                                'isi'       => 'admin/form/formTambahPemilihAA',
                                // 'data'   => $this->Crud->ga( 'customer' ),
                                'kec'       => $this->Crud->ga('kecamatan'),
                                'kel'       => $this->Crud->ga('kelurahan'),
                                'dataScript'=> 'admin/dataScript/tabel-script' );
        
        $this->load->view('admin/_layout/wrapper', $data);
    }

    //tambah pemilih
    public function tambahPemilihAction(){
        // $input = $this->input->post(NULL, TRUE); //get all post with xss filter

        // $items = array(//save all post in array
        //     'id_user' => $this->session->userdata('id_user'),
        //     'no_ktp_pemilih' => $input['no_ktp'],
        //     'nama_pemilih' => $input['nama_pemilih'],
        //     'alamat_pemilih' => $input['alamat'],
        //     'no_hp_pemilih' => $input['no_hp']
        // );

        // $this->Crud->i('daftar_pemilih', $items ); //save in database
        // $this->session->set_flashdata('update_sukses', 'Update Berhasil !'); //for notif it is succes

        $id_user    = $this->session->userdata('id_user');
        $no_ktp     = $this->input->post('no_ktp');
        $nama       = $this->input->post('nama_pemilih');
        $alamat     = $this->input->post('alamat');
        $no_hp      = $this->input->post('no_hp');
        $kecamatan  = $this->input->post('pilih_kecamatan');
        $kelurahan  = $this->input->post('pilih_kelurahan');
        
        
        $this->HomeModel->tambahPemilih($id_user, $no_ktp, $nama, $alamat, $no_hp, $kecamatan, $kelurahan);

        redirect('Admin_anggota/tambahPemilih');
    }

    //Detail Pemilih
    //direct
    public function selectPemilih($id_pemilih = null){
            $where      = array( 'id_pemilih' => $id_pemilih );
            // $where      = array( 'estimasi.id_estimasi' => $id_estimasi, );
            // $user       = array( 'level' => $level);
            $content    = 'admin/form/formEditPemilihAA';

            $data = array(  'title'     => 'PTM | U-Care',
                            'isi'       => $content,
                            // 'data'      => $this->PtmModel->detail_customer($where),//get detail estimasi
                            // 'data3'     => $this->PtmModel->detail_item($where),//get detail estimasi
                            'data'     => $this->Crud->gw( 'daftar_pemilih', $where),//post ketua tim ke estimasi
                            // 'data2'     => $this->Crud->gw( 'user', $user ),//get teknisi
                            'dataScript'=> 'admin/dataScript/tabel-script' );    
        $this->load->view('admin/_layout/wrapper', $data);
    }

    //update data pemilih
    public function selectPemilihAction($id_pemilih){
        $input = $this->input->post(NULL, TRUE);
        $where = array( 'id_pemilih' => $id_pemilih );

        $items = array(
                        'id_user' => $this->session->userdata('id_user'),
                        // 'no_kk_pemilih' => $input['no_kk'],
                        'no_ktp_pemilih' => $input['no_ktp'],
                        'nama_pemilih' => $input['nama_pemilih'],
                        'alamat_pemilih' => $input['alamat'],
                        'no_hp_pemilih' => $input['no_hp']
                      );

        $this->Crud->u('daftar_pemilih', $items, $where );

        redirect(base_url('Admin_anggota'));
        // echo $id_estimasi;
    }

    //For User Detail And Update
    public function profile(){
        $data = array(
                        'title'     => 'AK | TIMSES',
                        'isi'       => 'admin/form/formProfileAA',
                        'dataScript'=> 'admin/dataScript/beranda-script',
        );

        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function userUpdateAction(){
        $input = $this->input->post(NULL, TRUE); //get all post with xss filter

        //deteck with password or not
        if($input['new_pass']==NULL){
            $items = array(//save all post in array
                'nama_lengkap_user' => $input['nama_lengkap'],
                'username' => $input['username'],
            );
        }else{
            $items = array(//save all post in array
                'nama_lengkap_user' => $input['nama_lengkap'],
                'username' => $input['username'],
                'password' => md5($input['new_pass']),
            );
        }

        $where = array(//get id for models Crud params w
            "id_user" => $this->session->userdata('id_user'),
        );

        //update session
        $sess = array(
            "nama_user" => $input['nama_lengkap'],
            "username" => $input['username'],
        );
        $this->session->set_userdata($sess);

        $this->Crud->u('user', $items, $where ); //save in database
        $this->session->set_flashdata('update_sukses', 'Update Berhasil !'); //for notif it is succes

        redirect('Admin_anggota');
    }
}
