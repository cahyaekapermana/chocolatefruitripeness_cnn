<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => "Home"
        );
        $this->load->view('template/header', $data);
        $this->load->view('home/V_home');
        $this->load->view('template/footer');
    }
}
    
    /* End of file C_home.php */
