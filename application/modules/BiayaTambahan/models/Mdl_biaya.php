<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_biaya extends CI_Model {
	
	var $table = 't_setups';

	public function get_by_id1() {
		$this->db->from($this->table);
		$this->db->where('id', '1');
		$query = $this->db->get();
		return $query->row();
	}

	public function update($where, $data) {
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	
}	