<?php

class DaftarProposal_model extends CI_Model{

    public function tampil_data(){
      return  $this->db->get('tb_master_proposal');
    }

    public function detail_data($where,$table){
      return $this->db->get_where($table,$where);

    }


} 

?>