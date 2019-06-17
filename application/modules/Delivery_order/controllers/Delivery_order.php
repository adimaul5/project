<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Delivery_order extends MY_Admin {
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Delivery_order/delivery_order');
       $this->template->render();
    }

     function print(){
      
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Delivery_order/print_daftar_timbang');
       $this->template->render();
    }

    function view(){
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Delivery_order/view_do');
       $this->template->render();
    }

    function retur(){
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Delivery_order/view_retur');
       $this->template->render();
    }

}    