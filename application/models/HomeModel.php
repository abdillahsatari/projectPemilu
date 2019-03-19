<?php defined('BASEPATH') OR exit('No direct script access allowed');
class HomeModel extends CI_Model {

    public function login($username, $password){

        $set_table = $this->db->get('user');
        $query = $this->db->get_where('user', array('username' => $username, 'password' => $password, 'status_approved'=>!NULL));
        //$query = $this->db->query ("SELECT * FROM user WHERE username = '$username' AND password = '$password'");

        if($query->num_rows()>0){
            foreach ($query->result() as $x){
                $sess = array(
                    "nama_user"     => $x->nama_user,
                    "id_user"       => $x->id_user,
                    "foto"          => $x->foto,
                    "username"      => $x->username,
                    "level"         => $x->level,
                    "approve"       => $x->status_approved,
                    "status"        => "login",
                );
                $level      = $x->level;
                $approve    = $a->approve;

            }
            $this->session->set_userdata($sess);

            //login level by controller
            if($level == "super admin"){
                redirect('super_admin');
            }
            // else if($level == "admin kelurahan"){
            //     redirect("admin_kelurahan");
            // }else if($level == "admin anggota"){
            //     redirect("admin_anggota");
            // }
            else{
                echo "Belom ada sisanya";
            }

           // redirect('partsman');
        }else if ($approve == NULL) {
            $this->session->set_flashdata('info', 'akun anda belum terferivikasi, silahkan menghubungi ketua tim sukses!');
            redirect('login');
        }
        else{
           $this->session->set_flashdata('info', 'Username dan Password Anda Salah !');
            redirect('login');
        }
    }

    public function daftarAnggota($no_ktp, $nama, $alamat, $no_hp, $username, $password){
        // $query = $this->db->get_where('user', array('no_ktp' => $no_ktp, 'nama_user' => $nama));
        $query1 = $this->db->get_where('user', array('no_ktp' => $no_ktp));
        $query2 = $this->db->get_where('user', array('no_ktp' => $no_ktp));

        //ada data di db
        if($query1->num_rows()>0){
            $this->session->set_flashdata('info', 'Anda Sudah Mendaftar Silahkan Hubungi Ketua Tim Sukses Untuk Konfirmasi Akun Anda!');
            redirect('Register');
        }
        //tidak ada data di db
        else{

             $items = array(
                'no_ktp'     => $no_ktp,
                'nama_user'  => $nama,
                'alamat'     => $alamat,
                'no_hp'      => $no_hp ,
                'username'   => $username,
                'password'   => $password
            );
            
            $this->db->insert('user', $items);
           $this->session->set_flashdata('info', 'Registrasi Berhasil');
            redirect('Register');
        }

    }

    public function tambahPemilih($id_user, $no_ktp, $nama, $alamat, $no_hp, $no_tps, $kecamatan, $kelurahan){
        $query1 = $this->db->get_where('daftar_pemilih', array('no_ktp_pemilih' => $no_ktp));
        $query2 = $this->db->get_where('daftar_pemilih', array('no_ktp_pemilih' => $no_ktp));

        //ada data di db
        if($query1->num_rows()>0){
            $this->session->set_flashdata('error', 'Pemilih Sudah Terdaftar');
        }
        //tidak ada data di db
        else{

             $items = array(
                'id_user'            => $id_user,
                'no_ktp_pemilih'     => $no_ktp,
                'nama_pemilih'       => $nama,
                'alamat_pemilih'     => $alamat,
                'no_hp_pemilih'      => $no_hp,
                'no_tps'             => $no_tps,
                'id_kecamatan'       => $kecamatan,
                'id_kelurahan'       => $kelurahan,
            );
            
            $this->db->insert('daftar_pemilih', $items);
            $this->session->set_flashdata('success', 'Pemilih Berhasil Ditambahkan');
        }

    }

    public function getKelurahanP($kecamatan_id){
        $query = $this->db->get_where('kecamatan', array('id_kecamatan'=>$kecamatan_id));
        return $query->result();
    }

    public function pemilih_mamajang(){
        $this->db->select('*');
        $this->db->from('daftar_pemilih');
        $this->db->join('user', 'user.id_user = daftar_pemilih.id_user', 'left');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan = daftar_pemilih.id_kecamatan', 'left');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan = daftar_pemilih.id_kelurahan', 'left');
        $this->db->where('daftar_pemilih.id_kecamatan', '1');
        // $this->db->where('status_verifikasi', '1');

        $querry = $this->db->get();
        return $querry->result();

    }

    public function pemilih_mariso(){
        $this->db->select('*');
        $this->db->from('daftar_pemilih');
        $this->db->join('user', 'user.id_user = daftar_pemilih.id_user', 'left');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan = daftar_pemilih.id_kecamatan', 'left');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan = daftar_pemilih.id_kelurahan', 'left');
        $this->db->where('daftar_pemilih.id_kecamatan', '2');
        // $this->db->where('status_verifikasi', '1');

        $querry = $this->db->get();
        return $querry->result();

    }

    public function pemilih_tamalate(){
        $this->db->select('*');
        $this->db->from('daftar_pemilih');
        $this->db->join('user', 'user.id_user = daftar_pemilih.id_user', 'left');
        $this->db->join('kecamatan', 'kecamatan.id_kecamatan = daftar_pemilih.id_kecamatan', 'left');
        $this->db->join('kelurahan', 'kelurahan.id_kelurahan = daftar_pemilih.id_kelurahan', 'left');
        $this->db->where('daftar_pemilih.id_kecamatan', '3');
        // $this->db->where('status_verifikasi', '1');

        $querry = $this->db->get();
        return $querry->result();

    }

    public function myformAjax($id) { 
        $result = $this->db->where("id_kecamatan",$id)->get("kelurahan")->result();
        echo json_encode($result);
    }

    public function get_count(){
        $this->db->select('id_kecamatan, COUNT(id_kecamatan) as total');
        // $this->db->group_by('id_kecamatan'); 
        // $this->db->order_by('id_kecamatan', 'asc');
        // $this->db->where('status_ptm', "1");
         
        // $this->db->where('jenis_estimasi', $where);
        // $this->db->where('status_estimasi', $status_estimasi);
        // $this->db->where('tim_teknisi', 'IS NOT NULL');

        $querry = $this->db->get('daftar_pemilih');
        return $querry->result();
    }

    public function get_mamajang(){
        $this->db->select('id_kecamatan, COUNT(id_kecamatan) as total');
        $this->db->where('id_kecamatan', "1");

        $querry = $this->db->get('daftar_pemilih');
        return $querry->result();
    }

    public function get_mariso(){
        $this->db->select('id_kecamatan, COUNT(id_kecamatan) as total');
        $this->db->where('id_kecamatan', "2");

        $querry = $this->db->get('daftar_pemilih');
        return $querry->result();
    }

    public function get_tamalate(){
        $this->db->select('id_kecamatan, COUNT(id_kecamatan) as total');
        $this->db->where('id_kecamatan', "3");

        $querry = $this->db->get('daftar_pemilih');
        return $querry->result();
    }

    public function hapus_pemilih($id){
        $this->db->delete('daftar_pemilih', array('id_pemilih' => $id)); 
    }

}
