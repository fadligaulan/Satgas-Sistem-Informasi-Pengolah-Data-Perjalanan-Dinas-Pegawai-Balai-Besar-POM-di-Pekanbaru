<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_tugas extends MY_Controller {

	public function __construct()
  {
       parent::__construct();
       $this->cekLogin();
       $this->load->model('Model_surat_tugas');
       $this->load->model('Model_bidang');
       $this->load->model('Model_pegawai');
       $this->load->model('Model_provinsi');
       $this->load->model('Model_wilayah');
       $this->load->model('Model_maksud');
       $this->load->model('Model_tanda_tangan');
       $this->load->model('Model_ppk');
       $this->load->model('Model_dasar');
       $this->load->model('Model_menimbang');
       $this->load->helper('tgl_indonesia_helper');
       $this->load->library('form_validation');
       $this->load->helper(array('form', 'url'));

 }


 //HALAMAN PERTAMA KALI DI LOAD SAAT KELAS DI PANGGIL 

 public function index($id = null){

    $data['pageTitle'] = 'BUAT SURAT TUGAS';
    //admin
    $data['bidang'] = $this->Model_bidang->get_bidang()->result();
    //bidang      
    $data['get_by_bidang'] = $this->Model_surat_tugas->get_by_bidang()->result();
    $data['pegawai'] = $this->Model_pegawai->get_pegawai()->result();
    $data['provinsi'] = $this->Model_surat_tugas->fetch_provinsi();
    $data['wilayah'] = $this->Model_wilayah->get_wilayah()->result();
    $data['maksud'] = $this->Model_maksud->get_maksud()->result();
    $data['maksud_by_bidang'] = $this->Model_surat_tugas->get_maksud_by_bidang()->result();
    $data['tanda_tangan'] = $this->Model_tanda_tangan->get_tanda_tangan()->result();
    $data['ppk'] = $this->Model_ppk->get_ppk()->result();
    //admin
    $data['surat_tugas'] = $this->Model_surat_tugas->get_surat_tugas()->result();
    //bidang
    $data['surat_by_bidang'] = $this->Model_surat_tugas->get_surat_tugas_by_bidang()->result();
    $data['pageContent'] = $this->load->view('buat_surat_tugas', $data, TRUE);

    $this->load->view('template/layout', $data);

 }

 function fetch_wilayah()
 {
    if($this->input->post('id_provinsi'))
    {
     echo $this->Model_surat_tugas->fetch_wilayah($this->input->post('id_provinsi'));
    }
 }


 // FUNCTION TAMBAH DATA SURAT 

 public function create($id = null)
 {  

      $this->form_validation->set_rules('id_bidang', 'Nama bidang', 'required');
      $this->form_validation->set_rules('tanggal_st', 'Tangal Surat', 'required');
      $this->form_validation->set_rules('id_pegawai[]', 'Nama Pegawai', 'required');
      $this->form_validation->set_rules('id_provinsi', 'Nama Provinsi', 'required');
      $this->form_validation->set_rules('id_wilayah', 'Nama Kota', 'required');
      $this->form_validation->set_rules('id_maksud', 'Maskud Tugas', 'required');
      $this->form_validation->set_rules('dari_tgl', 'Tanggal Berangkat', 'required');
      $this->form_validation->set_rules('sampai_tgl', 'Sampai Tanggal', 'required');
      $this->form_validation->set_rules('id_tandatangan', 'Penandatangan', 'required');
      $this->form_validation->set_rules('id_ppk', 'Pejabat Pembuat Komitmen', 'required');

      $this->form_validation->set_message('required', '%s masih kosong, silahkan isi');

      $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');


      if($this->form_validation->run() ) {

            $id_provinsi            = $this->input->post('id_provinsi',TRUE);
            $id_wilayah             = $this->input->post('id_wilayah',TRUE);
            $id_bidang              = $this->input->post('id_bidang',TRUE);
            $id_maksud              = $this->input->post('id_maksud',TRUE);
            $tanggal_st             = date('Y-m-d', strtotime($this->input->post('tanggal_st', TRUE)));
            $no_surat               = $this->input->post('no_surat',TRUE);
            $dari_tgl               = date('Y-m-d', strtotime($this->input->post('dari_tgl', TRUE)));
            $sampai_tgl             = date('Y-m-d', strtotime($this->input->post('sampai_tgl', TRUE)));
            $dipa                   = $this->input->post('dipa',TRUE);
            $id_ppk                 = $this->input->post('id_ppk',TRUE);
            $id_tandatangan         = $this->input->post('id_tandatangan',TRUE);
            $id_pegawai             = $this->input->post('id_pegawai',TRUE);
            $this->Model_surat_tugas->create_detail($id_provinsi,$id_wilayah,$id_bidang,$id_maksud,$tanggal_st,$no_surat,$dari_tgl,$sampai_tgl,$dipa,$id_ppk,$id_tandatangan,$id_pegawai);

            $this->db->trans_begin();

            // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
              $this->db->trans_commit();
              $message = array('status' => true, 'message' => 'Surat tugas telah ditambahkan');
            }
            else {
              $this->db->trans_rollback();
              $message = array('status' => true, 'message' => 'Surat tugas gagal ditambahkan');
            }

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);
            redirect('surat-tugas');
        }
    
      else {

        $data['pageTitle'] = 'Buat Surat Tugas';
        //admin
        $data['bidang'] = $this->Model_bidang->get_bidang()->result();
        //bidang      
        $data['get_by_bidang'] = $this->Model_surat_tugas->get_by_bidang()->result();
        $data['pegawai'] = $this->Model_pegawai->get_pegawai()->result();
        $data['provinsi'] = $this->Model_surat_tugas->fetch_provinsi();
        $data['wilayah'] = $this->Model_wilayah->get_wilayah()->result();
        $data['maksud'] = $this->Model_maksud->get_maksud()->result();
        $data['maksud_by_bidang'] = $this->Model_surat_tugas->get_maksud_by_bidang()->result();
        $data['tanda_tangan'] = $this->Model_tanda_tangan->get_tanda_tangan()->result();
        $data['ppk'] = $this->Model_ppk->get_ppk()->result();
        //admin
        $data['surat_tugas'] = $this->Model_surat_tugas->get_surat_tugas()->result();
        //bidang
        $data['surat_by_bidang'] = $this->Model_surat_tugas->get_surat_tugas_by_bidang()->result();
        $data['pageContent'] = $this->load->view('buat_surat_tugas', $data, TRUE);

        $this->load->view('template/layout', $data);

      }

        
  }


