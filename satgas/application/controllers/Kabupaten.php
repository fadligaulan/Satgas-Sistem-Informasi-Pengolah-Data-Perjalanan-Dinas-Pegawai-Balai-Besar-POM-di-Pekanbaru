<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabupaten extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cekLogin();
        $this->load->model('Model_kabupaten');
    }


    //FUNCTION YANG PERTAMA KALI DI LOAD SAAT KELAS DI AKSES
    public function index()
    {   
        $data['pageTitle'] = 'DATA KABUPATEN';      
        $data['kabupaten'] = $this->Model_kabupaten->get_kabupaten()->result();
        $data['pageContent'] = $this->load->view('data_kabupaten', $data, TRUE);

        $this->load->view('template/layout', $data);

    }

    //FUNCTION TAMBAH DATA KABUPATEN
    public function insert() 
    {
         if ($this->input->post('submit')) {

          $data = array(
            'id_kabupaten'               => $this->input->post(''),                                              
            'nama_kabupaten'           => $this->input->post('nama_kabupaten'),

          );

          $query = $this->Model_kabupaten->insert($data);

                // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data kabupaten telah ditambahkan');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data kabupaten gagal ditambahkan');
          }

                // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

                // refresh page
          redirect('kabupaten', 'refresh');

          }
      }


    //FUNCTION UPDATE DATA KABUPATEN
    public function update($id = null)
    {
        if ($this->input->post('submit')) {

          $data = array(                                             

            'nama_kabupaten'       => $this->input->post('nama_kabupaten')

          );

                // Jalankan function update pada model
          $id = $this->input->post('id');
          $query = $this->Model_kabupaten->update($id, $data);



                // cek jika query berhasil
          if ($this->db->trans_status() === true)  {
            $this->db->trans_commit();
            $message = array('status' => true, 'message' => 'Data kabupaten telah diupdate');
          }
          else {
            $this->db->trans_rollback();
            $message = array('status' => true, 'message' => 'Data kabupaten gagal diupdate');
          }

                // simpan message sebagai session
          $this->session->set_flashdata('message', $message);

                // refresh page
          redirect('kabupaten');
        }

    }

    //FUNCTION DELETE DATA KABUPATEN
    public function delete($id = null)
    {
        $kabupaten = $this->Model_kabupaten->get_kabupaten_byId($id);

        if (!$kabupaten) show_404();

        $query = $this->Model_kabupaten->delete($id);

          // cek jika query berhasil
        if ($this->db->trans_status() === true)  {
          $this->db->trans_commit();
          $message = array('status' => true, 'message' => 'Data kabupaten telah dihapus');
        }
        else {
          $this->db->trans_rollback();
          $message = array('status' => true, 'message' => 'Data kabupaten gagal dihapus');
        }

          // simpan message sebagai session
        $this->session->set_flashdata('message', $message);

        redirect('kabupaten', 'refresh');

    }

}