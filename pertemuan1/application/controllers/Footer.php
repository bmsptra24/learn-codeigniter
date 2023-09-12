<?php

class Footer extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Bima Saputra';
        $this->load->view('templates/head', $data);
        $this->load->view('templates/footer');
    }
}
