<?php

class  Paperpitching extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('hak_akses')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }

    public function index(){
        $data['admpaper'] = $this->db->query("SELECT * FROM tb_paper_pitching ")->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/paperpitching',$data);
        $this->load->view('templates_administrator/footer');
    }

   

}

?>