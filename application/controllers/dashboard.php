<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('temp/header', $data);
        $this->load->view('dashboard');
        $this->load->view('temp/footer');
    }
}
