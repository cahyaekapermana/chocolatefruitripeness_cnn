<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_demo extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => "Cek Kematangan"
        );
        $this->load->view('template/header', $data);
        $this->load->view('demo/V_demo');
        $this->load->view('template/footer');
    }
}
    
    /* End of file C_demo.php */
