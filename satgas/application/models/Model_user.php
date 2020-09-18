<?php
class Model_user extends CI_Model {
    public $tableuser = 'sys_user';


    public function __construct()
    {
        $this->load->database();

    }

    public function get_sys_user()
    {
        $this->db->select('*');
        $this->db->from('sys_user');
        $query = $this->db->get();

        return $query;
        
    }


    public function get_sys_user_byId($id)
    {
        $query = $this->db->get_where('sys_user', array('id_user' => $id))->row();

        // Return hasil query
        return $query;

    }

    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tableuser, $data);

        // Return hasil query
        // return $query;
    }

    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_user', $id)
        ->update($this->tableuser, $data);
        
        // Return hasil query
        return $query;
    }
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
      ->where('id_user', $id)
      ->delete($this->tableuser);
      
      // Return hasil query
      return $query;
  }




}
