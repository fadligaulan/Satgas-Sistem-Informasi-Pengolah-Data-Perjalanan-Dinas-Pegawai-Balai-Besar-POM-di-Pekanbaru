<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends MY_Controller {

  public function __construct()
  {
       parent::__construct();
       $this->cekLogin();
       $this->load->model('Model_jabatan');


  }


  //FUNCTION YANG PERTAMA KALI LOAD SAAT KELAS DI AKSES
  public function index()
  {
      $data['pageTitle'] = 'DATA JABATAN';      
      $data['jabatan'] = $this->Model_jabatan->get_jabatan()->result();
      $data['pageContent'] = $this->load->view('data_jabatan', $data, TRUE);

      $this->load->view('template/layout', $data);

  }


  //FUNCTION TAMBAH DATA JABATAN
  public function insert() 
  {

       if ($this->input->post('submit')) {

        $data = array(
          'id_jabatan'        => $this->input->post(''),                                              
          'nama_jabatan'    => $this->input->post('nama_jabatan')

        );

        $query = $this->Model_jabatan->insert($data);

                    // cek jika query berhasil
        if ($this->db->trans_status() === true)  {
          $this->db->trans_commit();
          $message = array('status' => true, 'message' => 'Data jabatan telah ditambahkan');
        }
        else {
          $this->db->trans_rollback();
          $message = array('status' => true, 'message' => 'Data jabatan gagal ditambahkan');
        }

                    // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

                    // refresh page
        redirect('jabatan', 'refresh');
      }
  }



  //FUNCTION UPDATE DATA JABATAN
  public function update($id = null)
  {
      if ($this->input->post('submit')) {

        $data = array(                                             
          'nama_jabatan'           => $this->input->post('nama_jabatan'),

        );

                    // Jalankan function update pada model
        $id = $this->input->post('id');
        $query = $this->Model_jabatan->update($id, $data);



                    // cek jika query berhasil
        if ($this->db->trans_status() === true)  {
          $this->db->trans_commit();
          $message = array('status' => true, 'message' => 'Data jabatan telah diupdate');
        }
        else {
          $this->db->trans_rollback();
          $message = array('status' => true, 'message' => 'Data jabatan gagal diupdate');
        }

                    // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

                    // refresh page
        redirect('jabatan');
      }
  }


  //FUNCTION DELETE DATA JABATAN
  public function delete($id = null)
  {
      $jabatan = $this->Model_jabatan->get_jabatan_byId($id);

      if (!$jabatan) show_404();

      $query = $this->Model_jabatan->delete($id);

          // cek jika query berhasil
      if ($this->db->trans_status() === true)  {
        $this->db->trans_commit();
        $message = array('status' => true, 'message' => 'Data jabatan telah diupdate');
      }
      else {
        $this->db->trans_rollback();
        $message = array('status' => true, 'message' => 'Data jabatan gagal diupdate');
      }

        // simpan message sebagai session
      $this->session->set_flashdata('message', $message);

      redirect('jabatan', 'refresh');

  }
}
