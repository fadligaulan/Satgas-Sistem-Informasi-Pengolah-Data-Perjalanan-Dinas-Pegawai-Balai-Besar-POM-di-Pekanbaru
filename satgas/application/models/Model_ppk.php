<?php
class Model_ppk extends CI_Model {
    public $tableppk = 'ppk';


    public function __construct()
    {
        $this->load->database();

    }

    public function get_ppk()
    {
        $this->db->select('*');
        $this->db->from('ppk');
        $query = $this->db->get();

        return $query;
        
    }


    public function get_ppk_byId($id)
    {
        $query = $this->db->get_where('ppk', array('id_ppk' => $id))->row();

        // Return hasil query
        return $query;

    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tableppk, $data);

        // Return hasil query
        // return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_ppk', $id)
        ->update($this->tableppk, $data);
        
        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
      ->where('id_ppk', $id)
      ->delete($this->tableppk);
      
      // Return hasil query
      return $query;
  }




}
