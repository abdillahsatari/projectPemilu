<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('login');
        }

    }

    //01_daftar Pemilih
    public function index() {

        // $content        = 'admin/dashboard/superAdmin/daftar_pemilih';

        // $id             = array(  'id_user'     => $this->session->userdata('id_user') );
        // $data           = array(  'title'       => 'Super Admin | Tim Sukses',
        //                           'isi'         => $content,
        //                           'data'        => $this->Crud->gw( 'daftar_pemilih', $id ),
        //                           'dataScript'  => 'admin/dataScript/tabel-script' );
    

        // $this->load->view('admin/_layout/wrapper', $data);
        redirect(base_url('Super_admin/tambahPemilih'));
    }

    //01_Detail Pemilih
    //ke halama detail pemilih
    public function selectPemilih($id_pemilih = null){

        $where1         = array('id_kecamatan'  => '1');
        $where2         = array('id_kecamatan'  => '2');
        $where3         = array('id_kecamatan'  => '3');

        $content        = 'admin/form/formEditPemilihSA';

        $where          = array( 'id_pemilih'   => $id_pemilih );
        $data           = array( 'title'        => 'SA | TIMSES',
                                 'isi'          => $content,
                                 'data'         => $this->Crud->gw( 'daftar_pemilih', $where),
                                 'kec'          => $this->Crud->ga('kecamatan'),
                                 'kel1'         => $this->Crud->gw('kelurahan', $where1),
                                 'kel2'         => $this->Crud->gw('kelurahan', $where2),
                                 'kel3'         => $this->Crud->gw('kelurahan', $where3),
                                 'count'        => $this->HomeModel->get_count(),
                                 'count1'       => $this->HomeModel->get_mamajang(),
                                 'count2'       => $this->HomeModel->get_mariso(),
                                 'count3'       => $this->HomeModel->get_tamalate(),
                                 'dataScript'   => 'admin/dataScript/tabel-script' );    
        $this->load->view('admin/_layout/wrapper', $data);
    }

    //01_update data pemilih
    public function selectPemilihAction($id_pemilih){

        $input          = $this->input->post(NULL, TRUE);
        $where          = array( 'id_pemilih'    => $id_pemilih );
        $items          = array( 'id_user'       => $this->session->userdata('id_user'),
                                 // 'no_kk_pemilih' => $input['no_kk'],
                                 'no_ktp_pemilih'=> $input['no_ktp'],
                                 'nama_pemilih'  => $input['nama_pemilih'],
                                 'alamat_pemilih'=> $input['alamat'],
                                 'no_hp_pemilih' => $input['no_hp'],
                                 'no_tps'        => $input['no_tps'],
                                 'id_kecamatan'  => $input['pilih_kecamatan'],
                                 'id_kelurahan'  => $input['pilih_kelurahan'],
                                );

        $this->Crud->u('daftar_pemilih', $items, $where );
        redirect(base_url('Super_admin/pemilihMamajang'));
    }

    //02_Tambah Pemilih
    //ke halaman tambah pemilih
    public function tambahPemilih(){

        $where1         = array('id_kecamatan'  => '1');
        $where2         = array('id_kecamatan'  => '2');
        $where3         = array('id_kecamatan'  => '3');

        $content        = 'admin/form/formTambahPemilihSA';

        $data           = array( 'title'        => 'Super Admin | Tim Sukses',
                                 'isi'          => $content,
                                 'kec'          => $this->Crud->ga('kecamatan'),
                                 'kel1'         => $this->Crud->gw('kelurahan', $where1),
                                 'kel2'         => $this->Crud->gw('kelurahan', $where2),
                                 'kel3'         => $this->Crud->gw('kelurahan', $where3),
                                 'count'        => $this->HomeModel->get_count(),
                                 'count1'       => $this->HomeModel->get_mamajang(),
                                 'count2'       => $this->HomeModel->get_mariso(),
                                 'count3'       => $this->HomeModel->get_tamalate(),
                                 'dataScript'   => 'admin/dataScript/tabel-script' );
        
        $this->load->view('admin/_layout/wrapper', $data);
    }

    //02_aksi tambah pemilih
    public function tambahPemilihAction(){

        $id_user        = $this->session->userdata('id_user');
        $no_ktp         = $this->input->post('no_ktp');
        $nama           = $this->input->post('nama_pemilih');
        $alamat         = $this->input->post('alamat');
        $no_hp          = $this->input->post('no_hp');

        $no_tps         = $this->input->post('no_tps');
        $kecamatan      = $this->input->post('pilih_kecamatan');
        $kelurahan      = $this->input->post('pilih_kelurahan');
        
        $this->HomeModel->tambahPemilih($id_user, $no_ktp, $nama, $alamat, $no_hp, $no_tps, $kecamatan, $kelurahan);
        redirect('Super_admin/tambahPemilih');
    }

    public function ajaxInputSwal(){

      $input            = $this->input->post(NULL, TRUE);
      $query1           = $this->db->get_where('daftar_pemilih', array('no_ktp_pemilih' => $input['no_ktp']));

      //ada data di db
      if($query1->num_rows()>0){
          // $this->session->set_flashdata('error', 'Pemilih Sudah Terdaftar');
          echo 'error';
      }
      //tidak ada data di db
      else{
          // $input        = $this->input->post(NULL, TRUE);
          $items        = array(
                                'id_user'            => $this->session->userdata('id_user'),
                                'no_ktp_pemilih'     => $input['no_ktp'],
                                'nama_pemilih'       => $input['namaPemilih'],
                                'alamat_pemilih'     => $input['alamat'],
                                'no_hp_pemilih'      => $input['no_hp'],
                                'no_tps'             => $input['no_tps'],
                                'id_kecamatan'       => $input['selectKecamatan'],
                                'id_kelurahan'       => $input['selectKelurahan'],
                            );

          $this->Crud->i('daftar_pemilih', $items);
          echo 'success';
          // $this->session->set_flashdata('success', 'Pemilih Berhasil Ditambahkan');
      }
    }

    //03 hapus pemilih
    public function hapusPemilih($id_pemilih){
        $this->HomeModel->hapus_pemilih($id_pemilih);
        redirect('Super_admin/pemilihMamajang');
    }

    //03_verifikasi anggota
    public function verifikasiAnggota(){

        $content        = 'admin/dashboard/superAdmin/daftar_team';

        $verified       = 'SELECT * FROM user WHERE status_approved != "" AND level IS NOT NULL';
        $not_verified   = 'SELECT * FROM user WHERE level = "" AND status_approved = ""';

        $data           = array(  'title'       => 'Super Admin | Tim Sukses',
                                  'isi'         => $content,
                                  'data'        => $this->Crud->q($verified),
                                  'data1'       => $this->Crud->q($not_verified),
                                  'dataScript'  => 'admin/dataScript/tabel-script' ); 

        $this->load->view('admin/_layout/wrapper', $data);
    }

    //03_verifikasi anggota
    public function selectAnggota($id_user = null){

        $content        = 'admin/form/formAktivasiAnggota';

        $where          = array(  'id_user'     => $id_user );
        $data           = array(  'title'       => 'Verifikasi',
                                  'isi'         => $content,
                                  'data'        => $this->Crud->gw('user',$where),//get detail estimasi
                                  'dataScript'  => 'admin/dataScript/tabel-script' ); 

        $this->load->view('admin/_layout/wrapper', $data);
    }

    //03_verifikasi anggota
    public function selectAnggotaAction($id_user){
        
        $input          = $this->input->post(NULL, TRUE);
        $where          = array( 'id_user' => $id_user );

        //deteck with password or not
        if($input['new_pass']==NULL){
            $items = array(//save all post in array
                'status_approved'   => $input['status_approved'],
                'level'             => $input['level'],
            );
        }else{
            $items = array(//save all post in array
                'status_approved'   => $input['status_approved'],
                'level'             => $input['level'],
                'password'          => md5($input['new_pass']),
            );
        }

        $this->Crud->u('user', $items, $where ); //save in database
        $this->session->set_flashdata('update_sukses', 'Update Berhasil !'); //for notif it is succes

        redirect(base_url('Super_admin/daftarTeam'));
    }

    //04_ tambah anggota
    public function tambahAnggota(){
            
        $content        = 'admin/form/formTambahAnggota';

        $data           = array(  'title'       => 'SA | TIMSES',
                                  'isi'         => $content,
                                  'dataScript'  => 'admin/dataScript/tabel-script' );    

        $this->load->view('admin/_layout/wrapper', $data);
    }

    //04_ aksi tambah anggota
    public function tambahAnggotaAction(){

        $no_ktp         = $this->input->post('no_ktp_anggota');
        $nama           = $this->input->post('nama_anggota');
        $alamat         = $this->input->post('alamat_anggota');
        $no_hp          = $this->input->post('no_hp_anggota');
        $username       = $this->input->post('username_anggota');
        $cek_pass       = $this->input->post('password_anggota');
        $password       = md5($cek_pass);

        $this->HomeModel->daftarAnggota($no_ktp, $nama, $alamat, $no_hp, $username, $password);
        redirect('Super_admin/tambahAnggota');
    }

    //05_ info tim
    public function infoTeam(){

        $content        = 'admin/dashboard/superAdmin/info_team';

        $verified       = 'SELECT * FROM user WHERE status_approved != "" AND level IS NOT NULL';
        $data           = array(  'title'       => 'Super Admin | Tim Sukses',
                                  'isi'         => $content,
                                  'data'        => $this->Crud->q( $verified ),//get detail estimasi
                                  'dataScript'  => 'admin/dataScript/tabel-script' );

        $this->load->view('admin/_layout/wrapper', $data);
    }

    //05_ info tim detail
    public function infoTeamDetail($id_user){

        $content        = 'admin/dashboard/superAdmin/info_team_detail';

        $id             = array( 'id_user'      => $id_user);
        $data           = array( 'title'        => 'Super Admin | Tim Sukses',
                                 'isi'          => $content,
                                 'data'         => $this->Crud->gw( 'user', $id ),//get detail estimasi
                                 'data1'        => $this->Crud->gw( 'daftar_pemilih', $id),
                                 'dataScript'   => 'admin/dataScript/tabel-script' ); 

        $this->load->view('admin/_layout/wrapper', $data);
    }

    //06_ total pemilih mamajang
    public function pemilihMamajang(){

        $content        = 'admin/dashboard/superAdmin/pemilih_mamajang';

        $verified       = 'SELECT * FROM daftar_pemilih WHERE id_kecamatan = "1" AND status_verifikasi IS NOT NULL';
        $data           = array(  'title'       => 'Data Pemilih Mamajang',
                                  'isi'         => $content,
                                  // 'data'        => $this->Crud->q($verified),
                                  'data'        => $this->HomeModel->pemilih_mamajang(),
                                  'count'       => $this->HomeModel->get_count(),
                                  'count1'       => $this->HomeModel->get_mamajang(),
                                  'count2'       => $this->HomeModel->get_mariso(),
                                  'count3'       => $this->HomeModel->get_tamalate(),
                                  // 'countAll'    => $this->Crud->ca('daftar_pemilih'),
                                  'dataScript'  => 'admin/dataScript/tabel-script' ); 

        $this->load->view('admin/_layout/wrapper', $data);
        // redirect(base_url('Super_admin/badgesAll'));
    }

    //06_ total pemilih mariso
    public function pemilihMariso(){

        $content        = 'admin/dashboard/superAdmin/pemilih_mariso';

        $verified       = 'SELECT * FROM daftar_pemilih WHERE id_kecamatan = "1" AND status_verifikasi IS NOT NULL';
        $data           = array(  'title'       => 'Data Pemilih Mariso',
                                  'isi'         => $content,
                                  // 'data'        => $this->Crud->q($verified),
                                  'data'        => $this->HomeModel->pemilih_mariso(),
                                  'count1'       => $this->HomeModel->get_mamajang(),
                                  'count2'       => $this->HomeModel->get_mariso(),
                                  'count3'       => $this->HomeModel->get_tamalate(),
                                  'count'       => $this->HomeModel->get_count(),
                                  'dataScript'  => 'admin/dataScript/tabel-script' ); 

        $this->load->view('admin/_layout/wrapper', $data);
    }

    //06_ total pemilih tamalate
    public function pemilihTamalate(){

        $content        = 'admin/dashboard/superAdmin/pemilih_tamalate';

        $verified       = 'SELECT * FROM daftar_pemilih WHERE id_kecamatan = "1" AND status_verifikasi IS NOT NULL';
        $data           = array(  'title'       => 'Data Pemilih Tamalate',
                                  'isi'         => $content,
                                  // 'data'        => $this->Crud->q($verified),
                                  'data'        => $this->HomeModel->pemilih_tamalate(),
                                  'count'       => $this->HomeModel->get_count(),
                                  'count1'       => $this->HomeModel->get_mamajang(),
                                  'count2'       => $this->HomeModel->get_mariso(),
                                  'count3'       => $this->HomeModel->get_tamalate(),
                                  'dataScript'  => 'admin/dataScript/tabel-script' ); 

        $this->load->view('admin/_layout/wrapper', $data);
    }

    //06_ total pemilih badgesAll
    public function badgesAll(){

        // $content        = 'admin/dashboard/superAdmin/pemilih_tamalate';

        $verified       = 'SELECT * FROM daftar_pemilih WHERE id_kecamatan = "1" AND status_verifikasi IS NOT NULL';
        $data           = array(  'title'       => 'Data Pemilih Tamalate',
                                  // 'isi'         => $content,
                                  // 'data'        => $this->Crud->q($verified),
                                  // 'data'        => $this->HomeModel->pemilih_tamalate(),
                                  'count'       => $this->HomeModel->get_count(),
                                  'count1'      => $this->HomeModel->get_mamajang(),
                                  'count2'      => $this->HomeModel->get_mariso(),
                                  'count3'      => $this->HomeModel->get_tamalate(),  
                                  'dataScript'  => 'admin/dataScript/tabel-script' ); 

        $this->load->view('admin/_layout/wrapper', $data);
    }

    //07_ profile
    public function profile(){

        $content        = 'admin/form/formProfileSa';

        $data           = array( 'title'        => 'SA | TIMSES',
                                 'isi'          => $content,
                                 'count'        => $this->HomeModel->get_count(),
                                 'count1'       => $this->HomeModel->get_mamajang(),
                                 'count2'       => $this->HomeModel->get_mariso(),
                                 'count3'       => $this->HomeModel->get_tamalate(),
                                 'dataScript'   => 'admin/dataScript/beranda-script',
        );

        $this->load->view('admin/_layout/wrapper', $data);
    }

    //07_ update profile
    public function userUpdateAction(){

        $input = $this->input->post(NULL, TRUE); //get all post with xss filter

        //deteck with password or not
        if($input['new_pass']==NULL){
            $items      = array( 
                            'nama_lengkap_user' => $input['nama_lengkap'],
                            'username'          => $input['username'],
            );
        }else{
            $items      = array( 
                            'nama_lengkap_user' => $input['nama_lengkap'],
                            'username'          => $input['username'],
                            'password'          => md5($input['new_pass']),
            );
        }

        $where          = array(//get id for models Crud params w
                            "id_user"           => $this->session->userdata('id_user'),
        );

        //update session
        $sess           = array(
                            "nama_user"         => $input['nama_lengkap'],
                            "username"          => $input['username'],
        );

        $this->session->set_userdata($sess);

        $this->Crud->u('user', $items, $where ); //save in database
        $this->session->set_flashdata('update_sukses', 'Update Berhasil !'); //for notif it is succes

        redirect('Super_admin');
    }
}
