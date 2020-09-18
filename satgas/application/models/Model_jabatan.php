<?php
class Model_jabatan extends CI_Model {
    public $tablejabatan = 'jabatan';
    


    public function __construct()
    {
        $this->load->database();

    }

    
    public function get_jabatan()
    {
        $this->db->select('*');
        $this->db->from('jabatan');        
        $this->db->order_by('id_jabatan', 'ASC');
        $query = $this->db->get();

        return $query;
    }


    public function get_jabatan_byId($id)
    {
        $query = $this->db->get_where('jabatan', array('id_jabatan' => $id))->row();

        // Return hasil query
        return $query;

    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablejabatan, $data);

        // Return hasil query
        return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_jabatan', $id)
        ->update($this->tablejabatan, $data);
        
        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
        ->where('id_jabatan', $id)
        ->delete($this->tablejabatan);
      
      // Return hasil query
      return $query;
    }
    
    


    
}
