<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_kelurahan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('login');
        }

    }

    // read
    public function index() {

        $id      = array( 'id_user' => $this->session->userdata('id_user') );
        $data    = array(  'title'     => 'Super Admin | Tim Sukses',
                        'isi'       => 'admin/dashboard/adminKelurahan/daftar_pemilih',
                        'data'      => $this->Crud->gw( 'daftar_pemilih', $id ),
                        'dataScript'=> 'admin/dataScript/tabel-script' );
    
        $this->load->view('admin/_layout/wrapper', $data);
    }

    //DAFTAR TIM SUKSES
    // public function daftarTeam(){
    //         $content    = 'admin/dashboard/adminKelurahan/daftar_team';

    //         $data = array(  'title'     => 'Admin Kelurahan | Tim Sukses',
    //                         'isi'       => $content,
    //                         'data'      => $this->Crud->ga( 'user' ),//get detail estimasi
    //                         'dataScript'=> 'admin/dataScript/tabel-script' );    
    //     $this->load->view('admin/_layout/wrapper', $data);
    // }

    // public function selectAnggota($id_user = null){
    //         $where      = array( 'id_user' => $id_user );
    //         $content    = 'admin/form/formAktivasiAnggota';

    //         $data = array(  'title'     => 'Verifikasi',
    //                         'isi'       => $content,
    //                         'data'      => $this->Crud->gw('user',$where),//get detail estimasi
    //                         'dataScript'=> 'admin/dataScript/tabel-script' );    
    //     $this->load->view('admin/_layout/wrapper', $data);
    // }

    // public function selectAnggotaAction($id_user){
    //     $input = $this->input->post(NULL, TRUE);
    //     $where = array( 'id_user' => $id_user );

    //     //deteck with password or not
    //     if($input['new_pass']==NULL){
    //         $items = array(//save all post in array
    //             'status_approved' => $input['status_approved'],
    //             'level' => $input['level'],
    //         );
    //     }else{
    //         $items = array(//save all post in array
    //             'status_approved' => $input['status_approved'],
    //             'level' => $input['level'],
    //             'password' => md5($input['new_pass']),
    //         );
    //     }

    //     $this->Crud->u('user', $items, $where ); //save in database
    //     $this->session->set_flashdata('update_sukses', 'Update Berhasil !'); //for notif it is succes

    //     redirect(base_url('Admin_kelurahan/daftarTeam'));
    //     // echo $id_estimasi;
    // }

    // //info team sukses
    // public function infoTeam(){
    //         $content    = 'admin/dashboard/adminKelurahan/info_team';

    //         $data = array(  'title'     => 'Super Admin | Tim Sukses',
    //                         'isi'       => $content,
    //                         // 'data'      => $this->PtmModel->detail_customer(),//get detail estimasi
    //                         'dataScript'=> 'admin/dataScript/tabel-script' );    
    //     $this->load->view('admin/_layout/wrapper', $data);
    // }

    //Tambah Pemilih
    //Direct
    public function tambahPemilih(){
            $data = array(  'title'     => 'Admin Anggota | Tim Sukses',
                            'isi'       => 'admin/form/formTambahPemilihAK',
                            // 'data'      => $this->Crud->ga( 'customer' ),
                            'dataScript'=> 'admin/dataScript/tabel-script' );
        
        $this->load->view('admin/_layout/wrapper', $data);
    }

    public function tambahPemilihAction(){
        // $input = $this->input->post(NULL, TRUE); //get all post with xss filter

        // $items = array(//save all post in array
        //     'id_user' => $this->session->userdata('id_user'),
        //     'no_kk_pemilih' => $input['no_kk'],
        //     'no_ktp_pemilih' => $input['no_ktp'],
        //     'nama_pemilih' => $input['nama_pemilih'],
        //     'alamat_pemilih' => $input['alamat'],
        //     'no_hp_pemilih' => $input['no_hp']
        // );

        // $this->Crud->i('daftar_pemilih', $items ); //save in database
        // // $this->session->set_flashdata('update_sukses', 'Update Berhasil !'); //for notif it is succes

        // redirect('Admin_kelurahan');
        $id_user    = $this->session->userdata('id_user');
        $no_ktp     = $this->input->post('no_ktp');
        $nama       = $this->input->post('nama_pemilih');
        $alamat     = $this->input->post('alamat');
        $no_hp      = $this->input->post('no_hp');
        // $halaman    = ''
        
        $this->HomeModel->tambahPemilih($id_user, $no_ktp, $nama, $alamat, $no_hp);

        redirect('Admin_kelurahan/tambahPemilih');
    }

    //Detail Pemilih
    //direct
    public function selectPemilih($id_pemilih = null){
            $where      = array( 'id_pemilih' => $id_pemilih );
            // $where      = array( 'estimasi.id_estimasi' => $id_estimasi, );
            // $user       = array( 'level' => $level);
            $content    = 'admin/form/formEditPemilihAK';

            $data = array(  'title'     => 'PTM | U-Care',
                            'isi'       => $content,
                            'data'      => $this->Crud->gw( 'daftar_pemilih', $where),
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
                        'isi'       => 'admin/form/formProfileAk',
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

        redirect('Admin_kelurahan');
    }
}
