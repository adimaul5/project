<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Input_transaksi extends MY_Admin {
    public function __construct() {
       parent::__construct();
       date_default_timezone_set('Asia/Jakarta');
       $this->load->model('Mdl_input_transaksi');
    }   
    
    function index(){
       $this->template->set_js(base_url().'build/input_transaksi.js','footer', 'remote');
       $data['jadwal'] = $this->Mdl_input_transaksi->get_jadwal();
       $data['gudang'] = $this->Mdl_input_transaksi->get_gudang();
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Input_transaksi/view_transaksi', $data);
       $this->template->render();
    }

    function act_table(){
        //  $this->template->set_js(base_url().'build/armada.js','footer', 'remote'); 
       // $this->template->set_layout('Template/view_table');
       // $this->template->set_content('Input_transaksi/view_transaksi');
       // $this->template->render();
      $data['jadwal'] = $this->Mdl_input_transaksi->get_jadwal();
        $this->load->view('Input_transaksi/table_input_transaksi', $data);
    }

    function detail_data(){
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Input_transaksi/view_detail_transaksi');
       $this->template->render();
    }

    function ajax_list() {
    // $list = $this->Mdl_article->get_datatables();
    $list = $this->Mdl_input_transaksi->getTableOther('tm_transaksi_kandang')->result();

    // echo $this->db->last_query();
    $data = array();
    foreach ($list as $l) {
      
      if (@$l->fc_id!="") {
        $row = array();
        $row['fc_notrans'] = $l->fc_notrans;
        $row['fc_kdkandang'] = $l->fc_kdkandang;
        $row['fc_total_umur'] = $l->fc_total_umur;
        $row['fc_total_ayam_mati'] = $l->fc_total_ayam_mati;
        $row['fc_total_sisa_ayam_hidup'] = $l->fc_total_sisa_ayam_hidup;
        $row['fc_total_jumlah_telur'] = $l->fc_total_jumlah_telur;
        $row['fc_total_persen_produksi'] = $l->fc_total_persen_produksi;
        $row['fc_total_berat_telur'] = $l->fc_total_berat_telur;
        $row['fc_total_konsumsi_pakan'] = $l->fc_total_konsumsi_pakan;
        $row['fc_total_konsumsi_air'] = $l->fc_total_konsumsi_air;
        $row['fc_total_fcr'] = $l->fc_total_fcr;
        $row['fv_ket'] = $l->fv_ket;
        $data[] = $row;
      }
    }

    $output = array(
            // "draw" => $_REQUEST['draw'],
            // "recordsTotal" => $this->Mdl_dropshipper->count_all(),
            // "recordsFiltered" => $this->Mdl_dropshipper->count_filtered(),
            "data" => $data,
        );
    echo json_encode($output);
  }

  function ajax_list_Det($id) {
    // $list = $this->Mdl_article->get_datatables();
    $list = $this->Mdl_input_transaksi->getTableDet($id)->result();
    // echo $this->db->last_query();
    $data = array();
    foreach ($list as $l) {
      if (@$l->fc_notrans!="") {
        $row = array();
        $row['fc_notrans'] = $l->fc_notrans;
        $row['fv_jenis_telur'] = $l->fv_jenis_telur;
        $row['fn_jumlah_eggtray'] = $l->fn_jumlah_eggtray;
        $row['fc_berat_telur'] = $l->fc_berat_telur;
        $row['fn_jumlah_telur'] = $l->fn_jumlah_telur;
        $data[] = $row;
      }
    }

    // $output = array(
    //        // "draw" => $_REQUEST['draw'],
    //        // "recordsTotal" => $this->Mdl_article->count_all(),
    //        // "recordsFiltered" => $this->Mdl_article->count_filtered(),
    //        "data" => $data,
    //    );
    echo json_encode($data);
  }

  function getNomor(){
       $rows = $this->Mdl_input_transaksi->getnomor();
            //print_r($this->db->last_query());
          $y = date('Y');
          foreach ($rows as $row) {
             echo $row['awalan'].str_pad($row['nomor'], 5, "0", STR_PAD_LEFT);
          }
  }

   function updateNomor(){
        $rows = $this->db->query('select * from t_nomor where kode="TRANS"')->result_array();
        foreach ($rows as $row) {
            $no = $row['nomor'] + 1;
            $aksi = $this->db->update('t_nomor',array('nomor' => $no),array('kode' => 'TRANS'));
        }
    }
}