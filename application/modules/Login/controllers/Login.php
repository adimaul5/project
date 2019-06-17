<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Login extends MX_Controller {
    
    function index(){
        $data['module'] = "Template";
        $this->load->view('Template/view_login', $data);
        //$this->load->view('display', $data);
        
    }
    
    // function get_login(){
    //      $u = $this->input->post('username');
    //      $p = $this->input->post('password');
    //      $this->load->model('mdl_login');
            
    //      $this->mdl_login->getlogin($u,$p);
    // }

    function getlogin() {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $user = $this->auth->log_admin($user,$pass);
            if($user==true){
                // $this->session->set_userdata($user);
                $this->session->set_userdata('id_admin',$user->id_admin);
                $this->session->set_userdata('admin_nama',$user->admin_nama);
                $this->session->set_userdata('admin_username',$user->admin_username);
                $this->session->set_userdata('admin_password',$user->admin_password);
                $this->session->set_userdata('admin_view_password',$user->admin_view_password);
                $this->session->set_userdata('admin_level',$user->admin_level);
                $this->session->set_userdata('telephone',$user->telephone);
                $this->session->set_userdata('email',$user->email);
                $this->session->set_userdata('alamat',$user->alamat);
                $data['hasil']=1;
                echo json_encode($data);
            }else{
                $data['hasil'] = 0;
                echo json_encode($data);
            }
    }
    
    public function logout()
    {
	$this->session->sess_destroy();
	redirect('Login','refresh');
    }
}

