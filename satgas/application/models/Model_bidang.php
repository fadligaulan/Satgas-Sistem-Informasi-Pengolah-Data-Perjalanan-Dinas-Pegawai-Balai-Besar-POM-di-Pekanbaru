<?php
class Model_bidang extends CI_Model {
    public $tablebidang = 'bidang';
    

    public function __construct()
    {
        $this->load->database();

    }

    
    public function get_bidang()
    {
        $this->db->select('*');
        $this->db->from('bidang');        
        $this->db->order_by('nama_bidang', 'ASC');
        $query = $this->db->get();

        return $query;
    }



    public function get_bidang_byId($id)
    {
        $query = $this->db->get_where('bidang', array('id_bidang' => $id))->row();

        // Return hasil query
        return $query;

    }



    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablebidang, $data);

        // Return hasil query
        return $query;
    }



    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_bidang', $id)
        ->update($this->tablebidang, $data);
        
        // Return hasil query
        return $query;
    }


    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
      ->where('id_bidang', $id)
      ->delete($this->tablebidang);
      
      // Return hasil query
      return $query;
    } 
}
