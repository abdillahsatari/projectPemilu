<?php defined('BASEPATH') OR exit('No direct script access allowed');


class PtmModel extends CI_Model {

    public function detail_customer($where){
        $this->db->select('*');
        $this->db->from('estimasi');
        $this->db->join('customer', 'customer.id_customer = estimasi.id_customer', 'left');
        $this->db->where($where);

        $query = $this->db->get();
        return $query->result();
    }

    public function detail_item($where){
        $this->db->select('*');
        $this->db->from('estimasi');
        $this->db->join('detail_estimasi', 'detail_estimasi.id_estimasi = estimasi.id_estimasi', 'left');
        $this->db->join('item', 'item.id_item = detail_estimasi.id_item', 'left');
        $this->db->where($where);

        $query = $this->db->get();
        return $query->result();
    }

    // public function count_all($where){
    //     $this->db->select('*');
    //     $this->db->from('estimasi');
    //     $this->db->join('detail_estimasi', 'detail_estimasi.id_estimasi = estimasi.id_estimasi', 'left');
    //     $this->db->join('item', 'item.id_item = detail_estimasi.id_item', 'left');
    //     $this->db->where($where);

    //     $query = $this->db->get();
    //     return $query->result();
    // }
}
