<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Customer_order extends MY_Admin {
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
      // $this->template->set_js(base_url().'build/customer_order.js','footer', 'remote');

       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Customer_order/input_order');
       $this->template->render();
    }

    function detail_data(){
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Customer_order/detail_order');
       $this->template->render();
    }

     function print(){
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Customer_order/print_order');
       $this->template->render();
    }

    function view(){
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Customer_order/view_order');
       $this->template->render();
    }
 }   