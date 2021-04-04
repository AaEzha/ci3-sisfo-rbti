<?php

class  Dosen extends CI_Controller{

    public function index(){
        $this->load->model('Dosen_model');
        $data['dosen'] = $this ->Dosen_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data=array(
            'id_dosen'     =>set_value('id_dosen'),
            'uname_dosen'  =>set_value('uname_dosen'),
            'pass_dosen'   =>set_value('pass_dosen'),
            'nama_dosen'   =>set_value('nama_dosen'),

        );

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen_form',$data);
        $this->load->view('templates_administrator/footer');
    }
    
    public function input_aksi(){
        $this->_rules();

        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
            $data=array(
                'uname_dosen' =>$this->input->post('uname_dosen',TRUE),
                'pass_dosen'  =>$this->input->post('pass_dosen',TRUE),
                'nama_dosen'  =>$this->input->post('nama_dosen',TRUE),
            );

            $this->load->model('Dosen_model');
            $this->Dosen_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Dosen Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/dosen');

        }

    }

    public function _rules(){
        $this->form_validation->set_rules('uname_dosen','uname_dosen','required',['required'=>'Username dosen wajib diisi!']);
        $this->form_validation->set_rules('pass_dosen','pass_dosen','required',['required'=>'Password dosen wajib diisi!']);
        $this->form_validation->set_rules('nama_dosen','nama_dosen','required',['required'=>'Nama dosen wajib diisi!']);
    }

    public function update($id_dosen){
        $where=array('id_dosen'=>$id_dosen);
        $this->load->model('Dosen_model');
        $data['dosen']=$this->Dosen_model->edit_data($where,'tb_dosen')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dosen_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
        $id_dosen=$this->input->post('id_dosen');
        $uname_dosen=$this->input->post('uname_dosen');
        $pass_dosen=$this->input->post('pass_dosen');
        $nama_dosen=$this->input->post('nama_dosen');

        $data=array(
            'uname_dosen'=>$uname_dosen,
            'pass_dosen'=>$pass_dosen,
            'nama_dosen'=>$nama_dosen
        );

        $where=array(
            'id_dosen'=>$id_dosen
        );
        
        $this->load->model('Dosen_model');
        $this->Dosen_model->update_data($where,$data,'tb_dosen');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Dosen Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/dosen');

    }

    public function delete($id_dosen){
        $where = array('id_dosen'=>$id_dosen);
        $this->load->model('Dosen_model');
        $this->Dosen_model->hapus_data($where,'tb_dosen');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Dosen Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/dosen');

    }

}

?>