// FUNCTION HALAMAN DAFTAR RIWAYAT SURAT TUGAS

public function riwayat_surat_tugas()
{
      $data['pageTitle'] = 'DATA RIWAYAT SURAT TUGAS';
      //bidang
      $data['surat_tugas_by_bidang'] = $this->Model_surat_tugas->get_riwayat_surat_tugas_by_bidang()->result();
      //ppk
      $data['surat_tugas_by_ppk'] = $this->Model_surat_tugas->get_riwayat_surat_tugas_by_ppk()->result();
      //kepala balai
      $data['surat_tugas_by_kepala'] = $this->Model_surat_tugas->get_riwayat_surat_tugas_by_kepala()->result();
      //admin
      $data['surat_tugas'] = $this->Model_surat_tugas->get_riwayat_surat_tugas()->result();
      $data['pageContent'] = $this->load->view('data_riwayat_surat_tugas', $data, TRUE);

      $this->load->view('template/layout', $data);
}


//FUNCTION HALAMAN DAFTAR SPPD
public function riwayat_sppd()
{
      $data['pageTitle'] = 'Data riwayat SPPD';
      //bidang
      $data['sppd_by_bidang'] = $this->Model_surat_tugas->get_riwayat_sppd_by_bidang()->result();
      //ppk
      $data['sppd_by_ppk'] = $this->Model_surat_tugas->get_riwayat_sppd_by_ppk()->result();
      //kepala balai
      $data['sppd_by_kepala'] = $this->Model_surat_tugas->get_riwayat_sppd_by_kepala()->result();
      //admin
      $data['sppd'] = $this->Model_surat_tugas->get_riwayat_sppd()->result();
      $data['pageContent'] = $this->load->view('data_riwayat_sppd', $data, TRUE);

      $this->load->view('template/layout', $data);
}

// FUNCTION HALAMAN GET SPPD BY ID SURAT

