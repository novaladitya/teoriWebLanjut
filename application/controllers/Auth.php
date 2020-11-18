<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller{
    public function index(){
        $this->load->view('login');
    }

    public function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if ($email == "noval@adit.com" and $password == "noval"){
            $data = [
                'status' => 'active'
            ];
            $this->session->set_userdata($data);
            redirect('/Home');
        }else{
            redirect('/auth');
        }
    }

    public function logout(){
        $this->session->unset_userdata('status');
        redirect('/Home');
    }
}