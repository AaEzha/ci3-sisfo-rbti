<?php

class DaftarProposal_model extends CI_Model{

  
 
    public function getJoin()
    {
        $this->db->select('*');
        $this->db->from('tb_master_proposal m');
        /*$this->db->join('tb_start_up s', 'm.id_proposal=s.id_proposal', 'inner');
        $this->db->join('tb_biodatatim b', 'm.id_proposal=b.id_proposal', 'inner');
        $this->db->join('tb_solusi o', 'm.id_proposal=b.id_proposal', 'inner');
        $this->db->join('tb_paper_pitching p', 'm.id_proposal=p.id_proposal', 'inner');
        $this->db->join('tb_plan l', 'm.id_proposal=l.id_proposal', 'inner');*/
        $this->db->join('tb_mahasiswa h', 'm.nim_mhs=h.nim_mhs', 'inner');

        $uname_user = $this->session->userdata('uname_user');
 
        $this->db->where('dosen_mhs', $uname_user);
       
  
        $query = $this->db->get('');
        return $query->result();
    }

    public function detailpro1($id_proposal)
    {
        $this->db->select('');
        $this->db->from('tb_start_up');
        $this->db->query("SELECT * FROM tb_start_up WHERE id_proposal='$id_proposal'");
        

        $id = $this->session->userdata('id_proposal');
       
        $this->db->where('id_proposal', $id);
       
 
        $query = $this->db->get('');
        return $query->result();
    }

    public function detailpro2($id_proposal)
    {
        $this->db->select('');
        $this->db->from('tb_biodatatim');
        $this->db->query("SELECT * FROM tb_biodatatim WHERE id_proposal='$id_proposal'");
        

        $id = $this->session->userdata('id_proposal');
       
        $this->db->where('id_proposal', $id);
       
 
        $query = $this->db->get('');
        return $query->result();
    }

    public function detailpro3($id_proposal)
    {
        $this->db->select('');
        $this->db->from('tb_solusi');
        $this->db->query("SELECT * FROM tb_solusi WHERE id_proposal='$id_proposal'");
        

        $id = $this->session->userdata('id_proposal');
       
        $this->db->where('id_proposal', $id);
       
 
        $query = $this->db->get('');
        return $query->result();
    }

    public function detailpro4($id_proposal)
    {
        $this->db->select('');
        $this->db->from('tb_paper_pitching');
        $this->db->query("SELECT * FROM tb_paper_pitching WHERE id_proposal='$id_proposal'");
        

        $id = $this->session->userdata('id_proposal');
       
        $this->db->where('id_proposal', $id);
       
 
        $query = $this->db->get('');
        return $query->result();
    } 

    public function detailpro5($id_proposal)
    {
        $this->db->select('');
        $this->db->from('tb_plan');
        $this->db->query("SELECT * FROM tb_plan WHERE id_proposal='$id_proposal'");
        

        $id = $this->session->userdata('id_proposal');
       
        $this->db->where('id_proposal', $id);
       
 
        $query = $this->db->get(''); 
        return $query->result();
    }


    public function verifikasib1($id_proposal)
    {
        $this->input->post('id_proposal');
     //   $this->input->post('nama_start_up');
        $this->input->post('status_nama_su');
        $this->input->post('catnama_su');
     //   $this->input->post('visi_start_up');
        $this->input->post('status_visi_su');
        $this->input->post('catvisi_su');
     //   $this->input->post('misi_start_up');
        $this->input->post('status_misi_su');
        $this->input->post('catmisi_su');
     //   $this->input->post('struktur_start_up');
        $this->input->post('status_struktur_su');
        $this->input->post('catstruktur_su');
     //   $this->input->post('logo_start_up');
        $this->input->post('status_logo_su');
        $this->input->post('catlogo_su');
     //   $this->input->post('tagline_start_up');
        $this->input->post('status_tagline_su');
        $this->input->post('cattagline_su');

        $data = [ 
            'id_proposal' => $id_proposal,
            //'nama_start_up' => $nama_start_up,
            'status_nama_su' => $status_nama_su,
            'catnama_su' => $catnama_su,
           // 'visi_start_up' => $visi_start_up,
            'status_visi_su' => $status_visi_su,
            'catvisi_su' => $catvisi_su,
          //  'misi_start_up' => $misi_start_up,
            'status_misi_su' => $status_misi_su,
            'catmisi_su' => $catmisi_su,
          //  'struktur_start_up' => $struktur_start_up,
            'status_struktur_su' => $status_struktur_su,
            'catstruktur_su' => $catstruktur_su,
          //  'logo_start_up' => $logo_start_up,
            'status_logo_su' => $status_logo_su,
            'catlogo_su' => $catlogo_su,
          //  'tagline_start_up' => $tagline_start_up,
            'status_tagline_su' => $status_tagline_su,
            'cattagline_su' => $cattagline_su,
            
        ];

        $this->db->where('id_proposal', $id_proposal);
        $this->db->update('tb_start_up', $data);

      }

      public function getIdVerif1($id_proposal) //mengambil 1 
    {
        $query = $this->db->get_where('tb_start_up', [
            'id_proposal' => $id_proposal
        ]);
        return $query;
    }


    public function verifikasib5($id_proposal)
    {
        $this->input->post('id_proposal');
        $this->input->post('status_cust_plan');
        $this->input->post('catcust_plan');
        $this->input->post('status_value_plan');
        $this->input->post('catvalue_plan');
        $this->input->post('status_channels_plan');
        $this->input->post('catchannels_plan');
        $this->input->post('status_relation_plan');
        $this->input->post('catrelation_plan');
        $this->input->post('status_keyact_plan');
        $this->input->post('catkeyact_plan');
        $this->input->post('status_keyres_plan');
        $this->input->post('catkeyres_plan');
        $this->input->post('status_keypart_plan');
        $this->input->post('catkeypart_plan');
        $this->input->post('status_cost_plan');
        $this->input->post('catcost_plan');
        $this->input->post('status_revenue_plan');
        $this->input->post('catrevenue_plan');

        $data = [ 
            'id_proposal' => $id_proposal,
            'status_cust_plan' => $status_cust_plan,
            'catcust_plan' => $catcust_plan,
            'status_value_plan' => $status_value_plan,
            'catvalue_plan' => $catvalue_plan,
            'status_channels_plan' => $status_channels_plan,
            'catchannels_plan' => $catchannels_plan,
            'status_relation_plan' => $status_relation_plan,
            'catrelation_plan' => $catrelation_plan,
            'status_keyact_plan' => $status_keyact_plan,
            'catkeyact_plan' => $catkeyact_plan,
            'status_keyres_plan' => $status_keyres_plan,
            'catkeyres_plan' => $catkeyres_plan,
            'status_keypart_plan' => $status_keypart_plan,
            'catkeypart_plan' => $catkeypart_plan,
            'status_cost_plan' => $status_cost_plan,
            'catcost_plan' => $catcost_plan,
            'status_revenue_plan' => $status_revenue_plan,
            'catrevenue_plan' => $catrevenue_plan,

            
        ];

        $this->db->where('id_proposal', $id_proposal);
        $this->db->update('tb_plan', $data);

      }

      public function getIdVerif5($id_proposal) //mengambil 1 
    {
        $query = $this->db->get_where('tb_plan', [
            'id_proposal' => $id_proposal
        ]);
        return $query;
    }





   
    
   
    public function detail_data($where,$table){
      return $this->db->get_where($table,$where);
 
    }


} 

?>