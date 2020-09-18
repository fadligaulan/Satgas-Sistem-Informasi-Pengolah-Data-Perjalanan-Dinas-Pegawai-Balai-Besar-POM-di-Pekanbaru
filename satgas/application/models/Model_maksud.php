<?php
class Model_maksud extends CI_Model {
    public $tablemaksud = 'maksud';


    public function __construct()
    {
        $this->load->database();

    }

   public function get_maksud()
    {
        $this->db->select('*');
        $this->db->from('maksud');
        $this->db->order_by('maksud_tugas', 'ASC');
        $query = $this->db->get();

        return $query;
        
    }
     //AMBIL DATA MAKSUD TUGAS BERDASARKAN LOGIN BIDANG
   function get_maksud_tugas_by_bidang(){
    $id_group = $this->session->userdata('id_group');
    $this->db->select('*');
    $this->db->from('maksud');
    $this->db->join('sys_user', 'sys_user.id_group=maksud.id_user');
    $this->db->where('id_group', $id_group);
    $query = $this->db->get();
    return $query;
  }

    
    public function get_maksud_byId($id)
    {
        $query = $this->db->get_where('maksud', array('id_maksud' => $id))->row();

        // Return hasil query
        return $query;

    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablemaksud, $data);

        // Return hasil query
        // return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_maksud', $id)
        ->update($this->tablemaksud, $data);
        
        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
        ->where('id_maksud', $id)
        ->delete($this->tablemaksud);
      
      // Return hasil query
      return $query;
    }
    
    


    
}
