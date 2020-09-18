<?php
class Model_cetak extends CI_Model {

     public $tabledasar = 'dasar';
     public $tablemenimbang = 'menimbang';
     public $tableconfig = 'config';
     public $tablepegawai = 'pegawai';
     public $table_surat_tugas = 'surat_tugas';
     public $table_detail = 'detail_surat';

     public function get()
     {
        // Jalankan query
          $query = $this->db->get($this->table);

        // Return hasil query
          return $query;
    }

    public function get_where($where)
    {
        // Jalankan query
          $query = $this->db
          ->join('detail_surat', 'detail_surat.id_detail_surat = surat_tugas.id_surat_tugas')
          ->join('pegawai', 'detail_surat.id_detail_pegawai = pegawai.id_pegawai')
          ->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang')
          ->join('maksud', 'maksud.id_maksud = surat_tugas.id_maksud')
          ->join('provinsi', 'provinsi.id_provinsi = surat_tugas.id_provinsi')
          ->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah')
          ->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan')
          ->group_by('id_detail')
          ->where($where)
          ->get($this->table_surat_tugas);

        // Return hasil query
          return $query;
    }


    // AMBIL DATA PEGAWAI UNTUK SURAT TUGAS
    function list_pegawai_by_surat($id)
    {
          $this->db->select('*');
          $this->db->join('pangkat', 'pangkat.id_pangkat=pegawai.id_pangkat');
          $this->db->join('jabatan', 'jabatan.id_jabatan=pegawai.id_jabatan');
          $this->db->join('detail_surat', 'detail_surat.id_detail_pegawai=pegawai.id_pegawai');
          $this->db->join('surat_tugas', 'surat_tugas.id_surat_tugas=detail_surat.id_detail_surat');
          $this->db->join('maksud', 'maksud.id_maksud=surat_tugas.id_maksud');
          $this->db->order_by('pegawai.id_pegawai', 'ASC');
          $this->db->where('id_surat_tugas', $id);
          $query = $this->db->get('pegawai');
          return $query->result();
    }

    // AMBIL DATA  SURAT TUGAS

    function count_pegawai_by_surat($id)
    {
          $this->db->select('*');
          $this->db->from('pegawai');
          $this->db->join('pangkat', 'pangkat.id_pangkat=pegawai.id_pangkat');
          $this->db->join('jabatan', 'jabatan.id_jabatan=pegawai.id_jabatan');
          $this->db->join('detail_surat', 'detail_surat.id_detail_pegawai=pegawai.id_pegawai');
          $this->db->join('surat_tugas', 'surat_tugas.id_surat_tugas=detail_surat.id_detail_surat');
          $this->db->join('maksud', 'maksud.id_maksud=surat_tugas.id_maksud');
          $this->db->order_by('golongan', 'DESC');
          $this->db->where('id_surat_tugas', $id);
          $query = $this->db->count_all_results();
          return $query;
    }

    function list_data_by_surat($where)
    {
      // Jalankan query
          $query = $this->db
          ->select('*')
          ->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah')
          ->join('kabupaten', 'wilayah.id_kabupaten = kabupaten.id_kabupaten')
          ->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang')
          ->join('maksud', 'maksud.id_maksud = surat_tugas.id_maksud')
          ->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan')
          ->where($where)
          ->get($this->table_surat_tugas);

        // Return hasil query
          return $query;
    }


     // AMBIL DATA  SPPD DEPAN MASING MASING PEGAWAI
    function list_data_sppd_by_pegawai($where)
    {
      // Jalankan query
          $query = $this->db
          ->join('detail_surat', 'detail_surat.id_detail_pegawai = pegawai.id_pegawai')
          ->join('pangkat', 'pangkat.id_pangkat=pegawai.id_pangkat')
          ->join('jabatan', 'jabatan.id_jabatan=pegawai.id_jabatan')
          ->join('surat_tugas', 'surat_tugas.id_surat_tugas = detail_surat.id_detail_surat')
          ->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah')
          ->join('kabupaten', 'wilayah.id_kabupaten = kabupaten.id_kabupaten')
          ->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang')
          ->join('maksud', 'maksud.id_maksud = surat_tugas.id_maksud')
          ->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan')
          ->join('ppk', 'ppk.id_ppk = surat_tugas.id_ppk')
          ->where($where)
          ->get($this->tablepegawai);

        // Return hasil query
          return $query;
    }

    //AMBIL DATA PEGAWAI UNTUK SPPD BELAKANG

    function get_sppd_blkg($id)
    {
      // Jalankan query
          $this->db->select('*');
          $this->db->join('wilayah', 'surat_tugas.id_wilayah=wilayah.id_wilayah');
          $this->db->join('ppk', 'ppk.id_ppk=surat_tugas.id_ppk');
          $this->db->where('id_surat_tugas', $id);
          $query = $this->db->get('surat_tugas');
          return $query->result();
    }

    function list_data_sppd_belakang($where)
    {
      // Jalankan query
          $query = $this->db
          ->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah')
          ->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan')
          ->join('ppk', 'ppk.id_ppk = surat_tugas.id_ppk')
          ->where($where)
          ->get($this->table_surat_tugas);

        // Return hasil query
          return $query;
    }

    function spdd_dalam_luar_kota($id_surat_tugas){
        $nama_wilayah = $this->input->post('id_wilayah',TRUE);
        $this->db->select('*');
        $this->db->from('wilayah');
        $this->db->join('surat_tugas', 'wilayah.id_wilayah = surat_tugas.id_wilayah');
        $this->db->where('nama_wilayah', $nama_wilayah);
        $query = $this->db->get()->row();
        return $query;
    }

    //AMBIL DATA SEMUA SPPD
    function get_sppd_on_surat($id_surat_tugas){
        $this->db->select('*');
        $this->db->from('surat_tugas');
        $this->db->join('detail_surat', 'detail_surat.id_detail_surat=surat_tugas.id_surat_tugas');
        $this->db->join('pegawai', 'detail_surat.id_detail_pegawai=pegawai.id_pegawai');
        $this->db->join('pangkat', 'pangkat.id_pangkat=pegawai.id_pangkat');
        $this->db->join('jabatan', 'jabatan.id_jabatan=pegawai.id_jabatan');
        $this->db->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah');
        $this->db->join('kabupaten', 'wilayah.id_kabupaten = kabupaten.id_kabupaten');
        $this->db->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang');
        $this->db->join('maksud', 'maksud.id_maksud = surat_tugas.id_maksud');
        $this->db->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan');
        $this->db->join('ppk', 'ppk.id_ppk = surat_tugas.id_ppk');
        $this->db->order_by('golongan', 'DESC');
        $this->db->where('id_surat_tugas', $id_surat_tugas);
        $query = $this->db->get();
        return $query;
    }


}