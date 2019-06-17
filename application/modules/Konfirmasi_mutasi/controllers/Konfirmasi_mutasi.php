<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Konfirmasi_mutasi extends MY_Admin {

	 function __construct() {
        parent::__construct();
    }
    
    function index(){
       $this->template->set_layout('Template/view_admin');
       $this->template->set_content('Konfirmasi_mutasi/konfirmasi_mutasi');
       $this->template->render();
    }

}	