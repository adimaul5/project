<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_input_transaksi extends CI_Model {

	var $table = 'td_transaksi_kandang';

	public function getTableOther($table)
	{
		// if ($where!="") {
		// 	$this->db->where($where);
		// }
		return $this->db->join('tm_kandang b','a.fc_kdkandang=b.fc_kdkandang','left outer')
					    ->get($table.' a');
	}

	public function getTableDet($id)
	{
		// return $this->db->join('size s', 'ad.id_size = s.id_size')
		// 				->join($this->table, 'a.id_article = ad.id_article')
		// 				// ->where()
		return $this->db->join('tm_jenis_telur b','a.fc_kdjenis_telur=b.fc_kdjenis_telur','left outer')
						->where('fc_notrans', $id)
						->order_by('fc_id','ASC')
						->get($this->table.' a');
	}

	public function get_jadwal(){
		return $this->db->get('t_setting_jadwal')->result_array();
	}

	public function getnomor(){
		$this->db->from('t_nomor');
		$this->db->where('kode','TRANS');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_gudang(){
		return $this->db->get('tm_gudang')->result_array();
	}

}	