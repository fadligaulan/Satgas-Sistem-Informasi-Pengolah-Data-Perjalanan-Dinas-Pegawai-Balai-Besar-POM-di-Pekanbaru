<?php
class Model_wilayah extends CI_Model {
    public $tablewilayah = 'wilayah';


    public function __construct()
    {
        $this->load->database();

    }

   public function get_wilayah()
    {
       
        $this->db->select('*');
        $this->db->from('wilayah');
        $this->db->join('provinsi', 'wilayah.id_provinsi = provinsi.id_provinsi');
        $this->db->join('kabupaten', 'kabupaten.id_kabupaten = wilayah.id_kabupaten');
        $this->db->order_by('nama_wilayah');
        $query = $this->db->get();

        return $query;
    }
    

    public function get_wilayah_byId($id)
    {
        $query = $this->db->get_where('wilayah', array('id_wilayah' => $id))->row();

        // Return hasil query
        return $query;

    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablewilayah, $data);

        // Return hasil query
        return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_wilayah', $id)
        ->update($this->tablewilayah, $data);
        
        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
        ->where('id_wilayah', $id)
        ->delete($this->tablewilayah);
      
      // Return hasil query
      return $query;
    }


    
}
