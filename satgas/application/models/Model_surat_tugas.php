<?php
class Model_surat_tugas extends CI_Model {
  public $tablesurat_tugas = 'surat_tugas';


  public function __construct()
  {
    $this->load->database();

  }


  //AMBIL DATA PROVINSI UNTUK TAMBAH DATA SURAT
  function fetch_provinsi()
  {
    $this->db->order_by("nama_provinsi", "ASC");
    $query = $this->db->get("provinsi");
    return $query->result();
  }

  //AMBIL DATA WILAYAH UNTUK TAMBAH DATA SURAT
  function fetch_wilayah($id_provinsi)
  {
    $this->db->where('id_provinsi', $id_provinsi);
    $this->db->order_by('nama_wilayah', 'ASC');
    $query = $this->db->get('wilayah');
    $output = '<option value="">Pilih Wilayah</option>';
    foreach($query->result() as $row)
    {
     $output .= '<option value="'.$row->id_wilayah.'">'.$row->nama_wilayah.'</option>';
    }
   return $output;
  }

   //AMBIL DATA MAKSUD SESUAI SESSION LOGIN
  public function get_maksud_by_bidang()
  {   
      $id_group = $this->session->userdata('id_group');
      $this->db->select('*');
      $this->db->from('maksud');
      $this->db->join('sys_user', 'maksud.id_user = sys_user.id_group');
      $this->db->where('id_group', $id_group);        
      $this->db->order_by('mata_anggaran', 'DESC');
      $query = $this->db->get();

      return $query;
  }

  //AMBIL DATA BIDANG SESUAI SESSION LOGIN
  public function get_by_bidang()
  {   
      $id_group = $this->session->userdata('id_group');
      $this->db->select('*');
      $this->db->from('bidang');
      $this->db->join('sys_user', 'bidang.id_bidang = sys_user.id_group');
      $this->db->where('id_group', $id_group);        
      $this->db->order_by('nama_bidang', 'ASC');
      $query = $this->db->get();

      return $query;
  }

  //AMBIL DATA SURAT TUGAS BERDASARKAN LOGIN BIDANG
   function get_surat_tugas_by_bidang(){
    $id_group = $this->session->userdata('id_group');
    $this->db->select('surat_tugas.*,COUNT(id_pegawai) AS jml_pegawai, nama_bidang');
    $this->db->from('surat_tugas');
    $this->db->join('bidang', 'bidang.id_bidang=surat_tugas.id_bidang');
    $this->db->join('sys_user', 'sys_user.id_group=surat_tugas.id_bidang');
    $this->db->join('detail_surat', 'surat_tugas.id_surat_tugas=detail_surat.id_detail_surat');
    $this->db->join('pegawai', 'detail_surat.id_detail_pegawai=pegawai.id_pegawai');
    $this->db->where('id_group', $id_group);
    $this->db->order_by('surat_created_at', 'DESC');
    $this->db->group_by('id_surat_tugas');
    $query = $this->db->get();
    return $query;
  }

  //AMBIL DATA SURAT TUGAS BERDASARKAN ID SURAT TUGAS UNTUK HALAMAN INDEX SURAT TUGAS
  function get_surat_tugas(){
    $this->db->select('surat_tugas.*,COUNT(id_pegawai) AS jml_pegawai, nama_bidang');
    $this->db->from('surat_tugas');
    $this->db->join('bidang', 'bidang.id_bidang=surat_tugas.id_bidang');
    $this->db->join('detail_surat', 'surat_tugas.id_surat_tugas=detail_surat.id_detail_surat');
    $this->db->join('pegawai', 'detail_surat.id_detail_pegawai=pegawai.id_pegawai');
    $this->db->order_by('time', 'DESC');
    $this->db->group_by('id_surat_tugas');
    $query = $this->db->get();
    return $query;
  }

  //AMBIL DATA  RIWAYAT SURAT TUGAS BERDASARKAN LOGIN ADMIN
  function get_riwayat_surat_tugas(){
    $this->db->select('*');
    $this->db->from('surat_tugas');
    $this->db->join('detail_surat', 'detail_surat.id_detail_surat = surat_tugas.id_surat_tugas');
    $this->db->join('pegawai', 'detail_surat.id_detail_pegawai = pegawai.id_pegawai');
    $this->db->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan');
    $this->db->join('pangkat', 'pangkat.id_pangkat = pegawai.id_pangkat');
    $this->db->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang');
    $this->db->join('maksud', 'maksud.id_maksud = surat_tugas.id_maksud');
    $this->db->join('provinsi', 'provinsi.id_provinsi = surat_tugas.id_provinsi');
    $this->db->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah');
    $this->db->join('ppk', 'ppk.id_ppk = surat_tugas.id_ppk');
    $this->db->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan');
    $this->db->join('surat_tugas_status', 'surat_tugas.id_surat_tugas = surat_tugas_status.id_surat_tugas');
    $this->db->order_by('surat_created_at', 'DESC');
    $this->db->group_by('surat_tugas.id_surat_tugas');
    $query = $this->db->get();
    return $query;
  }

