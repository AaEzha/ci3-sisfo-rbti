<?php

class DaftarProposal extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('hak_akses')!='2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    }

    public function index(){
        $data['title'] = "Daftar Proposal";
        $id= $this->session->userdata('uname_user');
        $data['daftarpro'] = $this->db->query("SELECT tb_start_up.nama_start_up,tb_start_up.visi_start_up,tb_start_up.misi_start_up,tb_start_up.struktur_start_up,tb_start_up.logo_start_up,
        tb_start_up.tagline_start_up,tb_biodatatim.nama_hustler,tb_biodatatim.alamat_hustler,tb_biodatatim.telp_hustler,tb_biodatatim.email_hustler,tb_biodatatim.tugas_hustler,
        tb_biodatatim.nama_hipster,tb_biodatatim.alamat_hipster,tb_biodatatim.telp_hipster,tb_biodatatim.email_hipster,tb_biodatatim.tugas_hipster, 
        tb_biodatatim.nama_hacker,tb_biodatatim.alamat_hacker,tb_biodatatim.telp_hacker,tb_biodatatim.email_hacker,tb_biodatatim.tugas_hacker,
        tb_solusi.nama_solusi,tb_solusi.deskripsi_solusi,tb_solusi.logo_solusi,tb_solusi.prev_ui1_solusi,tb_solusi.prev_ui2_solusi,tb_solusi.prev_ui3_solusi,tb_solusi.prev_ui4_solusi,tb_solusi.tahun_buat_solusi,tb_solusi.link_vid_solusi,tb_solusi.link_prod_solusi,tb_solusi.teknologi_solusi,
        tb_paper_pitching.latar_belakang_pp,tb_paper_pitching.permasalahan_pp,tb_paper_pitching.solusi_pp,tb_paper_pitching.progres_pp,tb_paper_pitching.kompetitor_pp,tb_paper_pitching.kompetitor2_pp,tb_paper_pitching.target_pp,tb_paper_pitching.data_pp,tb_paper_pitching.proses_bisnis_pp,tb_paper_pitching.proses_bisnis2_pp,tb_paper_pitching.tahapan_pp,tb_paper_pitching.kelebihan_pp,
        tb_plan.cust_plan,tb_plan.value_plan,tb_plan.channels_plan,tb_plan.relation_plan,tb_plan.key_act_plan,tb_plan.key_res_plan,tb_plan.key_partner_plan,tb_plan.cost_plan,tb_plan.revenue_plan,
        tb_start_up.nim_start_up,tb_biodatatim.nim_biodata,tb_solusi.nim_solusi,tb_paper_pitching.nim_pp,tb_plan.nim_plan,tb_mahasiswa.dosen_mhs,tb_mahasiswa.nim_mhs
        FROM tb_start_up
        INNER JOIN tb_biodatatim ON tb_biodatatim.nim_biodata=tb_start_up.nim_start_up
        INNER JOIN tb_solusi ON tb_solusi.nim_solusi=tb_start_up.nim_start_up
        INNER JOIN tb_paper_pitching ON tb_paper_pitching.nim_pp=tb_start_up.nim_start_up
        INNER JOIN tb_plan ON tb_plan.nim_plan=tb_start_up.nim_start_up
        INNER JOIN tb_mahasiswa ON tb_mahasiswa.nim_mhs=tb_start_up.nim_start_up
        WHERE dosen_mhs='$id'
        ORDER BY tb_mahasiswa.nim_mhs ASC")->result();
        

        $this->load->view('dosen/daftarproposal',$data);
        $this->load->view('templates_dosen/footer');
    }

    public function detailproposal($nim_mhs){
        $where=array('nim_mhs'=>$nim_mhs);
        $data['title'] = "Detail Proposal";
        $id= $this->session->userdata('uname_user');
        $data['detailpro'] = $this->db->query("SELECT tb_start_up.nama_start_up,tb_start_up.visi_start_up,tb_start_up.misi_start_up,tb_start_up.struktur_start_up,tb_start_up.logo_start_up,
        tb_start_up.tagline_start_up,tb_biodatatim.nama_hustler,tb_biodatatim.alamat_hustler,tb_biodatatim.telp_hustler,tb_biodatatim.email_hustler,tb_biodatatim.tugas_hustler,
        tb_biodatatim.nama_hipster,tb_biodatatim.alamat_hipster,tb_biodatatim.telp_hipster,tb_biodatatim.email_hipster,tb_biodatatim.tugas_hipster, 
        tb_biodatatim.nama_hacker,tb_biodatatim.alamat_hacker,tb_biodatatim.telp_hacker,tb_biodatatim.email_hacker,tb_biodatatim.tugas_hacker,
        tb_solusi.nama_solusi,tb_solusi.deskripsi_solusi,tb_solusi.logo_solusi,tb_solusi.prev_ui1_solusi,tb_solusi.prev_ui2_solusi,tb_solusi.prev_ui3_solusi,tb_solusi.prev_ui4_solusi,tb_solusi.tahun_buat_solusi,tb_solusi.link_vid_solusi,tb_solusi.link_prod_solusi,tb_solusi.teknologi_solusi,
        tb_paper_pitching.latar_belakang_pp,tb_paper_pitching.permasalahan_pp,tb_paper_pitching.solusi_pp,tb_paper_pitching.progres_pp,tb_paper_pitching.kompetitor_pp,tb_paper_pitching.kompetitor2_pp,tb_paper_pitching.target_pp,tb_paper_pitching.data_pp,tb_paper_pitching.proses_bisnis_pp,tb_paper_pitching.proses_bisnis2_pp,tb_paper_pitching.tahapan_pp,tb_paper_pitching.kelebihan_pp,
        tb_plan.cust_plan,tb_plan.value_plan,tb_plan.channels_plan,tb_plan.relation_plan,tb_plan.key_act_plan,tb_plan.key_res_plan,tb_plan.key_partner_plan,tb_plan.cost_plan,tb_plan.revenue_plan,
        tb_start_up.nim_start_up,tb_biodatatim.nim_biodata,tb_solusi.nim_solusi,tb_paper_pitching.nim_pp,tb_plan.nim_plan,tb_mahasiswa.dosen_mhs,tb_mahasiswa.nim_mhs
        FROM tb_start_up
        INNER JOIN tb_biodatatim ON tb_biodatatim.nim_biodata=tb_start_up.nim_start_up
        INNER JOIN tb_solusi ON tb_solusi.nim_solusi=tb_start_up.nim_start_up
        INNER JOIN tb_paper_pitching ON tb_paper_pitching.nim_pp=tb_start_up.nim_start_up
        INNER JOIN tb_plan ON tb_plan.nim_plan=tb_start_up.nim_start_up
        INNER JOIN tb_mahasiswa ON tb_mahasiswa.nim_mhs=tb_start_up.nim_start_up
        WHERE dosen_mhs='$id'
        ORDER BY tb_mahasiswa.nim_mhs ASC")->result();
        

        $this->load->view('dosen/detailproposal',$data);
        $this->load->view('templates_dosen/footer');


    }
}

?>