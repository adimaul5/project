<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class M_armada extends MY_Admin {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Mdl_armada');
    }
    
    function index(){
       $this->template->set_js(base_url().'build/armada.js','footer', 'remote');

       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('M_armada/view_armada');
       $this->template->render();
    }

    function act_table(){
    	//  $this->template->set_js(base_url().'build/armada.js','footer', 'remote');	
		  $this->load->view('M_armada/table_armada');
	}

	function ajax_list() {
		$list = $this->Mdl_armada->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $produk) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $produk->fc_nopol;
			$row[] = $produk->fv_ket;
			$row[] = $produk->fv_nama_sopir;
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
						"recordsTotal" => $this->Mdl_armada->count_all(),
						"recordsFiltered" => $this->Mdl_armada->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	public function ajax_add() {
		$data = array(
				'fc_nopol'         => $this->input->post('fc_nopol'),
				'fv_ket'       		 => $this->input->post('fv_ket'),
				'fv_nama_sopir'        	 => $this->input->post('fv_nama_sopir')
			);
		$insert = $this->Mdl_armada->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}
	
	public function ajax_edit($id) {
		$data = $this->Mdl_armada->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_update() {
		$data = array(
				'fc_nopol'         => $this->input->post('fc_nopol'),
				'fv_ket'       		 => $this->input->post('fv_ket'),
				'fv_nama_sopir'        	 => $this->input->post('fv_nama_sopir')
			);
		$this->Mdl_armada->update(array('fc_id' => $this->input->post('fc_id')), $data);
		echo json_encode(array("status" => TRUE));
    }
	
	public function ajax_delete($id) {
      $this->Mdl_armada->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }
}