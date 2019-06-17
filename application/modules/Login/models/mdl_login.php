<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_login extends CI_model {
	
    public function getlogin($u,$p){
        $pwd = md5($p);
        $this->db->where('username', $u);
        $this->db->where('password', $pwd);
        $query = $this->db->get('admins');
        if($query->num_rows()>0){
            foreach ($query->result() as $row)
            {
                $sess = array('username' => $row->username,
                              'nama' => $row->nama,
                              'id_level'=> $row->id_level); 
                $this->session->set_userdata($sess);
                redirect('home');
            }
        }
        else {
                $this->session->set_flashdata('info', 'maaf username atau password anda salah');
                redirect('login');
             }
    }
}
