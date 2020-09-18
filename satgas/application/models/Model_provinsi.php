<?php
class Model_provinsi extends CI_Model {
    public $tableprovinsi = 'provinsi';


    public function __construct()
    {
        $this->load->database();

    }

   public function get_provinsi()
    {
        
        $this->db->select('*');
        $this->db->from('provinsi');
        $this->db->order_by('nama_provinsi');
        $query = $this->db->get();

        return $query;
    }

 
    public function get_provinsi_byId($id)
    {
        $query = $this->db->get_where('provinsi', array('id_provinsi' => $id))->row();

        // Return hasil query
        return $query;

    }


    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tableprovinsi, $data);

        // Return hasil query
        return $query;
    }


    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_provinsi', $id)
        ->update($this->tableprovinsi, $data);
        
        // Return hasil query
        return $query;
    }

    
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
        ->where('id_provinsi', $id)
        ->delete($this->tableprovinsi);
      
      // Return hasil query
      return $query;
    }



    
}
