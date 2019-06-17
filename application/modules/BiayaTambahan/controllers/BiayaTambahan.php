<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class BiayaTambahan extends MY_Admin {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Mdl_biaya');
    }
    
    function index(){
       $this->template->set_js(base_url().'build/setting.js','footer', 'remote');

       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('BiayaTambahan/view_biaya');
       $this->template->render();
    }

 //    function act_table(){
 //    	//  $this->template->set_js(base_url().'build/armada.js','footer', 'remote');	
	// 	  $this->load->view('M_kandang_kecil/table_kandang_kecil');
	// }

	public function ajax_edit1() {
		$data = $this->Mdl_biaya->get_by_id1();
		echo json_encode($data);
	}
	
	public function update() {
		$samples = array(
				'idSetting' => 'BIAYAEGG',
				'content' => $this->input->post('biayaegg'),			
				'idSetting1' => 'BIAYAPACK',
				'content1' => $this->input->post('biayapack'),				
				'idSetting2' => 'BIAYATRAN',
				'content2' =>$this->input->post('biayatran'),
			);
        
            $this->db->where('id', '1');

            $this->db->update('t_setups', [
                'biayaegg' => $samples['content'],
                'biayapack' => $samples['content1'],
                'biayatran' => $samples['content2']
            ]);
        redirect('BiayaTambahan');
    }
}