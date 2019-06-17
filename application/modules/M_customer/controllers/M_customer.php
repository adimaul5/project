<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class M_customer extends MY_Admin {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Mdl_customer');
    }
    
    function index(){
       $this->template->set_js(base_url().'build/customer.js','footer', 'remote');

       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('M_customer/view_customer');
       $this->template->render();
    }

    function act_table(){
        //  $this->template->set_js(base_url().'build/armada.js','footer', 'remote'); 
        $this->load->view('M_customer/table_customer');
    }

    function ajax_list() {
      $list = $this->Mdl_customer->get_datatables();
      $data = array();
      $no = $_REQUEST['start'];
      foreach ($list as $produk) {
        $no++;
        $row = array();
        $row[] = $no;
        $row[] = $produk->fc_kdcust;
        $row[] = $produk->fv_nama;
        $row[] = $produk->fv_alamat;
        $row[] = $produk->fc_telp;
        $row[] = $produk->fc_hp;
        $row[] = $produk->fv_email;
        $row[] = '<p><a href="javascript:void(0)" onclick="edit('."'".$produk->fc_kdcust."'".')" class="btn btn-white btn-info btn-bold">
                          <i class="ace-icon fa fa-floppy-o bigger-120 blue"></i>
                          Edit
                        </a><a href="javascript:void(0)" onclick="hapus('."'".$produk->fc_kdcust."'".')" class="btn btn-white btn-warning btn-bold">
                          <i class="ace-icon fa fa-trash-o bigger-120 orange"></i>
                          Delete
                        </a></p>';
        $data[] = $row;
      }

      $output = array(
              "draw" => $_REQUEST['draw'],
              "recordsTotal" => $this->Mdl_customer->count_all(),
              "recordsFiltered" => $this->Mdl_customer->count_filtered(),
              "data" => $data,
          );
      echo json_encode($output);
    }

     function getNomor(){
          $rows = $this->Mdl_customer->getnomor();
            //print_r($this->db->last_query());
          $y = date('Y');
          foreach ($rows as $row) {
             echo $row['awalan'].str_pad($row['nomor'], 5, "0", STR_PAD_LEFT);
          }
    }
    function updateNomor(){
        $rows = $this->db->query('select * from t_nomor where kode="CS"')->result_array();
        foreach ($rows as $row) {
            $no = $row['nomor'] + 1;
            $aksi = $this->db->update('t_nomor',array('nomor' => $no),array('kode' => 'CS'));
        }
    }

    public function ajax_add() {
    $data = array(
        'fc_kdcust'         => $this->input->post('fc_kdcust'),
        'fv_nama'           => $this->input->post('fv_nama'),
        'fv_alamat'          => $this->input->post('fv_alamat'),
        'fc_telp'         => $this->input->post('fc_telp'),
        'fc_hp'           => $this->input->post('fc_hp'),
        'fv_email'          => $this->input->post('fv_email')
      );
      $insert = $this->Mdl_customer->add($data);
      //print_r($this->db->last_query());
      echo json_encode(array('status' => TRUE));
    }
    
    public function ajax_edit($id) {
      $data = $this->Mdl_customer->get_by_id($id);
      echo json_encode($data);
    }
    
    public function ajax_update() {
      $data = array(
        'fc_kdcust'         => $this->input->post('fc_kdcust'),
        'fv_nama'           => $this->input->post('fv_nama'),
        'fv_alamat'          => $this->input->post('fv_alamat'),
        'fc_telp'         => $this->input->post('fc_telp'),
        'fc_hp'           => $this->input->post('fc_hp'),
        'fv_email'          => $this->input->post('fv_email')
        );
      $this->Mdl_customer->update(array('fc_kdcust' => $this->input->post('fc_kdcust')), $data);
      echo json_encode(array("status" => TRUE));
      }
    
    public function ajax_delete($id) {
        $this->Mdl_customer->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
      }
}    