  //AMBIL DATA  RIWAYAT SURAT TUGAS BERDASARKAN LOGIN BIDANG
  function get_riwayat_surat_tugas_by_bidang(){
    $id_group = $this->session->userdata('id_group');
    $this->db->select('*');
    $this->db->from('surat_tugas');
    $this->db->join('detail_surat', 'detail_surat.id_detail_surat = surat_tugas.id_surat_tugas');
    $this->db->join('pegawai', 'detail_surat.id_detail_pegawai = pegawai.id_pegawai');
    $this->db->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan');
    $this->db->join('pangkat', 'pangkat.id_pangkat = pegawai.id_pangkat');
    $this->db->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang');
    $this->db->join('sys_user', 'surat_tugas.id_bidang = sys_user.id_group');
    $this->db->join('maksud', 'maksud.id_maksud = surat_tugas.id_maksud');
    $this->db->join('provinsi', 'provinsi.id_provinsi = surat_tugas.id_provinsi');
    $this->db->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah');
    $this->db->join('ppk', 'ppk.id_ppk = surat_tugas.id_ppk');
    $this->db->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan');
    $this->db->where('id_group', $id_group);
    $this->db->group_by('id_surat_tugas');
    $query = $this->db->get();
    return $query;
  }

  //AMBIL DATA  RIWAYAT SURAT TUGAS BERDASARKAN LOGIN PPK
  function get_riwayat_surat_tugas_by_ppk(){
    $this->db->select('*');
    $this->db->from('surat_tugas');
    $this->db->join('detail_surat', 'detail_surat.id_detail_surat = surat_tugas.id_surat_tugas');
    $this->db->join('pegawai', 'detail_surat.id_detail_pegawai = pegawai.id_pegawai');
    $this->db->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan');
    $this->db->join('pangkat', 'pangkat.id_pangkat = pegawai.id_pangkat');
    $this->db->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang');
    $this->db->join('maksud', 'maksud.id_maksud = surat_tugas.id_maksud');
    $this->db->join('provinsi', 'provinsi.id_provinsi = surat_tugas.id_provinsi');
    $this->db->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah');
    $this->db->join('ppk', 'ppk.id_ppk = surat_tugas.id_ppk');
    $this->db->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan');
    $this->db->group_by('id_surat_tugas');
    $query = $this->db->get();
    return $query;
  }


   //AMBIL DATA  RIWAYAT SURAT TUGAS BERDASARKAN LOGIN KEPALA
  function get_riwayat_surat_tugas_by_kepala(){
    $this->db->select('*');
    $this->db->from('surat_tugas');
    $this->db->join('detail_surat', 'detail_surat.id_detail_surat = surat_tugas.id_surat_tugas');
    $this->db->join('pegawai', 'detail_surat.id_detail_pegawai = pegawai.id_pegawai');
    $this->db->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan');
    $this->db->join('pangkat', 'pangkat.id_pangkat = pegawai.id_pangkat');
    $this->db->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang');
    $this->db->join('maksud', 'maksud.id_maksud = surat_tugas.id_maksud');
    $this->db->join('provinsi', 'provinsi.id_provinsi = surat_tugas.id_provinsi');
    $this->db->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah');
    $this->db->join('ppk', 'ppk.id_ppk = surat_tugas.id_ppk');
    $this->db->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan');
    $this->db->group_by('id_surat_tugas');
    $query = $this->db->get();
    return $query;
  }

  //AMBIL DATA RIWAYAT SPPD BERDASARKAN LOGIN ADMIN
  function get_riwayat_sppd(){
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
    $query = $this->db->get();
    return $query;
  }

  //AMBIL DATA RIWAYAT SPPD BERDARAKAN LOGIN BIDANG
  function get_riwayat_sppd_by_bidang(){
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
     $query = $this->db->get();
     return $query;
  }

