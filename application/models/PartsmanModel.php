<?php defined('BASEPATH') OR exit('No direct script access allowed');


class PartsmanModel extends CI_Model {

    public function get_estimasi(){
        $this->db->select ( '*' );
        $this->db->from ( 'estimasi' );
        $this->db->join ( 'user', 'user.id_user = estimasi.id_user' , 'left' );
        $this->db->join ( 'customer', 'customer.id_customer = estimasi.id_customer' , 'left' );
        $this->db->join ( 'jenis_kendaran', 'jenis_kendaran.id_jenis = estimasi.id_jenis');
        $this->db->order_by('tgl_pembelian', 'asc');
        $this->db->where('done_order', NULL);

       // untuk fetch by estimasi sudah di order $this->db->where('tipe_order', 1);
        $query = $this->db->get ();
        return $query->result();
    }

    public function get_detail($where){
        $this->db->select('*');
        $this->db->from('detail_estimasi');
        $this->db->join('item', 'item.id_item = detail_estimasi.id_item', 'left');
        $this->db->join('estimasi', 'estimasi.id_estimasi = detail_estimasi.id_estimasi', 'left');
        $this->db->join('customer', 'customer.id_customer = detail_estimasi.id_customer', 'left');
        $this->db->where($where);

        $query = $this->db->get();
        return $query->result();
    }

    public function proses_order($where){
        $arr_id = implode(',', $where);
        $id_where = explode(',', $arr_id);

        $this->db->select('*');
        $this->db->from('detail_estimasi');
        $this->db->join('item', 'item.id_item = detail_estimasi.id_item');
        $this->db->join('customer', 'customer.id_customer = detail_estimasi.id_customer');
        $this->db->join('estimasi', 'estimasi.id_estimasi = detail_estimasi.id_estimasi');

        $this->db->where_in('detail_estimasi.id_estimasi', $id_where);
        $this->db->order_by('detail_estimasi.id_estimasi', 'asc');

        $query = $this->db->get();
        return $query->result();
    }

    public function proses_get_estimasi($where){
        $arr_id = implode(',', $where);
        $id_where = explode(',', $arr_id);

        $this->db->select('*');
        $this->db->from('estimasi');

        $this->db->where_in('id_estimasi', $id_where);

        $query = $this->db->get();
        return $query->result();
    }

}
