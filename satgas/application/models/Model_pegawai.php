<?php
class Model_pegawai extends CI_Model {
    public $tablepegawai = 'pegawai';


    public function __construct()
    {
        $this->load->database();

    }
   
    //AMBIL DATA PEGAWAI
    public function get_pegawai()
    {
        
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->join('pangkat', 'pegawai.id_pangkat = pangkat.id_pangkat');
        $this->db->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan');
        $this->db->order_by('golongan', 'DESC');
        $query = $this->db->get();

        return $query;
    }


    //AMBIL DATA PEGAWAI BERDASARKAN ID PEGAWAI
    public function get_pegawai_byId($id)
    {
        $query = $this->db->get_where('pegawai', array('id_pegawai' => $id))->row();

        // Return hasil query
        return $query;

    }

    //INSERT DATA PEGAWAI DALAM DATABASE
    public function insert($data)
    {
        // Jalankan query
        $query = $this->db->insert($this->tablepegawai, $data);

        // Return hasil query
        // return $query;
    }


    //UPDATE DATA PEGAWAI DALAM DATABASE
    public function update($id, $data)
    {
        // Jalankan query
        $query = $this->db
        ->where('id_pegawai', $id)
        ->update($this->tablepegawai, $data);
        
        // Return hasil query
        return $query;
    }


    //DELETE DATA PEGAWAI DALAM DATABASE
    public function delete($id)
    {
        // Jalankan query
      $query = $this->db
        ->where('id_pegawai', $id)
        ->delete($this->tablepegawai);
      
      // Return hasil query
      return $query;
    }           
}