  //AMBIL DATA RIWAYAT SPPD BERDASARKAN LOGIN PPK
  function get_riwayat_sppd_by_ppk(){
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
    $query = $this->db->get();
    return $query;
  }

  //AMBIL DATA RIWAYAT SPPD BERDASARKAN LOGIN KEPALA
  function get_riwayat_sppd_by_kepala(){
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
    $query = $this->db->get();
    return $query;
  }


  //AMBIL DATA PEGAWAI / GET PEGAWAI BY SURAT UNTUK UPDATE
  function get_pegawai_by_surat($id_surat_tugas){
    $this->db->select('*');
    $this->db->from('surat_tugas');
    $this->db->join('detail_surat', 'detail_surat.id_detail_surat=surat_tugas.id_surat_tugas');
    $this->db->join('pegawai', 'detail_surat.id_detail_pegawai=pegawai.id_pegawai');
    $this->db->where('id_surat_tugas',$id_surat_tugas);
    $query = $this->db->get();
    return $query;
  }

  //GET SPPD ON SURAT TUGAS
   function get_sppd_on_surat($id_surat_tugas){
    $this->db->select('*');
    $this->db->from('surat_tugas');
    $this->db->join('detail_surat', 'detail_surat.id_detail_surat=surat_tugas.id_surat_tugas');
    $this->db->join('pegawai', 'detail_surat.id_detail_pegawai=pegawai.id_pegawai');
    $this->db->join('pangkat', 'pangkat.id_pangkat=pegawai.id_pangkat');
    $this->db->join('jabatan', 'jabatan.id_jabatan=pegawai.id_jabatan');
    $this->db->where('id_surat_tugas', $id_surat_tugas);
    $query = $this->db->get();
    return $query;
  }

  

  //GET SURAT BY BIDANG

  public function get_sppd_by_bidang()
  {
    $id_group = $this->session->userdata('id_group');
    $this->db->select('*');
    $this->db->from('surat_tugas');
    $this->db->join('detail_surat', 'detail_surat.id_detail_surat = surat_tugas.id_surat_tugas');
    $this->db->join('pegawai', 'detail_surat.id_detail_pegawai = pegawai.id_pegawai');
    $this->db->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan');
    $this->db->join('pangkat', 'pangkat.id_pangkat = pegawai.id_pangkat');
    $this->db->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang');
    $this->db->join('sys_user', 'surat_tugas.id_bidang = sys_user.id_group');
    $this->db->join('maksud', 'maksud.id_maksud = surat_tugas.id_maksud');
    $this->db->join('provinsi', 'provinsi.id_provinsi = surat_tugas.id_provinsi');
    $this->db->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah');
    $this->db->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan');
    $this->db->where('id_group', $id_group);
    $this->db->group_by('id_detail');
    $query = $this->db->get();

    return $query;
  }


    // CREATE
  function create_detail($id_provinsi,$id_wilayah,$id_bidang,$id_maksud,$tanggal_st,$no_surat,$dari_tgl,$sampai_tgl,$dipa,$id_ppk,$id_tandatangan,$id_pegawai){
    $this->db->trans_start();
    
    $this->db->select('no_surat');
    $this->db->from('surat_tugas');
    $this->db->where('id_bidang', $id_bidang);
    // $this->db->where('Y');
    $this->db->order_by('no_surat', 'DESC');
    $this->db->limit('1');

    $cekNo = $this->db->get()->row();

    if($cekNo){
      $no_surat = $cekNo->no_surat+1;
    }else{
      $no_surat=1;
    }

    // echo $no_surat;die;
    
    //INSERT TO 
    date_default_timezone_set("Asia/Jakarta");
    $data  = array(
      'id_provinsi'         => $id_provinsi,
      'id_wilayah'          => $id_wilayah,
      'id_bidang'           => $id_bidang,
      'id_maksud'           => $id_maksud,
      'tanggal_st'          => $tanggal_st,
      'no_surat'            => $no_surat,
      'dari_tgl'            => $dari_tgl,
      'sampai_tgl'          => $sampai_tgl,
      'lamanya'             => (((abs(strtotime($sampai_tgl) - strtotime($dari_tgl)))/(60*60*24)) + 1),
      'dipa'                => $dipa,
      'id_ppk'              => $id_ppk,
      'id_tandatangan'      => $id_tandatangan,
      'surat_created_at'    => date('Y-m-d'),
      'time'                => date('Y-m-d H:i:s')

    );
    

    $this->db->insert('surat_tugas', $data);
    // print_r($no_surat); die;
    
    
      //GET ID PACKAGE
    $id_surat_tugas = $this->db->insert_id();

    $result = array();
    foreach($id_pegawai AS $key => $val){
     $result[] = array(
      'id_detail_surat'   => $id_surat_tugas,
      'id_detail_pegawai' => $_POST['id_pegawai'][$key]
      );
    }      
    //MULTIPLE INSERT TO DETAIL TABLE
    $this->db->insert_batch('detail_surat', $result);

    $id_group = $this->session->userdata('id_group');
    $id_bidang = $this->db->insert_id();
    $data  = array(
      'id_surat_tugas'  => $id_surat_tugas,
      'status'          => "diajukan",
      'created_at'      => date('Y-m-d H:i:s'),
      'created_by'      => $id_group,
      'creator_id'      => $id_bidang
    );
    $this->db->insert('surat_tugas_status', $data);
    $this->db->trans_complete();

    // }   
 }


