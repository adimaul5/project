<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class M_kandang_kecil extends MY_Admin {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Mdl_kandang_kecil');
    }
    
    function index(){
       $this->template->set_js(base_url().'build/kandang_besar.js','footer', 'remote');

       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('M_kandang_kecil/view_kandang_kecil');
       $this->template->render();
    }

    function act_table(){
    	//  $this->template->set_js(base_url().'build/armada.js','footer', 'remote');	
		  $this->load->view('M_kandang_kecil/table_kandang_kecil');
	}

	function ajax_list() {
		$list = $this->Mdl_kandang_kecil->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $produk) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $produk->fv_nama_kandang_kecil;
			$row[] = $produk->fc_jumlah_ayam;
			$row[] = '<p><a href="javascript:void(0)" onclick="edit('."'".$produk->fc_kdkandang_kecil."'".')" class="btn btn-white btn-info btn-bold">
												<i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
												Edit
											</a><a href="javascript:void(0)" onclick="hapus('."'".$produk->fc_kdkandang_kecil."'".')" class="btn btn-white btn-warning btn-bold">
												<i class="ace-icon fa fa-trash-o bigger-120 orange"></i>
												Delete
											</a></p>';
			$data[] = $row;
		}

		$output = array(
						"draw" => $_REQUEST['draw'],
						"recordsTotal" => $this->Mdl_kandang_kecil->count_all(),
						"recordsFiltered" => $this->Mdl_kandang_kecil->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	public function ajax_add() {
		$data = array(
				'fv_nama_kandang_kecil'         => $this->input->post('fv_nama_kandang'),
				'fc_jumlah_ayam'       		 => $this->input->post('fc_jumlah_ayam')
			);
		$insert = $this->Mdl_kandang_kecil->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}
	
	public function ajax_edit($id) {
		$data = $this->Mdl_kandang_kecil->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_update() {
		$data = array(
				'fv_nama_kandang_kecil'         => $this->input->post('fv_nama_kandang'),
				'fc_jumlah_ayam'       		 => $this->input->post('fc_jumlah_ayam')
			);
		$this->Mdl_kandang->update(array('fc_kdkandang_kecil' => $this->input->post('fc_kdkandang')), $data);
		echo json_encode(array("status" => TRUE));
    }
	
	public function ajax_delete($id) {
      $this->Mdl_kandang_kecil->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }
}