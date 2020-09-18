<?php
class Model_tanda_tangan extends CI_Model {
    public $tabletanda_tangan = 'tandatangan';


    public function __construct()
    {
        $this->load->database();

    }

    public function get_tanda_tangan()
    {
        $this->db->select('*');
        $this->db->from('tandatangan');
        $query = $this->db->get();

        return $query;
        
    }


    public function get_tanda_tangan_byId($id)
    {
        $query = $this->db->get_where('tandatangan', array('id_tandatangan' => $id))->row();

        // Return hasil query
        return $query;

    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tabletanda_tangan, $data);

        // Return hasil query
        // return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_tandatangan', $id)
        ->update($this->tabletanda_tangan, $data);
        
        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
      ->where('id_tandatangan', $id)
      ->delete($this->tabletanda_tangan);
      
      // Return hasil query
      return $query;
  }




}
