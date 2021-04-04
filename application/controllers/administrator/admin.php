<?php

class  Admin extends CI_Controller{

    public function index(){
        $data['admin'] = $this ->admin_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/admin',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data=array(
            'id_admin'     =>set_value('id_admin'),
            'uname_admin'  =>set_value('uname_admin'),
            'pass_admin'   =>set_value('pass_admin'),
            'nama_admin'   =>set_value('nama_admin'),

        );

        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/admin_form',$data);
        $this->load->view('templates_administrator/footer');
    }
    
    public function input_aksi(){
        $this->_rules();

        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
            $data=array(
                'uname_admin' =>$this->input->post('uname_admin',TRUE),
                'pass_admin'  =>$this->input->post('pass_admin',TRUE),
                'nama_admin'  =>$this->input->post('nama_admin',TRUE),
            );

            $this->admin_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/admin');

        }

    }

    public function _rules(){
        $this->form_validation->set_rules('uname_admin','uname_admin','required',['required'=>'Username admin wajib diisi!']);
        $this->form_validation->set_rules('pass_admin','pass_admin','required',['required'=>'Password admin wajib diisi!']);
        $this->form_validation->set_rules('nama_admin','nama_admin','required',['required'=>'Nama admin wajib diisi!']);
    }

    public function update($id_admin){
        $where=array('id_admin'=>$id_admin);
        $data['admin']=$this->admin_model->edit_data($where,'tb_admin')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/admin_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi(){
        $id_admin=$this->input->post('id_admin');
        $uname_admin=$this->input->post('uname_admin');
        $pass_admin=$this->input->post('pass_admin');
        $nama_admin=$this->input->post('nama_admin');

        $data=array(
            'uname_admin'=>$uname_admin,
            'pass_admin'=>$pass_admin,
            'nama_admin'=>$nama_admin
        );

        $where=array(
            'id_admin'=>$id_admin
        );

        $this->admin_model->update_data($where,$data,'tb_admin');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Admin Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/admin');

    }

    public function delete($id_admin){
        $where = array('id_admin'=>$id_admin);
        $this->admin_model->hapus_data($where,'tb_admin');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Admin Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect('administrator/admin');

    }

}

?>