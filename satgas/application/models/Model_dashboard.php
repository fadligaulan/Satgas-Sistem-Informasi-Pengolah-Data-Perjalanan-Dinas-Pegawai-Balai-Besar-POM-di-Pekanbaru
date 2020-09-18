<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {


    public function count_pegawai()
    {
        $this->db->from('pegawai');

        $query = $this->db->count_all_results();
        return $query;
    }

     public function count_bidang()
    {
        $this->db->from('bidang');

        $query = $this->db->count_all_results();
        return $query;
    }

     public function count_surat_tugas()
    {

        $this->db->from('surat_tugas');

        $query = $this->db->count_all_results();
        return $query;
    }

    public function count_surat_tugas_by_bidang()
    {
        $id_group = $this->session->userdata('id_group');
        $this->db->select('*');
        $this->db->from('surat_tugas');
        $this->db->join('sys_user', 'surat_tugas.id_bidang = sys_user.id_group');
        $this->db->where('id_group', $id_group);
        $query = $this->db->count_all_results();
        return $query;
    }

     public function count_maksud_tugas()
    {

        $this->db->from('maksud');

        $query = $this->db->count_all_results();
        return $query;
    }
  
    public function count_sppd(){
        $this->db->select('*');
        $this->db->from('surat_tugas');
        $this->db->join('detail_surat', 'detail_surat.id_detail_surat=surat_tugas.id_surat_tugas');
        $this->db->join('pegawai', 'detail_surat.id_detail_pegawai=pegawai.id_pegawai');
        $this->db->join('pangkat', 'pangkat.id_pangkat=pegawai.id_pangkat');
        $this->db->join('jabatan', 'jabatan.id_jabatan=pegawai.id_jabatan');
        $this->db->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang');
        $this->db->join('wilayah', 'surat_tugas.id_wilayah = wilayah.id_wilayah');
        $this->db->join('provinsi', 'surat_tugas.id_provinsi = provinsi.id_provinsi');
        $this->db->join('ppk', 'surat_tugas.id_ppk = ppk.id_ppk');
        $this->db->join('tandatangan', 'surat_tugas.id_tandatangan = tandatangan.id_tandatangan');
        $query = $this->db->count_all_results();
        return $query;
    }

    // public function count_sppd_by_bidang(){
    //     $id_group = $this->session->userdata('id_group');
    //     $this->db->select('*');
    //     $this->db->from('surat_tugas');
    //     $this->db->join('detail_surat', 'detail_surat.id_detail_surat=surat_tugas.id_surat_tugas');
    //     $this->db->join('pegawai', 'detail_surat.id_detail_pegawai=pegawai.id_pegawai');
    //     $this->db->join('sys_user', 'surat_tugas.id_bidang = sys_user.id_group');
    //     $this->db->where('id_group', $id_group);
    //     $this->db->group_by('id_pegawai');
    //     $query = $this->db->count_all_results();
    //     return $query;
    // }

    function count_sppd_by_bidang(){
     $id_group = $this->session->userdata('id_group');
     $this->db->select('*');
     $this->db->from('surat_tugas');
     $this->db->join('detail_surat', 'detail_surat.id_detail_surat=surat_tugas.id_surat_tugas');
     $this->db->join('pegawai', 'detail_surat.id_detail_pegawai=pegawai.id_pegawai');
     $this->db->join('pangkat', 'pangkat.id_pangkat=pegawai.id_pangkat');
     $this->db->join('jabatan', 'jabatan.id_jabatan=pegawai.id_jabatan');
     $this->db->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang');
     $this->db->join('sys_user', 'surat_tugas.id_bidang = sys_user.id_group');
     $this->db->join('wilayah', 'surat_tugas.id_wilayah = wilayah.id_wilayah');
     $this->db->join('provinsi', 'surat_tugas.id_provinsi = provinsi.id_provinsi');
     $this->db->join('ppk', 'surat_tugas.id_ppk = ppk.id_ppk');
     $this->db->join('tandatangan', 'surat_tugas.id_tandatangan = tandatangan.id_tandatangan');
     $this->db->where('id_group', $id_group);
     $query = $this->db->count_all_results();
     return $query;
  }   	
}

/* End of file Model_dashboard.php */
/* Location: ./application/models/Model_dashboard.php */