<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Transfer_telur extends MY_Admin {
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
      
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Transfer_telur/transaksi_telur');
       $this->template->render();
    }

    function kandang_besar(){
     
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Transfer_telur/transfer_kandang_besar');
       $this->template->render();
    }

    function detail_kandang_besar(){
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Transfer_telur/detail_kandang_besar');
       $this->template->render();

    }

    function validasi(){
        $this->template->set_layout('Template/view_admin');
        $this->template->set_content('Transfer_telur/validasi_kandang_besar');
        $this->template->render();
    }
 }   