public function sppd_on_surat($id = null)
{
      $data['pageTitle'] = 'Data SPPD';
      $data['surat_tugas'] = $this->Model_surat_tugas->get_sppd_on_surat($id)->result();
      $data['pageContent'] = $this->load->view('data_sppd_pegawai', $data, TRUE);

      $this->load->view('template/layout', $data);
}

//FUNTION UPDATE SURAT TUGAS

function update($id = null){

      if ($this->input->post('submit')) {
       $id                        = $this->input->post('id',TRUE);
       $id_bidang                 = $this->input->post('id_bidang',TRUE);
       $tanggal_st                = date('Y-m-d', strtotime($this->input->post('tanggal_st', TRUE)));
       $id_provinsi               = $this->input->post('id_provinsi',TRUE);
       $id_wilayah                = $this->input->post('id_wilayah',TRUE);
       $id_maksud                 = $this->input->post('id_maksud',TRUE);
       $dipa                      = $this->input->post('dipa',TRUE);
       $dari_tgl                  = date('Y-m-d', strtotime($this->input->post('dari_tgl', TRUE)));
       $sampai_tgl                = date('Y-m-d', strtotime($this->input->post('sampai_tgl', TRUE)));
       $id_ppk                    = $this->input->post('id_ppk',TRUE);
       $id_tandatangan            = $this->input->post('id_tandatangan',TRUE);
       $id_pegawai                = $this->input->post('id_pegawai',TRUE);
       $this->Model_surat_tugas->update_surat($id,$id_bidang,$tanggal_st,$id_provinsi,$id_wilayah,$id_maksud,$dipa,$dari_tgl,$sampai_tgl,$id_ppk,$id_tandatangan,$id_pegawai);

       $this->db->trans_begin();

                                    // cek jika query berhasil
       if ($this->db->trans_status() === true)  {
        $this->db->trans_commit();
        $message = array('status' => true, 'message' => 'Surat tugas telah diupdate');
      }
      else {
        $this->db->trans_rollback();
        $message = array('status' => true, 'message' => 'Surat tugas gagal diupdate');
      }

                                    // simpan message sebagai session
      $this->session->set_flashdata('message', $message);
      redirect('surat_tugas');  

    } 

           // Jalankan function update pada model

      $surat_tugas = $this->Model_surat_tugas->get_where(array('id_surat_tugas' => $id))->row();



              // Jika data user tidak ada maka show 404
      if (!$surat_tugas) show_404();

      $data['pageTitle'] = 'Update Surat Tugas';      
      $data['surat_tugas'] = $surat_tugas;
      $data['pegawai_by_surat'] = $this->Model_surat_tugas->get_pegawai_by_surat($id)->result();
      $data['bidang'] = $this->Model_bidang->get_bidang()->result();
      $data['pegawai'] = $this->Model_pegawai->get_pegawai()->result();
      $data['provinsi'] = $this->Model_provinsi->get_provinsi()->result();
      $data['wilayah'] = $this->Model_wilayah->get_wilayah()->result();
      $data['maksud'] = $this->Model_maksud->get_maksud()->result();
      $data['maksud_by_bidang'] = $this->Model_surat_tugas->get_maksud_by_bidang()->result();
      $data['tanda_tangan'] = $this->Model_tanda_tangan->get_tanda_tangan()->result();
      $data['ppk'] = $this->Model_ppk->get_ppk()->result();
      $data['pageContent'] = $this->load->view('update_surat_tugas', $data, TRUE);

      $this->load->view('template/layout', $data);

}

// FUNCTION DELETE SURAT TUGAS

    public function delete($id = null)
    {
            $pegawai = $this->Model_surat_tugas->get_surat_tugas_byId($id);

            if (!$pegawai) show_404();

            $query = $this->Model_surat_tugas->delete_surat($id);

            
            // cek jika query berhasil
            if ($this->db->trans_status() === true)  {
                $this->db->trans_commit();
                $message = array('status' => true, 'message' => 'Data surat telah dihapus');
            }
            else {
                $this->db->trans_rollback();
                $message = array('status' => true, 'message' => 'Data surat gagal dihapus');
            }

            // simpan message sebagai session
            $this->session->set_flashdata('message', $message);

            redirect('surat_tugas', 'refresh');
    }



}