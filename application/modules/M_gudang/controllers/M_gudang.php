<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class M_gudang extends MY_Admin {

	 function __construct() {
        parent::__construct();
        $this->load->model('Mdl_gudang');
    }
    
    function index(){
       $this->template->set_js(base_url().'build/gudang.js','footer', 'remote');

       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('M_gudang/view_gudang');
       $this->template->render();
    }

    function act_table(){
    	//  $this->template->set_js(base_url().'build/armada.js','footer', 'remote');	
		  $this->load->view('M_gudang/table_gudang');
	}

	function ajax_list() {
		$list = $this->Mdl_gudang->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $produk) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $produk->fv_nmgudang;
			$row[] = '<p><a href="javascript:void(0)" onclick="edit('."'".$produk->fc_kdgudang."'".')" class="btn btn-white btn-info btn-bold">
												<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
												Edit
											</a><a href="javascript:void(0)" onclick="hapus('."'".$produk->fc_kdgudang."'".')" class="btn btn-white btn-warning btn-bold">
												<i class="ace-icon fa fa-trash-o bigger-120 orange"></i>
												Delete
											</a></p>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_gudang->count_all(),
						"recordsFiltered" => $this->Mdl_gudang->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	public function ajax_add() {
		$data = array(
				'fv_nmgudang'       		 => $this->input->post('fv_nmgudang')
			);
		$insert = $this->Mdl_gudang->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}
	
	public function ajax_edit($id) {
		$data = $this->Mdl_gudang->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_update() {
		$data = array(
				'fv_nmgudang'       		 => $this->input->post('fv_nmgudang')
			);
		$this->Mdl_gudang->update(array('fc_kdgudang' => $this->input->post('fc_kdgudang')), $data);
		echo json_encode(array("status" => TRUE));
    }
	
	public function ajax_delete($id) {
      $this->Mdl_gudang->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }

}	