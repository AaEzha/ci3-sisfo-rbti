<?php

class Dashboard extends CI_Controller {

    public function index(){
        $this->load->view('templates_mahasiswa/header');
        $this->load->view('mahasiswa/dashboard');
        $this->load->view('templates_mahasiswa/footer');
    }
}

?>