 // UPDATE SURAT TUGAS
 function update_surat($id,$id_bidang,$tanggal_st,$id_provinsi,$id_wilayah,$id_maksud,$dipa,$dari_tgl,$sampai_tgl,$id_ppk,$id_tandatangan,$id_pegawai){
  $this->db->trans_start();
      //UPDATE TO PACKAGE
  $data  = array(
      'id_bidang'             => $id_bidang,
      'tanggal_st'            => $tanggal_st,
      'id_provinsi'           => $id_provinsi,
      'id_wilayah'            => $id_wilayah,
      'id_maksud'             => $id_maksud,
      'lamanya'               => (((abs(strtotime($sampai_tgl) - strtotime($dari_tgl)))/(60*60*24)) + 1),
      'dipa'                  => $dipa,
      'dari_tgl'              => $dari_tgl,
      'sampai_tgl'            => $sampai_tgl,
      'id_ppk'                => $id_ppk,
      'id_tandatangan'        => $id_tandatangan
  );
  $this->db->where('id_surat_tugas',$id);
  $this->db->update('surat_tugas', $data);

  //DELETE DETAIL SURAT TUGAS
  $this->db->delete('detail_surat', array('id_detail_surat' => $id));


  $result = array();
      foreach($id_pegawai AS $key => $val){
         $result[] = array(
          'id_detail_surat'   => $id,
          'id_detail_pegawai'   => $_POST['id_pegawai'][$key]
        );
      }      
      //MULTIPLE INSERT TO DETAIL TABLE
   $this->db->insert_batch('detail_surat', $result);
   $this->db->trans_complete();
  
}

//AMBIL DATA SURAT TUGAS UNTUK UPDATE DATA SURAT
public function get_where($where)
{
        // Jalankan query
  $query = $this->db
  ->join('detail_surat', 'detail_surat.id_detail_surat = surat_tugas.id_surat_tugas')
  ->join('pegawai', 'detail_surat.id_detail_pegawai = pegawai.id_pegawai')
  ->join('jabatan', 'jabatan.id_jabatan = pegawai.id_jabatan')
  ->join('pangkat', 'pangkat.id_pangkat = pegawai.id_pangkat')
  ->join('bidang', 'bidang.id_bidang = surat_tugas.id_bidang')
  ->join('sys_user', 'surat_tugas.id_bidang = sys_user.id_group')
  ->join('maksud', 'maksud.id_maksud = surat_tugas.id_maksud')
  ->join('provinsi', 'provinsi.id_provinsi = surat_tugas.id_provinsi')
  ->join('wilayah', 'wilayah.id_wilayah = surat_tugas.id_wilayah')
  ->join('ppk', 'ppk.id_ppk = surat_tugas.id_ppk')
  ->join('tandatangan', 'tandatangan.id_tandatangan = surat_tugas.id_tandatangan')
  ->where($where)
  ->get($this->tablesurat_tugas);

        // Return hasil query
  return $query;
}

//AMBIL DATA SURAT BERDASARKAN ID SURAT TUGAS
    public function get_surat_tugas_byId($id)
    {
        $query = $this->db->get_where('surat_tugas', array('id_surat_tugas' => $id))->row();

        // Return hasil query
        return $query;

    }


//DELETE DATA SURAT TUGAS
function delete_surat($id){
  $this->db->trans_start();
  $this->db->delete('detail_surat', array('id_detail_surat' => $id));
  $this->db->delete('surat_tugas', array('id_surat_tugas' => $id));
  $this->db->trans_complete();
}



}
