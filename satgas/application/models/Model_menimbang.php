<?php
class Model_menimbang extends CI_Model {
    public $tablemenimbang = 'menimbang';


    public function __construct()
    {
        $this->load->database();

    }

    public function get_menimbang()
    {
        $this->db->select('*');
        $this->db->from('menimbang');
        $this->db->order_by('isi_menimbang', 'ASC');
        $query = $this->db->get();

        return $query;
        
    }
  

    public function get_menimbang_byId($id)
    {
        $query = $this->db->get_where('menimbang', array('id_menimbang' => $id))->row();

        // Return hasil query
        return $query;

    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablemenimbang, $data);

        // Return hasil query
        // return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_menimbang', $id)
        ->update($this->tablemenimbang, $data);
        
        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
      ->where('id_menimbang', $id)
      ->delete($this->tablemenimbang);
      
      // Return hasil query
      return $query;
  }


 


}
