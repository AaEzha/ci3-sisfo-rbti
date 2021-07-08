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


   
    
   
    public function detail_data($where,$table){
      return $this->db->get_where($table,$where);
 
    }


} 

?>