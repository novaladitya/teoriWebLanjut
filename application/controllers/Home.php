<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{
    public function index(){
        $status = $this->session->userdata('status');

        if ($this->session->userdata('status')){
            $this->load->view('home');
        }else{
            redirect('/auth');
        }
    }
}