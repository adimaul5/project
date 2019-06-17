<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class M_jenis_telur extends MY_Admin {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Mdl_jenis_telur');
    }
    
    function index(){
       $this->template->set_js(base_url().'build/jenis_telur.js','footer', 'remote');
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('M_jenis_telur/view_jenis_telur');
       $this->template->render();
    }

    function act_table(){
    	//  $this->template->set_js(base_url().'build/armada.js','footer', 'remote');	
		  $this->load->view('M_jenis_telur/table_jenis_telur');
	}

	function ajax_list() {
		$list = $this->Mdl_jenis_telur->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $produk) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $produk->fc_kdjenis_telur;
			$row[] = $produk->fv_jenis_telur;
			$row[] = '<p><a href="javascript:void(0)" onclick="edit('."'".$produk->fc_id."'".')" class="btn btn-white btn-info btn-bold">
						<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
						Edit
					</a><a href="javascript:void(0)" onclick="hapus('."'".$produk->fc_id."'".')" class="btn btn-white btn-warning btn-bold">
						<i class="ace-icon fa fa-trash-o bigger-120 orange"></i>
						Delete
					</a></p>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_jenis_telur->count_all(),
						"recordsFiltered" => $this->Mdl_jenis_telur->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	public function ajax_add() {
		$data = array(
				'fc_kdjenis_telur'         => $this->input->post('fv_nama_kandang'),
				'fv_jenis_telur'       		 => $this->input->post('fc_jumlah_ayam')
			);
		$insert = $this->Mdl_jenis_telur->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}
	
	public function ajax_edit($id) {
		$data = $this->Mdl_jenis_telur->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_update() {
		$data = array(
				'fc_kdjenis_telur'         => $this->input->post('fv_nama_kandang'),
				'fv_jenis_telur'       		 => $this->input->post('fc_jumlah_ayam')
			);
		$this->Mdl_jenis_telur->update(array('fc_id' => $this->input->post('fc_id')), $data);
		echo json_encode(array("status" => TRUE));
    }
	
	public function ajax_delete($id) {
      $this->Mdl_jenis_telur->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }
}