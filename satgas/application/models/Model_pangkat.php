<?php
class Model_pangkat extends CI_Model {
    public $tablepangkat = 'pangkat';


    public function __construct()
    {
        $this->load->database();

    }


    public function get_pangkat()
    {
        $this->db->select('*');
        $this->db->from('pangkat');
        $this->db->order_by('golongan', 'DESC');
        $query = $this->db->get();
        
        return $query;
    }
    


    public function get_pangkat_byId($id)
    {
        $query = $this->db->get_where('pangkat', array('id_pangkat' => $id))->row();

        // Return hasil query
        return $query;

    }


    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablepangkat, $data);

        // Return hasil query
        return $query;
    }



    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_pangkat', $id)
        ->update($this->tablepangkat, $data);
        
        // Return hasil query
        return $query;
    }

    
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
        ->where('id_pangkat', $id)
        ->delete($this->tablepangkat);
      
      // Return hasil query
      return $query;
    }

    
}
