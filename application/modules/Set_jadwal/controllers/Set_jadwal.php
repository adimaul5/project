<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Set_jadwal extends MY_Admin {

	 function __construct() {
        parent::__construct();
        $this->load->model('Mdl_set_jadwal');
    }
    
    function index(){
       $this->template->set_js(base_url().'build/set_jadwal.js','footer', 'remote');

       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Set_jadwal/view_set_jadwal');
       $this->template->render();
    }

    function act_table(){
    	//  $this->template->set_js(base_url().'build/armada.js','footer', 'remote');	
		  $this->load->view('Set_jadwal/table_set_jadwal');
	}

	function ajax_list() {
		$list = $this->Mdl_set_jadwal->get_datatables();
		$data = array();
		$no = $_REQUEST['start'];
		foreach ($list as $produk) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $produk->fv_jadwal;
			$row[] = $produk->ft_waktu_awal;
			$row[] = $produk->ft_waktu_akhir;
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
						"recordsTotal" => $this->Mdl_set_jadwal->count_all(),
						"recordsFiltered" => $this->Mdl_set_jadwal->count_filtered(),
						"data" => $data,
				);
		echo json_encode($output);
	}

	public function ajax_add() {
		$data = array(
				'fv_jadwal'       		 => $this->input->post('fv_jadwal'),
				'ft_waktu_awal'       		 => $this->input->post('ft_waktu_awal'),
				'ft_waktu_akhir'       		 => $this->input->post('ft_waktu_akhir')

			);
		$insert = $this->Mdl_set_jadwal->add($data);
		//print_r($this->db->last_query());
		echo json_encode(array('status' => TRUE));
	}
	
	public function ajax_edit($id) {
		$data = $this->Mdl_set_jadwal->get_by_id($id);
		echo json_encode($data);
	}
	
	public function ajax_update() {
		$data = array(
				'fv_jadwal'       		 => $this->input->post('fv_jadwal'),
				'ft_waktu_awal'       		 => $this->input->post('ft_waktu_awal'),
				'ft_waktu_akhir'       		 => $this->input->post('ft_waktu_akhir')
			);
		$this->Mdl_set_jadwal->update(array('fc_id' => $this->input->post('fc_id')), $data);
		echo json_encode(array("status" => TRUE));
    }
	
	public function ajax_delete($id) {
      $this->Mdl_set_jadwal->delete_by_id($id);
      echo json_encode(array("status" => TRUE));
    }

}	