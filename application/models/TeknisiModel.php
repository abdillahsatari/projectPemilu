<?php defined('BASEPATH') OR exit('No direct script access allowed');


class TeknisiModel extends CI_Model {

	function teknisi_script(){
		$this->db->select('*');
		$this->db->from('estimasi');
		$this->db->join('customer','customer.id_customer=estimasi.id_customer');
		$query = $this->db->get();
		return $query->result();
		
	}

}
