<?php
class Model_dasar extends CI_Model {
    public $tabledasar = 'dasar';


    public function __construct()
    {
        $this->load->database();

    }

    public function get_dasar()
    {
        $this->db->select('*');
        $this->db->from('dasar');
        $this->db->order_by('isi_dasar', 'ASC');
        $query = $this->db->get();

        return $query;
        
    }


    public function get_dasar_byId($id)
    {
        $query = $this->db->get_where('dasar', array('id_dasar' => $id))->row();

        // Return hasil query
        return $query;

    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tabledasar, $data);

        // Return hasil query
        // return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_dasar', $id)
        ->update($this->tabledasar, $data);
        
        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
      ->where('id_dasar', $id)
      ->delete($this->tabledasar);
      
      // Return hasil query
      return $query;
  }



}
