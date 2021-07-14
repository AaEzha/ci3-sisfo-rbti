<?php

    class Eproposal_model extends CI_Model{

      public function tampil_data()
    {
        $this->db->select('');
        $this->db->from('tb_master_proposal');
        //$this->db->query("SELECT * FROM tb_master_proposal WHERE id_proposal='$id_proposal'");
        

        $uname_user = $this->session->userdata('uname_user');

        $this->db->where('nim_mhs', $uname_user);
       
 
        $query = $this->db->get('');
        return $query->result();
    }
 
      
       
          public function input_data(){
            $data = [
              'id_proposal' => $this->input->post('id_proposal'),
              'nim_mhs' => $this->session->uname_user,
              'judul_proposal' => strtoupper($this->input->post('judul_proposal')),
              'tema_proposal' => $this->input->post('tema_proposal')
              
              
  
          ];
          $this->db->insert('tb_master_proposal', $data);
          }
 
          
          
          public function getTema(){

            /*$this->db->select('');
            $this->db->from('tb_tema');*/
            $query = $this->db->get('tb_tema');
            
            return $query;
        }

          public function edit_data($where,$table){
            return $this->db->get_where($table,$where);
      
          } 

          public function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
          }

          public function hapus_data($where,$table){
            $this->db->where($where);
            $this->db->delete($table);
          } 

          public function cetakPro($id_proposal){

            $this->db->select('*');
            $this->db->from('tb_master_proposal m');
            $this->db->join('tb_start_up s', 'm.id_proposal=s.id_proposal', 'inner');
            $this->db->join('tb_biodatatim b', 'm.id_proposal=b.id_proposal', 'inner');
            $this->db->join('tb_solusi o', 'm.id_proposal=o.id_proposal', 'inner');
            $this->db->join('tb_paper_pitching p', 'm.id_proposal=p.id_proposal', 'inner');
            $this->db->join('tb_plan l', 'm.id_proposal=l.id_proposal', 'inner');
            $this->db->where('m.id_proposal', $id_proposal);
            


            /*$id_proposal = $this->session->userdata('id_proposal'); 

            $this->db->where('id_proposal', $id_proposal);*/

            $uname_user = $this->session->userdata('uname_user');
 
            $this->db->where('nim_mhs', $uname_user);
           
          
    
            $query = $this->db->get('');
            return $query->result();
            
          }





    }   


?>