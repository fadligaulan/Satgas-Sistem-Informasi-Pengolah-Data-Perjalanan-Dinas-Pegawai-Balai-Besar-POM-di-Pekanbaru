<?php
class Model_kabupaten extends CI_Model {
    public $tablekabupaten = 'kabupaten';


    public function __construct()
    {
        $this->load->database();

    }


    public function get_kabupaten()
    {
        
        $this->db->select('*');
        $this->db->from('kabupaten');
        $this->db->order_by('nama_kabupaten', 'ASC');
        $query = $this->db->get();

        return $query;
    }
    

    public function get_kabupaten_byId($id)
    {
        $query = $this->db->get_where('kabupaten', array('id_kabupaten' => $id))->row();

        // Return hasil query
        return $query;

    }
    

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablekabupaten, $data);

        // Return hasil query
        return $query;
    }


    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_kabupaten', $id)
        ->update($this->tablekabupaten, $data);
        
        // Return hasil query
        return $query;
    }

    
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
        ->where('id_kabupaten', $id)
        ->delete($this->tablekabupaten);
      
      // Return hasil query
      return $query;
    }



    
}
