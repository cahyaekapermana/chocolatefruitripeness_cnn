<?php


defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{

    function index()
    {
        $data = array(
            'title' => "Beranda"
        );
        $this->load->view('template/header', $data);
        $this->load->view('home/V_home');
        $this->load->view('template/footer');
    }

    function ensiklopedia()
    {
        $data = array(
            'title' => "Ensiklopedia Coklat"
        );
        $this->load->view('template/header', $data);
        $this->load->view('home/V_ensik');
        $this->load->view('template/footer');
    }
}
    
    /* End of file C_home.php */
