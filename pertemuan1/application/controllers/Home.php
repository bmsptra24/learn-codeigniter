<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Bima Saputra';
        // $this->load->model('Data_model');
        // $tes = $this->Data_model->getAllData();
        // var_dump($tes);
        $this->load->view('templates/head', $data);
        $this->load->view('templates/header');
        $this->load->view('templates/body');
        $this->load->view('templates/footer');
    }
}